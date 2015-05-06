<?php
App::uses('AppController', 'Controller');
/**
 * Depositos Controller
 *
 * @property Deposito $Deposito
 * @property PaginatorComponent $Paginator
 */
class DepositosController extends AppController {

		##		Codigo de alma
	public function beforefilter(){
		if(!$this->Session->check("usuario")){
		$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}


	public $components = array('Paginator');


	public function index() {
		$this->Deposito->recursive = 0;
		$this->set('depositos', $this->Paginator->paginate());
	}


	public function view($id = null) {
		if (!$this->Deposito->exists($id)) {
			throw new NotFoundException(__('deposito invalido'));
		}
		$options = array('conditions' => array('Deposito.' . $this->Deposito->primaryKey => $id));
		$this->set('deposito', $this->Deposito->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Deposito->create();
			if ($this->Deposito->save($this->request->data)) {
				$this->Session->setFlash(__('El deposito ha sido guardado'));
				return $this->redirect(array('action' => 'index'));
				//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));			
			} else {
				$this->Session->setFlash(__('El deposito no se ha podido guardar'));
			}
		}
/*	else{
	$this->set('status',$this->request->data['Tetramestre']['status']);	
	}*/
		$alumnos = $this->Deposito->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Deposito->exists($id)) {
			throw new NotFoundException(__('Deposito invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
				if(!empty($this->request->data['Deposito']['status'])){
	
					$this->request->data['Deposito']['status']=1;
				}else{
					$this->request->data['Deposito']['status']=0;	
				}

			if ($this->Deposito->save($this->request->data)) {
				$this->Session->setFlash(__('El deposito ha sido guardado'));
				return $this->redirect(array('action' => 'index'));
				//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));
			} else {
				$this->Session->setFlash(__('El deposito no se ha podido guardar'));
			}
		} else {
			//$this->set('status',$this->request->data['Tetramestre']['status']);
			$options = array('conditions' => array('Deposito.' . $this->Deposito->primaryKey => $id));
			$this->request->data = $this->Deposito->find('first', $options);
		}
		$alumnos = $this->Deposito->Alumno->find('list');
		$this->set(compact('alumnos'));
	}
	

	public function delete($id = null) {
		$this->Deposito->id = $id;
		if (!$this->Deposito->exists()) {
			throw new NotFoundException(__('deposito invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Deposito->delete()) {
			$this->Session->setFlash(__('El deposito ha sido eliminado'));
		} else {
			$this->Session->setFlash(__('El deposito no se ha podido eliminar'));
		}
		//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));		
		return $this->redirect(array('action' => 'index'));
	}
}
