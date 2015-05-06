<?php
App::uses('AppController', 'Controller');


class PlanEstudiosController extends AppController {



	public $components = array('Paginator', 'Session');

	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}
	
	public function index() {
		$this->PlanEstudio->recursive = 0;
		$this->set('planEstudios',$this->PlanEstudio->find('all',array('conditions'=>array('PlanEstudio.status'=>1) ))); # $this->Paginator->paginate()
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PlanEstudio->exists($id)) {
			throw new NotFoundException(__('Invalid plan estudio'));
		}
		$options = array('conditions' => array('PlanEstudio.' . $this->PlanEstudio->primaryKey => $id));
		$this->set('planEstudio', $this->PlanEstudio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlanEstudio->create();
			if ($this->PlanEstudio->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardo con éxito el plan de estudio!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan estudio could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PlanEstudio->exists($id)) {
			throw new NotFoundException(__('Invalid plan estudio'));
		}
		if ($this->request->is(array('post', 'put'))) {
				//activa y desactiva la tetramestre segun loq ue manda la vista
			if(!empty($this->request->data['PlanEstudio']['status'])){
				$this->request->data['PlanEstudio']['status']=1;
			}else{
				$this->request->data['PlanEstudio']['status']=0;	
			}
			
			
			if ($this->PlanEstudio->save($this->request->data)) {
				
				$this->Session->setFlash(__('The plan estudio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plan estudio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PlanEstudio.' . $this->PlanEstudio->primaryKey => $id));
			$this->request->data = $this->PlanEstudio->find('first', $options);
			$this->set('status',$this->request->data['PlanEstudio']['status']);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PlanEstudio->id = $id;
		if (!$this->PlanEstudio->exists()) {
			throw new NotFoundException(__('Invalid plan estudio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PlanEstudio->delete()) {
			$this->Session->setFlash(__('The plan estudio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plan estudio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
