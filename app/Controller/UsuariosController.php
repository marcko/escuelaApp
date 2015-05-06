<?php
App::uses('AppController', 'Controller');


class UsuariosController extends AppController {

	public $components = array('Paginator');

	
	public function login($usuario=null,$password=null){
		$this->Usuario->recursive=0;
		
		if(!$this->Session->check('usuario')){ //si no esta logueado
			if($this->request->is('post')){
				$usuario=$this->data['Usuario']['nombre'];
				$password=$this->data['Usuario']['contrasena'];
				
			
				if(!empty($usuario) && !empty($password)){
					
					$consulta_usuario=$this->Usuario->find('all',array(
										'conditions'=>array(
												    'Usuario.nom_usuario'=>$usuario,
												    'Usuario.contrasena'=>$password,
												    'Usuario.status'=>1),
										'fields'=>array('id','nombre','nom_usuario','contrasena')
										)
									       );
				
				/*echo "<pre>";
				print_r($consulta_usuario);
				echo "</pre>";die;*/
				}
			
			
			
			if(!empty($consulta_usuario)){
				$this->Session->write('usuario.nombre',$consulta_usuario[0]['Usuario']['nombre']);
				$this->Session->write('usuario.id',$consulta_usuario[0]['Usuario']['id']);
				$this->redirect("/alumnos"); //index
			}else{
	                        $this->Session->setFlash('Usuario y/o Password Incorrecto(s)');

			}
			
			}
		}else{
			$this->redirect("/");
		}
		
	}

	public function index() {
		if(!$this->Session->check('usuario')){
			//echo "x";
		
			$this->redirect(array('action'=>'login'),null,true);
		}else{
			$usuarios = $this->Usuario->find('all',array(
			'conditions'=>array('status'=>'1'),
			'order'=>'id and status desc')
		);
		$this->set('usuarios',$usuarios);
		}
	}

		
	public function  logout(){
		$this->Session->delete("usuario");
		$this->Session->destroy();
		$this->redirect(array('action'=>'login'));
	}


	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {

			$this->request->data['Usuario']['usuario_id'] = $this->Session->read('usuario.id');
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		}
	}


	public function edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Usuario->id=$id;
			
			if(!empty($this->request->data['Usuario']['status'])){
				$this->request->data['Usuario']['status']=1;
			}else{
				$this->request->data['Usuario']['status']=0;	
			}
			
			#echo "x";die;
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario fué editado exitosamente!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id,'Usuario.status'=>1));
			$this->request->data = $this->Usuario->find('first', $options);
			$this->set('status',$this->request->data['Usuario']['status']);
		}
	}


	public function delete($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('The usuario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
