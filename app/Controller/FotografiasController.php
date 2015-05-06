<?php
App::uses('AppController', 'Controller');
/**
 * Fotografias Controller
 *
 * @property Fotografia $Fotografia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FotografiasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fotografia->recursive = 0;
		$this->set('fotografias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fotografia->exists($id)) {
			throw new NotFoundException(__('Invalid fotografia'));
		}
		$options = array('conditions' => array('Fotografia.' . $this->Fotografia->primaryKey => $id));
		$this->set('fotografia', $this->Fotografia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fotografia->create();
			if ($this->Fotografia->save($this->request->data)) {
				$this->Session->setFlash(__('The fotografia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fotografia could not be saved. Please, try again.'));
			}
		}
		$tiposFotografias = $this->Fotografia->TiposFotografia->find('list');
		$this->set(compact('tiposFotografias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fotografia->exists($id)) {
			throw new NotFoundException(__('Invalid fotografia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fotografia->save($this->request->data)) {
				$this->Session->setFlash(__('The fotografia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fotografia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fotografia.' . $this->Fotografia->primaryKey => $id));
			$this->request->data = $this->Fotografia->find('first', $options);
		}
		$tiposFotografias = $this->Fotografia->TiposFotografia->find('list');
		$this->set(compact('tiposFotografias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fotografia->id = $id;
		if (!$this->Fotografia->exists()) {
			throw new NotFoundException(__('Invalid fotografia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fotografia->delete()) {
			$this->Session->setFlash(__('The fotografia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fotografia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
