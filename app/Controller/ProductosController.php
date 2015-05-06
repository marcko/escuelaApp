<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {

public function beforefilter(){
	if(!$this->Session->check("usuario")){
		$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
		}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index  method
 *
 * @return void
 */
	public function index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Producto->find('all',array('conditions'=>array('Producto.status'=>1) ) ));	}
		
		/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Producto']['usuario_id']=$this->Session->read('usuario.id');
					$this->Producto->create();
			        if ($this->Producto->save($this->request->data)) {
				//$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El producto no ha sido registrado correctamente, por favor trata de nuevo.'));
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
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Producto']['usuario_id']=$this->Session->read('usuario.id');
		
		//echo "status1:::".$this->request->data['Afijo']['status'];
	
	if(!empty($this->request->data['Producto']['status'])){
	
		$this->request->data['Producto']['status']=1;
	}
	else
{
		$this->request->data['Producto']['status']=0;	
	}

		if ($this->Producto->save($this->request->data)) {
				//$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El producto no ha podido guardarse, porfavor trate de nuevo'));
			}
		} 
		else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
			$this->set('status',$this->request->data['Producto']['status']);
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
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('El producto ha sido eliminado correctamente.'));
		} else {
			$this->Session->setFlash(__('El producto no se ha eliminado. Por favor, trata de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}