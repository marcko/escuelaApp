<?php
App::uses('AppController', 'Controller');

class MateriasController extends AppController {


	public $components = array('Paginator');
	
	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}
	
	public function index() {
		$this->Materia->recursive = 2;
		$materia = $this->Materia->find('all',
							    array('conditions'=>
								  array('Materia.status'=>1) ));
		
		//debug($materia);die;
		$this->set('materias', $materia);
	}


	public function view($id = null) {
		if (!$this->Materia->exists($id)) {
			throw new NotFoundException(__('Materia invalida!'));
		}
		$options = array('conditions' => array('Materia.' . $this->Materia->primaryKey => $id));
		$this->set('materia', $this->Materia->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			
			$this->request->data['Materia']['usuario_id'] = $this->Session->read('usuario.id');
			
			
			if ($this->Materia->save($this->request->data)) {
				$this->Session->setFlash(__('La materia fué guardada!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La materia no fué guardada, intenta de nuevo!.'));
			}
		}
		
		$carreras = $this->Materia->Carrera->find('list',array('conditions'=>array('Carrera.status'=>1),
								       'order'=>'Carrera.nombre ASC'));
		$maestros = $this->Materia->Maestro->find('list',array('conditions'=>array('Maestro.status'=>1),
								       'order'=>'Maestro.nombre ASC'));
		$tetramestres = $this->Materia->Tetramestre->find('list',array('conditions'=>array('Tetramestre.status'=>1)));
		$planEstudios = $this->Materia->PlanEstudio->find('list',
								  array('conditions'=> array('PlanEstudio.status'=>1),
									'order'=>'PlanEstudio.nombre ASC'));
		$usuarios = $this->Materia->Usuario->find('list',array('conditions'=>array('Usuario.status'=>1)));
		$horas = $this->Materia->Hora->find('list');
		
		//echo "<pre>";
		//print_r($hora);
		//echo "</pre>";die;
		
		$this->set(compact('tetramestres', 'carreras', 'planEstudios', 'maestros', 'usuarios','horas'));
		
	}


	public function edit($id = null) {
		if (!$this->Materia->exists($id)) {
			throw new NotFoundException(__('Materia invalida!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Materia']['usuario_id']=$this->Session->read('usuario.id');
			
			//activa y desactiva la tetramestre segun loq ue manda la vista
			if(!empty($this->request->data['Materia']['status'])){
				$this->request->data['Materia']['status']=1;
			}else{
				$this->request->data['Materia']['status']=0;	
			}
			
			if ($this->Materia->save($this->request->data)) {
				$this->Session->setFlash(__('La materia fue editada con éxito!.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La materia no fué guardada, intenta de nuevo!'));
			}
		} else {
			$options = array('conditions' => array('Materia.' . $this->Materia->primaryKey => $id,'Materia.status'=>1));
			$this->request->data = $this->Materia->find('first', $options);
			$this->set('status',$this->request->data['Materia']['status']);
		}
		$tetramestres = $this->Materia->Tetramestre->find('list',array('conditions'=>array('Tetramestre.status'=>1)));
		$carreras = $this->Materia->Carrera->find('list',array('conditions'=>array('Carrera.status'=>1)));
		$planEstudios = $this->Materia->PlanEstudio->find('list',array('conditions'=>array('PlanEstudio.status'=>1)));
		$maestros = $this->Materia->Maestro->find('list',array('conditions'=>array('Maestro.status'=>1)));
		$usuarios = $this->Materia->Usuario->find('list',array('conditions'=>array('Usuario.status'=>1)));
		$horas = $this->Materia->Hora->find('list');
		$this->set(compact('tetramestres', 'carreras', 'planEstudios', 'maestros', 'usuarios','horas'));
		
	}


	public function delete($id = null) {
		$this->Materia->id = $id;
		if (!$this->Materia->exists()) {
			throw new NotFoundException(__('Invalid materia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Materia->delete()) {
			$this->Session->setFlash(__('The materia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The materia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
