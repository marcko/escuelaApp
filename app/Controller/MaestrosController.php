<?php
App::uses('AppController', 'Controller');

class MaestrosController extends AppController {


	public $components = array('Paginator','Session');

	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}

	public function index() {
		$this->Maestro->recursive = 0;
		$this->set('maestros', $this->Maestro->find('all',
							     array('conditions'=>
								   array('Maestro.status'=>1))) );
	}
	
	public function buscar(){
		if(isset($_POST['nombre_maestro'])){
			$query_buscar_maestro="SELECT * FROM maestros
						WHERE nombre LIKE '%".$_POST['nombre_maestro']."%'";
			$result= $this->Maestro->query($query_buscar_maestro);
			$this->set('result',$result);
			
		}
	}


	public function view($id = null) {
		if (!$this->Maestro->exists($id)) {
			throw new NotFoundException(__('Maestro invalido'));
		}
		$options = array('conditions' => array('Maestro.' . $this->Maestro->primaryKey => $id));
		$this->set('maestro', $this->Maestro->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Maestro->create();
			$this->request->data['Maestro']['usuario_id'] = $this->Session->read('usuario.id');
			
			if ($this->Maestro->save($this->request->data)) {
				$this->Session->setFlash(__('El maestro fué guardado!.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El maestro no fué guardado. Intenta de nuevo!'));
			}
		}
	}


	public function edit($id = null) {
		if (!$this->Maestro->exists($id)) {
			throw new NotFoundException(__('Maestro invalido!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			if(!empty($this->request->data['Maestro']['status'])){
				$this->request->data['Maestro']['status']=1;
			}else{
				$this->request->data['Maestro']['status']=0;	
			}
			
			
			if ($this->Maestro->save($this->request->data)) {
				$this->Session->setFlash(__(' El maestro fué gguardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El maestro no fue guardado. Intente de nuevo!!'));
			}
		} else {
			$options = array('conditions' => array('Maestro.' . $this->Maestro->primaryKey => $id));
			$this->request->data = $this->Maestro->find('first', $options);
			$this->set('status',$this->request->data['Maestro']['status']);
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
		$this->Maestro->id = $id;
		if (!$this->Maestro->exists()) {
			throw new NotFoundException(__('Invalid maestro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Maestro->delete()) {
			$this->Session->setFlash(__('The maestro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The maestro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
