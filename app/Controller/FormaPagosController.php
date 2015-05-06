<?php
App::uses('AppController', 'Controller');
/**
 * FormaPagos Controller
 *
 * @property FormaPago $FormaPago
 * @property PaginatorComponent $Paginator
 */
class FormaPagosController extends AppController {

	public function beforefilter(){
		if(!$this->Session->check("usuario")){
		$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}

	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FormaPago->recursive = 0;
		$this->set('formaPagos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FormaPago->exists($id)) {
			throw new NotFoundException(__('Forma de pago invalida'));
		}
		$options = array('conditions' => array('FormaPago.' . $this->FormaPago->primaryKey => $id));
		$this->set('formaPago', $this->FormaPago->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormaPago->create();
			if ($this->FormaPago->save($this->request->data)) {
				$this->Session->setFlash(__('La forma de pago ha sido'));
				//$this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La forma de pago no se ha podid guardar'));
			}
		}
/*	else {
		$this->set('status',$this->request->data['Tetramestre']['status']);
	}*/
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FormaPago->exists($id)) {
			throw new NotFoundException(__('Forma de pago invalida'));
		}
		if ($this->request->is(array('post', 'put'))) {
				if(!empty($this->request->data['FormaPago']['status'])){
	
					$this->request->data['FormaPago']['status']=1;
				}else{
					$this->request->data['FormaPago']['status']=0;	
				}

			if ($this->FormaPago->save($this->request->data)) {
				$this->Session->setFlash(__('La forma de pago ha sido gurdada'));
				return $this->redirect(array('action' => 'index'));
				//return $this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));			
			} else {
				$this->Session->setFlash(__('La forma de pago no se ha podido guardar'));
			}
		} else {
			//$this->set('status',$this->request->data['Tetramestre']['status']);
			$options = array('conditions' => array('FormaPago.' . $this->FormaPago->primaryKey => $id));
			$this->request->data = $this->FormaPago->find('first', $options);
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
		$this->FormaPago->id = $id;
		if (!$this->FormaPago->exists()) {
			throw new NotFoundException(__('Forma de pago invalida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FormaPago->delete()) {
			$this->Session->setFlash(__('La forma de pago ha sido eliminada'));
		} else {
			$this->Session->setFlash(__('La forma de pago no se ha podido eliminar'));
		}
		return $this->redirect(array('action' => 'index'));
//$this->set('tetramestres', $this->Tetramestre->find('all',array('conditions'=>array('Tetramestre.status'=>1) ) ));
	}
}
