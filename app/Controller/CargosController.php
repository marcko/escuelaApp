<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Cargos Controller
 *
 * @property Cargo $Cargo
 * @property PaginatorComponent $Paginator
 */
class CargosController extends AppController {

/*	Codigo de alma*/
	public function beforefilter(){
		if(!$this->Session->check("usuario")){
		$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}


	public $components = array('Paginator');
	//public $components = array('cargos');

	public function index() {
		$this->Cargo->recursive = 0;
	//$this->set('cargos', $this->Paginator->paginate());
	$this->set('cargos', $this->Cargo->find('all',array('conditions'=>array('Cargo.status'=>0) ) ));	
		//echo "<pre>";
		//print_r($this->Cargo->find('all',array('conditions'=>array('Cargo.status'=>1) ) ));
		//	echo "</pre>";die;	
	}


	public function pagados() {
		$this->Cargo->recursive = 0;
	//$this->set('cargos', $this->Paginator->paginate());
	$this->set('cargos', $this->Cargo->find('all',array('conditions'=>array('Cargo.status'=>1) ) ));	
		//echo "<pre>";
		//print_r($this->Cargo->find('all',array('conditions'=>array('Cargo.status'=>1) ) ));
		//	echo "</pre>";die;	
	}
	public function viewPdf($id = null){
        	if (!$this->Cargo->exists($id)) {
			throw new NotFoundException(__('cargo invalido'));
		}
		 $this->pdfConfig = array(
            'orientation' => 'portrait',
            'filename' => 'Cargo' . $id
            );
		 $options = array('conditions' => array('Cargo.' . $this->Cargo->primaryKey => $id));
		$this->set('cargo', $this->Cargo->find('first', $options));
	}
		public function viewPdf2(){
		 $this->pdfConfig = array(
            'orientation' => 'portrait',
            'filename' => 'Cargo'
            );
		
		$this->set('cargo', $this->Cargo->find('all'));
	}


	public function view($id = null) {
		if (!$this->Cargo->exists($id)) {
			throw new NotFoundException(__('cargo invalido'));
		}
		$options = array('conditions' => array('Cargo.' . $this->Cargo->primaryKey => $id));
		$this->set('cargo', $this->Cargo->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Cargo->create();
			
			
			if ($this->Cargo->save($this->request->data)) {
				$this->Session->setFlash(__('El cargo ha sido guardado.'));
				//return $this->set('Cargos', $this->Cargo->find('all',array('conditions'=>array('Cargo.status'=>1) ) ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cargo no se ha podido guardar'));
			}
		}
/*	else {
		$this->set('status',$this->request->data['Cargo']['status']);
	}*/
		$alumnos = $this->Cargo->Alumno->find('list');
		$conceptos = $this->Cargo->Concepto->find('list');
		$formaPagos = $this->Cargo->FormaPago->find('list');
		$this->set(compact('alumnos', 'conceptos', 'formaPagos'));
	}


	public function edit($id = null) {
		if (!$this->Cargo->exists($id)) {
			throw new NotFoundException(__('cargo invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
		if(!empty($this->request->data['Cargo']['status'])){
	
		$this->request->data['Cargo']['status']=1;
		}else{
		$this->request->data['Cargo']['status']=0;	
	}

			if ($this->Cargo->save($this->request->data)) {
				$this->Session->setFlash(__('El cargo ha sido guardado.'));
				//return $this->set('Cargos', $this->Cargo->find('all',array('conditions'=>array('Cargo.status'=>1) ) ));				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cargo no se ha podido guardar'));
			}
		} else {
			$options = array('conditions' => array('Cargo.' . $this->Cargo->primaryKey => $id));
			$this->request->data = $this->Cargo->find('first', $options);
			$this->set('status',$this->request->data['Cargo']['status']);		
		}
		$alumnos = $this->Cargo->Alumno->find('list');
		$conceptos = $this->Cargo->Concepto->find('list');
		$formaPagos = $this->Cargo->FormaPago->find('list');
		$this->set(compact('alumnos', 'conceptos', 'formaPagos'));
	}


	public function delete($id = null) {
		$this->Cargo->id = $id;
		if (!$this->Cargo->exists()) {
			throw new NotFoundException(__('Cargo invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cargo->delete()) {
			$this->Session->setFlash(__('El cargo ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El cargo no se ha podido eliminar'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/*CODIGO TONIO */

    public function showCargos() {
    	if ($data = $this->request->data) {
    		$month = isset($data['mes']) ? $data['mes'] : 0;
    		$week = isset($data['semana']) ? $data['semana'] : 0;
    		$day = isset($data['dia']) ? $data['dia'] : 0;
    	}

		$month = !isset($month) ? date('n') : $month;

	

		$monthsInfo = $this->Cargo->query('SELECT concepto_id, abono, fecha_pago, WEEK(fecha_pago,5) - 
			WEEK(DATE_SUB(fecha_pago, INTERVAL DAYOFMONTH(fecha_pago)-1 DAY),5)+1 as weeknumb
			from cargos
			where month(fecha_pago) = ' . $month . ' order by fecha_pago');
/*
	$query = "select Cargo.id, Cargo.created, Cargo.descripcion,Cargo.cargo,Cargo.abono, Alumno.nombre as alumno, 
		Concepto.nombre as concepto
		from cargos as Cargo 
		join conceptos as Concepto
		on Concepto.id = Cargo.concepto_id
		left join alumnos as Alumno 
		on Alumno.id = Cargo.alumno_id
*/

		if (!empty($monthsInfo)) {
			if((isset($week) && !empty($week)) || isset($day) && !empty($day)){
	            $weeks = array();
	            foreach($monthsInfo as $months) {
	                $weeks[$months[0]['weeknumb']][] = $months['cargos'];
	            }

	            if ($week > 0 && $day < 2) {
	            	if (isset($weeks[$week])) {
	            		$total = 0;
		                foreach ($weeks[$week] as $value) {
		                	$total += $value['abono'];
		                }

		                $this->set('totalSemana', $total);
		                $this->set('cargosWeek', $weeks[$week]);
	            	}

	            	$this->set('semanastr', $week);
	            } else {
	            	$this->set('diastr', $day);

	            	if (strlen($day) < 2) {
	            		$day = '0' . $day;
	            	}

	            	$date = date('Y') . '-' . $month . '-' . $day;

	            	$dayInfo = $this->Cargo->query('SELECT concepto_id, abono, fecha_pago 
														from cargos
														where date(fecha_pago) = "' . $date . '"');

	            	$total = 0;
	            	foreach ($dayInfo as $value) {
	            		$total += $value['cargos']['abono'];
	            	}

	            	$this->set('totalDia', $total);
	                $this->set('cargosDay', $dayInfo);
	            }
	            
	        } else {
	            $this->set('cargosMonth', $monthsInfo);
	        }
		} 

		$mes = $this->getMonthName($month);
		$this->set('messtr', $mes);
        $this->set('mesint', $month);

		$this->render('cargos');
	}


/*CODIGO TONIO FIN*/





	public function busqueda() {
//	echo 'id'. $id;
//	die;
	if($this->request->is('post')){
			
		if(!empty($this->request->data['Cargo']['factura'])){ //envia true
		    $this->request->data['Cargo']['factura'] = 1;#aqui
		    //if()
		    $bandera = 1;
		    //echo $bandera;
		}
		else {
		$bandera = 0;
		$this->request->data['Cargo']['factura'] = 0;
		}
				
	$control = $this->request->data["Cargo"]["control"];
	$control = strtoupper($control);
	$control = "'".$control."'";
	if(!empty($control)) {
		$query = "select Cargo.id, Cargo.created, Cargo.descripcion,Cargo.cargo,Cargo.abono, Alumno.nombre as alumno, 
		Concepto.nombre as concepto
		from cargos as Cargo 
		join conceptos as Concepto
		on Concepto.id = Cargo.concepto_id
		left join alumnos as Alumno 
		on Alumno.id = Cargo.alumno_id
		where Alumno.id = ".$control;
		
	$cargos= $this->Cargo->query($query);
	if(!empty($cargos) ){
		$this->set('cargos',$cargos, 'factura');	
		
	//mi parte		
		
	if(!empty($this->request->data["Cargo"]["cargo_id"])) {
		
		$queryabono = "select abono, forma_pago_id from cargos where id =". $this->request->data["Cargo"]["cargo_id"].";";
	
		$sacarabono = $this->Cargo->query($queryabono);
		$form = $sacarabono[0]['cargos']['forma_pago_id'];
				
		$abonoactual = $sacarabono["0"]["cargos"]["abono"];		
		$abononuevo =	$this->request->data['Cargo']['monto_pagar'];
		$cantidad = $abonoactual + $abononuevo;
		$cargoactual = $sacarabono[0]["cargos"]["cargo"];
	if($cantidad == $cargoactual){
	$query4 = "update cargos set status = 1 where id = ".  $this->request->data["Cargo"]["cargo_id"].";";
	$this->Cargo->query($query4);		
	}
		$query2 = "update cargos set abono = ".$cantidad. " where id = ". $this->request->data["Cargo"]["cargo_id"].";";
		$this->Cargo->query($query2);
		
		$query3 = "insert into depositos (id, alumno_id, concepto, monto, factura) values (null,".$control.",'".$cargos[0]['Concepto']['concepto']."',".$this->request->data["Cargo"]["monto_pagar"].",".$bandera.");";
		$this->Cargo->query($query3);
		
		$query11 = "SELECT id from depositos order by id desc";
		$id_deposito = $this->Cargo->query($query11);
		$ultimo_id = $id_deposito[0]['depositos']['id'];
	
		//$query6="select nombre from alumnos where id =".$this->request->data['Cargo']['alumno_id'];
		$query6="select nombre,rfc,id from alumnos where id =".$control;
			$nombre_query = $this->Cargo->query($query6);
			$nombre_a = $nombre_query[0]['alumnos']['nombre'];
			$nombre_rfc = $nombre_query[0]['alumnos']['rfc'];
			$alumno_id =  $nombre_query[0]['alumnos']['id'];
			
			$nombre_concepto = $cargos[0]['Concepto']['concepto'];//$concepto_query[0]['conceptos']['nombre'];
		
		//if (!empty($this->request->data["Cargo"]["cargo_id"])){
		$query8= "SELECT factura, nombre FROM cargos LEFT JOIN forma_pagos ON forma_pagos.id = cargos.forma_pago_id
			WHERE forma_pagos.id =".$form;//this->request->data['Cargo']['forma_pago_id'];
			$forma_query= $this->Cargo->query($query8);
			$nombre_forma = $forma_query[0]['forma_pagos']['nombre'];
			
		$fecha_fac = date('Y-m-d H:i:s' );
		$monto = $this->request->data['Cargo']['abono'];
		//$alumno_id=$this->request->data['Cargo']['alumno_id'];
		//Aqui send
		if($bandera==1)
		{
			$this->send($ultimo_id, $nombre_a, $alumno_id,  $nombre_concepto, $abononuevo, $nombre_forma, $fecha_fac, $nombre_rfc);
		}
		
		$this->Session->setFlash(__('Se a guardado el abono nuevo.'));
		return $this->redirect(array('action' => 'index'));

		}
		}
	}
	}		
	}


public function send($id=null){
			if (!$this->Cargo->exists($id)) {
			throw new NotFoundException(__('cargo invalido'));
		}
		$options = array('conditions' => array('Cargo.' . $this->Cargo->primaryKey => $id));
		$cargo = $this->Cargo->find('first',$options);
		
		//$cargo = $this->Cargo->Concepto->find('list');
		$status;
 if ($cargo['Cargo']['status'] == 1){
            $status = 'Pendiente';}
        else{
            $status = 'Pagado';
        
                
        
        };

$nombre = $cargo['Alumno']['nombre'];
$created =$cargo['Cargo']['created'];
$concepto = $cargo['Concepto']['nombre'];
$fechaPago = $cargo['Cargo']['fecha_pago'];
$descripcion = $cargo['Cargo']['descripcion'];
$modified = $cargo['Cargo']['modified'];

$formaPago =  $cargo['FormaPago']['nombre'];  
$abono = $cargo['Cargo']['abono'];
$cargo = $cargo['Cargo']['cargo'];
 $mensaje = array($nombre,$created,$concepto,$fechaPago,$descripcion,$modified,$status,$formaPago,$abono,$cargo);

		$Email = new CakeEmail();
			 
				//codigo de correo	
				$Email->config('gmail');
				$Email->template('welcome');
				$Email->emailFormat('html');
				$Email->viewVars(array("value" => $mensaje));
				$Email->to('cnavarro.itnl@gmail.com');
				$Email->cc(['cnavarro@orangenbaum.com','marco.itnl@hotmail.com']);
				$Email->subject("Factura ".$nombre."__".$id);
				$Email->send();
								
			/*	$this->Email->delivery = 'smtp';
				if ($this->Email->send()) {
					return true;
				} else {
					echo $this->Email->smtpError;
				}	
			*/
	}
	


	private function getMonthName($month) {
		$name = '';

		switch ($month) {
			case '01':
				$name = 'Enero';
				break;

			case '02':
				$name = 'Febrero';
				break;

			case '03':
				$name = 'Marzo';
				break;

			case '04':
				$name = 'Abril';
				break;

			case '05':
				$name = 'Mayo';
				break;

			case '06':
				$name = 'Junio';
				break;

			case '07':
				$name = 'Julio';
				break;

			case '08':
				$name = 'Agosto';
				break;

			case '09':
				$name = 'Septiembre';
				break;

			case '10':
				$name = 'Octubre';
				break;

			case '11':
				$name = 'Noviembre';
				break;

			case '12':
				$name = 'Diciembre';
				break;
			
			default:
				break;
		}

		return $name;
	}



}
