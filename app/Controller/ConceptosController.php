<?php
App::uses('AppController', 'Controller');
/**
 * Conceptos Controller
 *
 * @property Concepto $Concepto
 * @property PaginatorComponent $Paginator
 */
class ConceptosController extends AppController {

		##Codigo de alma
	public function beforefilter(){
		if(!$this->Session->check("usuario")){
		$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}



	public $components = array('Paginator');


	public function index() {
		$this->Concepto->recursive = 0;
		$this->set('conceptos', $this->Paginator->paginate());
	}


	public function view($id = null) {
		if (!$this->Concepto->exists($id)) {
			throw new NotFoundException(__('concepto invalido'));
		}
		$options = array('conditions' => array('Concepto.' . $this->Concepto->primaryKey => $id));
		$this->set('concepto', $this->Concepto->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Concepto->create();
			if ($this->Concepto->save($this->request->data)) {
				$this->Session->setFlash(__('El concepto ha sido guardado'));
				//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El concepto no se ha podido guardar'));
			}
		}
/*	else {
	$this->set('status',$this->request->data['Tetramestre']['status']);	
	}*/
	}
public function add1() {
		if ($this->request->is('post')) {
			$this->Concepto->create();
			if ($this->Concepto->save($this->request->data)) {
				$this->Session->setFlash(__('El concepto ha sido guardado'));
				//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El concepto no se ha podido guardar'));
			}
		}

	public function edit($id = null); {
		if (!$this->Concepto->exists($id)) {
			throw new NotFoundException(__('Concepto invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
				if(!empty($this->request->data['Concepto']['status'])){
	
					$this->request->data['Concepto']['status']=1;
				}else{
					$this->request->data['Concepto']['status']=0;	
				}

			if ($this->Concepto->save($this->request->data)) {
				$this->Session->setFlash(__('El concepto ha sido guardado.'));
				//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El concepto no se ha podido guardar'));
			}
		} else {
			//$this->set('status',$this->request->data['Tetramestre']['status']);
			$options = array('conditions' => array('Concepto.' . $this->Concepto->primaryKey => $id));
			$this->request->data = $this->Concepto->find('first', $options);
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
		$this->Concepto->id = $id;
		if (!$this->Concepto->exists()) {
			throw new NotFoundException(__('Concepto invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Concepto->delete()) {
			$this->Session->setFlash(__('El concepto ha sido eliminado'));
		} else {
			$this->Session->setFlash(__('El concepto no se ha podido eliminar'));
		}
		//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));
		return $this->redirect(array('action' => 'index'));
	}
}
