
<?php
App::uses('AppController', 'Controller');

class SalidasController extends AppController{




	public function beforefilter(){
		if(!$this->Session->check("usuario")){
		$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}
	public function index(){
		$this->Salida->recursive=0;
		$this->set('salidas', $this->Salida->find('list'));

	}

}

?>