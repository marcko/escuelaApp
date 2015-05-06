<?php
App::uses('AppController', 'Controller');


class TetramestresController extends AppController {


	public $components = array('Paginator', 'Session');

	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}
	
	public function index() {
		$this->Tetramestre->recursive = 0;
			$this->set('tetramestres', $this->Tetramestre->find('all',
									    array('conditions'=>
										  array('Tetramestre.status'=>1) ) ));	
		
		
	}

	
	public function view($id = null) {
		if (!$this->Tetramestre->exists($id)) {
			throw new NotFoundException(__('Tetramestre invalido'));
		}
		$options = array('conditions' => array('Tetramestre.' . $this->Tetramestre->primaryKey => $id));
		$this->set('tetramestre', $this->Tetramestre->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			#Guarda id de usuario que creo
			$this->request->data['Tetramestre']['usuario_id'] = $this->Session->read('usuario.id');
			

			if ($this->Tetramestre->save($this->request->data)) {
				$this->Session->setFlash(__('El tetramestre fue guardado con éxito!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tetramestre no fué guardado, intenta de nuevo!'));
			}
		}
	}


	public function edit($id = null) {
		if (!$this->Tetramestre->exists($id)) {
			throw new NotFoundException(__('Tetramestre invalido!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Tetramestre']['usuario_id']=$this->Session->read('usuario.id');
			
			//activa y desactiva la tetramestre segun loq ue manda la vista
			if(!empty($this->request->data['Tetramestre']['status'])){
				$this->request->data['Tetramestre']['status']=1;
			}else{
				$this->request->data['Tetramestre']['status']=0;	
			}
	
			
			if ($this->Tetramestre->save($this->request->data)) {
				$this->Session->setFlash(__('El tetramestre fué modificado!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo editar el tetramestre, intenta de nuevo!'));
			}
		} else {
			$options = array('conditions' => array('Tetramestre.' . $this->Tetramestre->primaryKey => $id));
			$this->request->data = $this->Tetramestre->find('first', $options);
			$this->set('status',$this->request->data['Tetramestre']['status']);
			
			
		}
		
	}


	public function delete($id = null) {
		$this->Tetramestre->id = $id;
		if (!$this->Tetramestre->exists()) {
			throw new NotFoundException(__('Tetramestre invalido!'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tetramestre->delete()) {
			$this->Session->setFlash(__('El tetramestre fué eliminado!'));
		} else {
			$this->Session->setFlash(__('El tetramestre no se elimino, intenta nuevamente!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
