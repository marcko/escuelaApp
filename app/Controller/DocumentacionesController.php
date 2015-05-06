<?php
App::uses('AppController', 'Controller');
/**
 * Documentaciones Controller
 *
 * @property Documentacione $Documentacione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DocumentacionesController extends AppController {
	
	public $components = array('Paginator', 'Session');

	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}

	public function index($id=null,$clave=null) {
		
		#echo "id:: ".$id;
		#echo "<br>clave:: ".$clave;die;
		
		if($id){
			$control= $id;
			$query="SELECT alumno.nombre,alumno.id,alumno.ap_pat,alumno.ap_mat,
					documentaciones.id,
					documentaciones.tit_pro_maestria,
					documentaciones.ced_pro_maestria,
					documentaciones.cer_estu_maestria,
					documentaciones.ced_pro_licenciatura,
					documentaciones.identificacion_oficial,
					documentaciones.credencial_snte,
					documentaciones.acta_nac,
					documentaciones.curr_vitae,
					documentaciones.carta_motivo
				FROM documentaciones as documentaciones
				INNER JOIN alumnos as alumno
				    on alumno.id = documentaciones.alumno_id
				WHERE alumno_id=".$control." AND documentaciones.status=1";
			
			
			//echo $query;die;
			$datos = $this->Documentacione->query($query);
			$this->set('datos',$datos);
			$this->set('clave',$clave);
			
				
		}
		
		if($this->request->is('post')){
			if($this->request->data['Documentacione']['bandera']){
				#echo "<pre>";
				#print_r($this->request->data);
				#echo "</pre><br><br>";die;
				
				##realiza el update a la tabla documentaciones de la documentacion que se agrego
				
				if(isset($this->request->data['documentaciones']['tit_pro_maestria'])){
					$tit_pro_maestria = 1;	
				}else {	$tit_pro_maestria=0;	}
				if(isset($this->request->data['documentaciones']['ced_pro_maestria'])){
					$ced_pro_maestria = 1;	
				}else {	$ced_pro_maestria=0;	}
				if(isset($this->request->data['documentaciones']['cer_estu_maestria'])){
					$cer_estu_maestria = 1;	
				}else {	$cer_estu_maestria=0;	}
				if(isset($this->request->data['documentaciones']['identificacion_oficial'])){
					$identificacion_oficial = 1;	
				}else {	$identificacion_oficial=0;	}
				if(isset($this->request->data['documentaciones']['credencial_snte'])){
					$credencial_snte = 1;	
				}else {	$credencial_snte=0;	}
				if(isset($this->request->data['documentaciones']['acta_nac'])){
					$acta_nac = 1;	
				}else {	$acta_nac=0;	}
				if(isset($this->request->data['documentaciones']['curr_vitae'])){
					$curr_vitae = 1;	
				}else {	$curr_vitae=0;	}
				if(isset($this->request->data['documentaciones']['carta_motivo'])){
					$carta_motivo = 1;	
				}else {	$carta_motivo=0;	}
				
				
				
				$num_control = $this->request->data['control'];
				$id_documentacion = $this->request->data['documentaciones']['id'];
				
				
				/* #test
					echo "tit maestria:: ".$tit_pro_maestria;
					echo "ced maestr:: ".$ced_pro_maestria;
					echo "cer est maestria:: ".$cer_estu_maestria;
					echo "ife:: ".$identificacion_oficial;
					echo "snte:: ".$credencial_snte;
					echo "acta nac:: ".$acta_nac;
					echo "curr vitae:: ".$curr_vitae;
					echo "carta mot ::".$carta_motivo;
					echo "control:: ".$num_control;
				*/
				
				$date= date('Y-m-d H:i:s');
				$query="UPDATE documentaciones SET
					tit_pro_maestria=".$tit_pro_maestria.",
					ced_pro_maestria=".$ced_pro_maestria.",
					cer_estu_maestria=".$cer_estu_maestria.",
					identificacion_oficial=".$identificacion_oficial.",
					credencial_snte=".$credencial_snte.",
					acta_nac=".$acta_nac.",
					curr_vitae=".$curr_vitae.",
					carta_motivo=".$carta_motivo.",
					usuario_id=".$this->Session->read('usuario.id').",
					modified='".$date."'
					WHERE id=".$id_documentacion." AND alumno_id=".$num_control;
					
				$update= $this->Documentacione->query($query);
				
				
				//echo "usuario id:: ".$this->Session->read('usuario.id');
				//echo $query;die;
				
				//echo "<pre>";
				//print_r($update);
				//echo "</pre>";die;
				
				$this->Session->setFlash("Documentacion guardada con exito!!");
				$this->redirect(array('controller'=>'Alumnos','action'=>'index',$id));
				
				
				
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
		if (!$this->Documentacione->exists($id)) {
			throw new NotFoundException(__('Invalid documentacione'));
		}
		$options = array('conditions' => array('Documentacione.' . $this->Documentacione->primaryKey => $id));
		$this->set('documentacione', $this->Documentacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Documentacione->create();
			//echo "<pre>";
			//print_r($this->request->data);
			//echo "</pre>";die;
			$control = $this->request->data['Documentacione']['control'];
			$query = "SELECT documentacione.alumno_id,documentacione.tit_pro_maestria,documentacione.ced_pro_maestria,
				documentacione.cer_estu_maestria, documentacione.ced_pro_licenciatura,documentacione.identificacion_oficial,
				documentacione.credencial_snte,documentacione.acta_nac,documentacione.curr_vitae,documentacione.carta_motivo,
				documentacione.fotografia_id,documentacione.status ,Al.nombre,Al.ap_pat,Al.ap_mat
				FROM documentaciones AS documentacione
				   LEFT JOIN alumnos as Al
					ON Al.id =".$control." 
				WHERE documentacione.alumno_id=".$control;
			$datos = $this->Documentacione->query($query);
			$this->set('datos',$datos);
			$this->set('bandera',1);
			
		}
		
	}

			
			
	public function edit($id = null) {
		if (!$this->Documentacione->exists($id)) {
			throw new NotFoundException(__('Invalid documentacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//debug($this->request->data);die;
			if ($this->Documentacione->save($this->request->data)) {
				$this->redirect(array('action'=>'view',$this->request->data['Documentacione']['id']));
				//echo "id".$id;die;
				$this->Session->setFlash(__('The documentacione has been saved.'));
				
			} else {
				$this->Session->setFlash(__('The documentacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Documentacione.' . $this->Documentacione->primaryKey => $id));
			$this->request->data = $this->Documentacione->find('first', $options);
		}
		$alumnos = $this->Documentacione->Alumno->find('list');
		$fotografias = $this->Documentacione->Fotografia->find('list');
		$usuarios = $this->Documentacione->Usuario->find('list');
		$this->set(compact('alumnos', 'fotografias', 'usuarios'));
	}

	
	public function delete($id = null) {
		$this->Documentacione->id = $id;
		if (!$this->Documentacione->exists()) {
			throw new NotFoundException(__('Invalid documentacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Documentacione->delete()) {
			$this->Session->setFlash(__('The documentacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The documentacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
