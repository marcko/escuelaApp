<?php
App::uses('AppController', 'Controller');


class CarrerasController extends AppController {
	public $components = array('Paginator');

	public function beforefilter(){
		if(!$this->Session->check("usuario")){
			$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}


	public function index() {
		$this->Carrera->recursive = 0;
		$busqueda = $this->Carrera->find('all',array('conditions'=>
							 array('Carrera.status'=>'1')) );
							 
		$this->set('carreras',$busqueda );
		//echo "id::".$this->Session->read("usuario.id");
		//echo "<br>nombre usuario::".$this->Session->read("usuario.nombre");
		/*echo "<pre>";
		print_r();
		echo "</pre>";die;*/
	}


	public function view($id = null) {
		if (!$this->Carrera->exists($id)) {
			throw new NotFoundException(__('Invalid carrera'));
		}
		$options = array('conditions' => array('Carrera.' . $this->Carrera->primaryKey => $id));
		$this->set('carrera', $this->Carrera->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			
			$clave=strtoupper($this->request->data['Carrera']['siglas']);
			$this->request->data['Carrera']['siglas'] = $clave;
			
			#Guarda id de usuario que creo
			$this->request->data['Carrera']['usuario_id'] = $this->Session->read('usuario.id');
			
			if ($this->Carrera->save($this->request->data)) {
				$this->Session->setFlash(__('La carrera fué guardada!.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrera could not be saved. Please, try again.'));
			}
		}
		
	}

	public function edit($id = null) {
		if (!$this->Carrera->exists($id)) {
			throw new NotFoundException(__('Carrera invalida!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$this->request->data['Carrera']['usuario_id']=$this->Session->read('usuario.id');
			
			
			//activa y desactiva la carrera segun lo que manda la vista
			if(!empty($this->request->data['Carrera']['status'])){
				$this->request->data['Carrera']['status']=1;
			}else{
				$this->request->data['Carrera']['status']=0;	
			}
	
			
			
			if ($this->Carrera->save($this->request->data)) {
				$this->Session->setFlash(__('Carrera editada correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se guardaron los cambios, intenta de nuevo!'));
			}
		} else {
			$options = array('conditions' => array('Carrera.' . $this->Carrera->primaryKey => $id));
			$this->request->data = $this->Carrera->find('first', $options);
			
			//echo "<pre>";
			//print_r($this->request->data);
			//echo "</pre>";die;
			
			$this->set('status',$this->request->data['Carrera']['status']);
			
			/*echo "<pre>",
			print_r($this->request->data['Carrera']['status']);
			echo "</pre>";die;*/
		}
		
	}

	
	public function delete($id = null) {
		$this->Carrera->id = $id;
		if (!$this->Carrera->exists()) {
			throw new NotFoundException(__('Invalid carrera'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carrera->delete()) {
			$this->Session->setFlash(__('Se elimino la carrera!!'));
		} else {
			$this->Session->setFlash(__('La carrera no fue eliminada, intenta de nuevo!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
