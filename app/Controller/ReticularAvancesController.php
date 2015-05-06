<?php
App::uses('AppController', 'Controller');
/**
 * ReticularAvances Controller
 *
 * @property ReticularAvance $ReticularAvance
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ReticularAvancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	
	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}

	public function materias_cursando($id = null, $clave = null ){
		if(!$id || !$clave ){
		$this->redirect(array('controller'=>'Alumnos','action'=>'index'));
		}else{
			if($this->request->is('post')){
				
				$alumno_id = $this->request->data['Alumno']['id'];
				$alumno_clave= $this->request->data['Alumno']['clave'];
				
				foreach($this->request->data['Materia'] as $materia){
					$materia_id = $materia;
					
					$query_materia_cursando = "UPDATE reticular_avances
									SET aprobada = 2
									WHERE alumno_id=".$alumno_id."
									AND materia_id=".$materia_id;
					$this->ReticularAvance->query($query_materia_cursando);
					
					#echo "query materia".$query_materia_cursando;
					#echo "<pre><br>id de materia";
					#print_r($materia_id);
					#echo "</pre>";
					
				}
				$this->Session->setFlash("Las materias seleccionadas fueron modificadas como materias en curso!");
				$this->redirect(array('controller'=>'ReticularAvances','action'=>'index',$alumno_id,$alumno_clave));
				
				
			}
			
			$this->ReticularAvance->recursive=2;
			$result = $this->ReticularAvance->find('all',array('conditions'=>array('ReticularAvance.alumno_id'=>$id,
											       'ReticularAvance.aprobada=1')));
			$this->set('result',$result);
			$this->set('id',$id);
			$this->set('clave',$clave);
			
		}
		
		
	}
	
	public function liberar_materias($id = null,$clave=null){
		
		if(!$id || !$clave ){
		$this->redirect(array('controller'=>'Alumnos','action'=>'index'));
		}else{				
			if($this->request->is('post')){
				#echo "<pre>data::: ";
				#print_r($this->request->data);
				#echo "</pre><br>";
				
				
				$alumno_id = $this->request->data['Alumno']['id'];
				$alumno_clave= $this->request->data['Alumno']['clave'];
				$materia =$this->request->data['Materia'];
				foreach($materia as $key=>$value){
					#$key es el id de la materia
					$calificacion =$value['calificacion'];
					
					$query_liberar = "UPDATE reticular_avances
									SET calificacion =".$calificacion.",
									aprobada = 3
									WHERE alumno_id=".$alumno_id."
									AND materia_id=".$key;
					$this->ReticularAvance->query($query_liberar);
					
					#echo "query materia".$query_liberar;
					#echo "<pre><br>id de materia";
					#print_r($materia_id);
					#echo "</pre>";
					
				}
				
				$this->Session->setFlash("Las materias seleccionadas fueron liberadas con éxito!");
				$this->redirect(array('controller'=>'ReticularAvances','action'=>'index',$alumno_id,$alumno_clave));
				
				
			}else{
				$this->ReticularAvance->recursive=2;
				$result = $this->ReticularAvance->find('all',array('conditions'=>array('ReticularAvance.alumno_id'=>$id,
												       'ReticularAvance.aprobada=2'))); #en curso
				$this->set('result',$result);
				$this->set('id',$id);
				$this->set('clave',$clave);
				
			}
			
			
			
		}
		
		
		
	}
	
	public function index($id=null,$clave=null) {
		
		
		if(!$id){
			$this->Session->setFlash("Id invalido");
			$this->redirect(array('controller'=>'Alumnos','action'=>'index'));
		}else{
			$this->set("id",$id);
			$this->set("clave",$clave);
		}
		
		if($this->request->is('post')){
			
			//echo "<br>control:: ".$this->request->data['ReticularAvance']['control'];
			//echo "<br>buscar:: ".$this->request->data['ReticularAvance']['buscar'];
			
			if(!empty($this->request->data['ReticularAvance']['control'])){
				$query="SELECT DISTINCT Tetramestre.nombre,Maestro.nombre,Materia.id,Carrera.nombre,PlanEstudio.nombre,
						Materia.clave,Materia.nombre,Materia.creditos,
						Hora.hora,ret_avance.aprobada,ret_avance.calificacion 
                                                FROM reticular_avances as ret_avance
						LEFT JOIN materias as Materia
                                                        ON  ret_avance.materia_id = Materia.id 
                                                LEFT JOIN alumnos as Alumno
							ON Materia.carrera_id = Alumno.carrera_id
						LEFT JOIN maestros as Maestro
							ON Maestro.id = Materia.maestro_id
						LEFT JOIN plan_estudios as PlanEstudio
							ON  Materia.plan_estudio_id = PlanEstudio.id
						LEFT JOIN carreras as Carrera
							ON Materia.carrera_id = Carrera.id
						LEFT JOIN horas as Hora
							ON Materia.hora_id = Hora.id
						LEFT JOIN tetramestres AS Tetramestre
							ON  Tetramestre.id = Materia.tetramestre_id
						WHERE ret_avance.alumno_id=".$this->request->data['ReticularAvance']['control'];
				#aprobada =  3,cursando =2, pendinet=1, 4= todos
				if($this->request->data['ReticularAvance']['buscar']==1 || $this->request->data['ReticularAvance']['buscar']==2 || $this->request->data['ReticularAvance']['buscar']==3 ){
					$query2 = " AND ret_avance.aprobada =".$this->request->data['ReticularAvance']['buscar']." order by Tetramestre.nombre ASC";
					$resultado = $this->ReticularAvance->query($query.$query2);
					//para saber de que es la busqueda
					$bandera = $this->request->data['ReticularAvance']['buscar'];
					//echo "<br>bandera".$bandera;
					$this->set('bandera',$bandera);
				}else if($this->request->data['ReticularAvance']['buscar']==4){
					$query2=" order by Tetramestre.nombre ASC";
					$resultado = $this->ReticularAvance->query($query.$query2);
					$bandera = $this->request->data['ReticularAvance']['buscar'];
					$this->set('bandera',$bandera);
					//echo "<br>bandera".$bandera;
				}
				
				//echo "<br>Query:::".$query;
				//echo "<br>Query2:::".$query2;die;
				
				
				$this->set('datos',$resultado);
				#$this->set('carrera_nombre',$resultado[0]['Carrera']['nombre']);
				#echo "<br><pre>";
				#print_r($resultado);
				#echo "</pre>";die;
			}
			
			
			
		}
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReticularAvance->exists($id)) {
			throw new NotFoundException(__('Invalid reticular avance'));
		}
		$options = array('conditions' => array('ReticularAvance.' . $this->ReticularAvance->primaryKey => $id));
		$this->set('reticularAvance', $this->ReticularAvance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReticularAvance->create();
			if ($this->ReticularAvance->save($this->request->data)) {
				$this->Session->setFlash(__('The reticular avance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reticular avance could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->ReticularAvance->Alumno->find('list');
		$materias = $this->ReticularAvance->Materium->find('list');
		$usuarios = $this->ReticularAvance->Usuario->find('list');
		$this->set(compact('alumnos', 'materias', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ReticularAvance->exists($id)) {
			throw new NotFoundException(__('Invalid reticular avance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReticularAvance->save($this->request->data)) {
				$this->Session->setFlash(__('The reticular avance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reticular avance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReticularAvance.' . $this->ReticularAvance->primaryKey => $id));
			$this->request->data = $this->ReticularAvance->find('first', $options);
		}
		$alumnos = $this->ReticularAvance->Alumno->find('list');
		$materias = $this->ReticularAvance->Materium->find('list');
		$usuarios = $this->ReticularAvance->Usuario->find('list');
		$this->set(compact('alumnos', 'materias', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ReticularAvance->id = $id;
		if (!$this->ReticularAvance->exists()) {
			throw new NotFoundException(__('Invalid reticular avance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ReticularAvance->delete()) {
			$this->Session->setFlash(__('The reticular avance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reticular avance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
