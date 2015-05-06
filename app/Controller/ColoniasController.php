<?php
App::uses('AppController', 'Controller');
/**
 * Colonias Controller
 *
 * @property Colonia $Colonia
 * @property PaginatorComponent $Paginator
 */
class ColoniasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Colonia->recursive = 0;
		$this->set('colonias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Colonia->exists($id)) {
			throw new NotFoundException(__('Invalid colonia'));
		}
		$options = array('conditions' => array('Colonia.' . $this->Colonia->primaryKey => $id));
		$this->set('colonia', $this->Colonia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Colonia->create();
			if ($this->Colonia->save($this->request->data)) {
				$this->Session->setFlash(__('The colonia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colonia could not be saved. Please, try again.'));
			}
		}
		$municipios = $this->Colonia->Municipio->find('list');
		$this->set(compact('municipios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Colonia->exists($id)) {
			throw new NotFoundException(__('Invalid colonia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Colonia->save($this->request->data)) {
				$this->Session->setFlash(__('The colonia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colonia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Colonia.' . $this->Colonia->primaryKey => $id));
			$this->request->data = $this->Colonia->find('first', $options);
		}
		$municipios = $this->Colonia->Municipio->find('list');
		$this->set(compact('municipios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Colonia->id = $id;
		if (!$this->Colonia->exists()) {
			throw new NotFoundException(__('Invalid colonia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Colonia->delete()) {
			$this->Session->setFlash(__('The colonia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The colonia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
