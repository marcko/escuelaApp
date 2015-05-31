<?php
App::uses('AppController', 'Controller');
/**
 * Alumnos Controller
 *
 * @property Alumno $Alumno
 * @property PaginatorComponent $Paginator
 */
class AlumnosController extends AppController {

	public $components = array('Paginator');
	
	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}



	/*public function index() {
		$this->Alumno->recursive = 0;
		$this->set('alumnos',$this->Alumno->find('all',array('conditions'=>
									array('Alumno.status'=>1) )) );
	}*/


	public function view($id = null) {
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$this->Loadmodel('DatosLaborale');
		$this->DatosLaborale->recursive= 0;
		$dl = $this->DatosLaborale->find('first',array(
			'conditions'=>array('DatosLaborale.alumno_id'=>$id)
		));

		$this->set('datoslaborales',$dl);
		//debug($dl);die;
		$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
		$this->set('alumno', $this->Alumno->find('first', $options));
	}


	public function index($id = null){
		if($this->request->is('post')){
			if($this->request->data['Alumno']['buscar']){
				$control =$this->request->data['Alumno']['buscar']; //clave
				
				$mayusculas = strtoupper($control); #pasar clave a mayuscula
				$mayusculas="'".$mayusculas."'";
				
				$datos =$this->Alumno->find('all',array('conditions'=>'Alumno.matricula='.$mayusculas));
				
				$this->set('datos',$datos);
				$this->set('bandera_busqueda',$this->request->data['Alumno']['bandera']);
			}
			
		}else if($id){
				
				$datos =$this->Alumno->find('all',array('conditions'=>'Alumno.id='.$id));
				$this->set('datos',$datos);
				
				#echo "<pre>";
				#print_r($datos);
				#echo "</pre>";die;
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			#echo "<pre>";
			#print_r($this->request->data);
			#echo "</pre>";
			
				
			$this->LoadModel("DatosLaborale");
			$this->LoadModel("Documentacione");
			$this->Alumno->create();
			//debug($this->request->data);die;
			
			$usuario_id= $this->Session->read('usuario.id');
			$this->request->data['Alumno']['usuario_id']= $usuario_id;
			if ($this->Alumno->save($this->request->data)) {
					
				$ide = $this->Alumno->getLastInsertID();
				$fecha_actual = date('Y-m-d H:i:s');
				
				###cuando se crea el alumno, en automatico se agrega el registro en documentaciones
				$query="INSERT INTO documentaciones(alumno_id,created,usuario_id)
					VALUES(".$ide.",'".$fecha_actual."',$usuario_id)";
				$this->Documentacione->query($query);
				###
				
				
			####crear el numero de control,obteniendo las siglas de la carrera y concatenandola con el id del alumno registrado
				$carrera_id =$this->request->data['Alumno']['carrera_id'];
				$query_carrera="SELECT nombre,siglas
						FROM carreras
						WHERE id=".$carrera_id;
				$carrera_siglas = $this->Alumno->query($query_carrera);
				
				$siglas = $carrera_siglas[0]['carreras']['siglas'];
				$clave = $siglas.$ide; //es el numero de control
				
				$query_clave = "UPDATE alumnos SET clave='".$clave."'
						WHERE id= ".$ide;
				$this->Alumno->query($query_clave);
				
			####
				
			####Agregando las materias de acuerdo a la carrera que lleva el alumno 
				$query_select_materias="SELECT * FROM materias WHERE carrera_id =".$carrera_id;
				$materias = $this->Alumno->query($query_select_materias);
				$usuario_id = $this->Session->read('usuario.id');
				$alumno_id = $ide;
				$date= date("Y-m-d H:i:s");
				$aprobada = 1;
				
				
				
				#por cada materia que tenga la carrera que selecciono, se inserta en la tabla reticular avance y se pone estatus 1=pendiente
				foreach($materias as $mat){
					$materia_id = $mat['materias']['id'];
					
					$query_inserta_materia="INSERT INTO reticular_avances(alumno_id,materia_id,aprobada,created,usuario_id)
								VALUES( ".$alumno_id.",".$materia_id.",".$aprobada.",'".$date."',".$usuario_id." )";
					$this->Alumno->query($query_inserta_materia);
					
				}

				
			####
				
			###guarda datos laborales ingresados
				$this->request->data['DatosLaborale']['alumno_id'] =$ide; 
				$this->request->data['DatosLaborale']['trabajo']=$this->request->data['Alumno']['trabajo'];
				$this->request->data['DatosLaborale']['puesto']=$this->request->data['Alumno']['puesto'];
				$this->request->data['DatosLaborale']['direccion']=$this->request->data['Alumno']['direccion'];
				$this->request->data['DatosLaborale']['usuario_id']=$this->Session->read('usuario.id');
				
				$this->DatosLaborale->save($this->request->data);
			##


				$this->Session->setFlash(__('El alumno fue guardado con éxito!'));
				return $this->redirect(array('action' => 'index',$ide));
			} else {
				$this->Session->setFlash(__('The alumno could not be saved. Please, try again.'));
			}
		}
		$municipios = $this->Alumno->Municipio->find('list');
		$estados = $this->Alumno->Estado->find('list');
		$colonias = $this->Alumno->Colonia->find('list',array('order'=>'Colonia.nombre ASC'));
		$usuarios = $this->Alumno->Usuario->find('list');
		$estado_civil =array('casado(a)'=>'Casado(a)','soltero(a)'=>'Soltero(a)');
		$carreras = $this->Alumno->Carrera->find('list',array('order'=>'Carrera.nombre ASC'));
		$this->set(compact('municipios', 'estados','colonias','usuarios','estado_civil','carreras'));
	}


	public function edit($id = null) {
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$this->LoadModel("DatosLaborale");
		
		if ($this->request->is(array('post', 'put'))) {
			
			//activa y desactiva la tetramestre segun loq ue manda la vista
			if(!empty($this->request->data['Alumno']['status'])){
				$this->request->data['Alumno']['status']=1;
			}else{
				$this->request->data['Alumno']['status']=0;	
			}
			
			#guarda la sesion del usuario que edito el alumno
			$this->request->data['Alumno']['usuario_id']=$this->Session->read('usuario.id');
			
			if ($this->Alumno->save($this->request->data)) {
				$this->DatosLaborale->id =  $this->request->data['Alumno']['id_datoslaborales'];  
				$this->request->data['DatosLaborale']['alumno_id'] =$this->request->data['Alumno']['id']; 
				$this->request->data['DatosLaborale']['trabajo']=$this->request->data['Alumno']['trabajo'];
				$this->request->data['DatosLaborale']['puesto']=$this->request->data['Alumno']['puesto'];
				$this->request->data['DatosLaborale']['direccion']=$this->request->data['Alumno']['direccion'];
				$this->request->data['DatosLaborale']['usuario_id']=$this->request->data['Alumno']['usuario_id'];
				//debug($this->request->data);die;
	
				
				if($this->DatosLaborale->save($this->request->data)){
					//$this->redirect(array('action'=>'view',$this->request->data['Alumno']['id']));
					$this->Session->setFlash(__('El alumno fué modificado con éxito!'));
					return $this->redirect(array('action' => 'index',$id));
				}
				
				
			} else {
				$this->Session->setFlash(__('The alumno could not be saved. Please, try again.'));
			}
		} else {
			$datoslaborales=$this->DatosLaborale->find("all",array("conditions"=>array("DatosLaborale.alumno_id"=>$id)));//consulta datos de la tabla datos laborales.
			$this->set("datoslaborales",$datoslaborales);
			$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
			$this->request->data = $this->Alumno->find('first', $options);
			$this->set('status',$this->request->data['Alumno']['status']);

		}
		$municipios = $this->Alumno->Municipio->find('list');
		$estados = $this->Alumno->Estado->find('list');
		$colonias = $this->Alumno->Colonia->find('list',array('order'=>'Colonia.nombre ASC'));
		$usuarios = $this->Alumno->Usuario->find('list');
		$estado_civil =array('casado(a)'=>'Casado(a)','soltero(a)'=>'Soltero(a)');
		$carreras = $this->Alumno->Carrera->find('list',array('order'=>'Carrera.nombre ASC'));
		$this->set(compact('municipios', 'estados','colonias','usuarios','estado_civil','carreras'));
	}


	public function delete($id = null) {
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alumno->delete()) {
			$this->Session->setFlash(__('The alumno has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alumno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function listar(){

			$this->set('Alumno', $this->Alumno->find('all'));
	}
}
