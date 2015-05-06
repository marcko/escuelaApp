<?php
App::uses('AppController', 'Controller');
/**
 * DatosLaborales Controller
 *
 * @property DatosLaborale $DatosLaborale
 * @property PaginatorComponent $Paginator
 */
class DatosLaboralesController extends AppController {

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
		$this->DatosLaborale->recursive = 0;
		$this->set('datosLaborales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DatosLaborale->exists($id)) {
			throw new NotFoundException(__('Invalid datos laborale'));
		}
		$options = array('conditions' => array('DatosLaborale.' . $this->DatosLaborale->primaryKey => $id));
		$this->set('datosLaborale', $this->DatosLaborale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DatosLaborale->create();
			if ($this->DatosLaborale->save($this->request->data)) {
				$this->Session->setFlash(__('The datos laborale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datos laborale could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->DatosLaborale->Alumno->find('list');
		$usuarios = $this->DatosLaborale->Usuario->find('list');
		$this->set(compact('alumnos', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DatosLaborale->exists($id)) {
			throw new NotFoundException(__('Invalid datos laborale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DatosLaborale->save($this->request->data)) {
				$this->Session->setFlash(__('The datos laborale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datos laborale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DatosLaborale.' . $this->DatosLaborale->primaryKey => $id));
			$this->request->data = $this->DatosLaborale->find('first', $options);
		}
		$alumnos = $this->DatosLaborale->Alumno->find('list');
		$usuarios = $this->DatosLaborale->Usuario->find('list');
		$this->set(compact('alumnos', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DatosLaborale->id = $id;
		if (!$this->DatosLaborale->exists()) {
			throw new NotFoundException(__('Invalid datos laborale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DatosLaborale->delete()) {
			$this->Session->setFlash(__('The datos laborale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The datos laborale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
