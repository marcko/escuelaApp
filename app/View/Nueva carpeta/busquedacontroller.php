<?php
App::uses('AppController', 'Controller');

class BusquedaController extends AppController {
    
       public function beforefilter(){
		if(!$this->Session->check("usuario")){
		$this->redirect(array('controller'=>'usuarios','action'=>'login'));
		}
	}


    public $components = array('Paginator');
    
    public function index($condition = '') {
      //  $this->Pago->recursive = 0;
        //add->set('pagos', $this->Paginator->paginate());
		//$this->set('pagos', $this->Pago->find('all',array('conditions'=>array('Pago.status'=>0) ) ));
        $this->getCargos($condition);
	}

	private function getCargos($condition = '') {
		// $this->Cargo->recursive = 0;
		// traer todos los cargos
		$query = 'select * from pagos
					where status > -1
					'. $condition .'
					order by fecha_operacion desc';
        
        //$cargos = $this->Pago->query($query);

		// seprar por mes
		$cargosFull = array();
		foreach ($cargos as $cargo) {
			$month = explode('-', $cargo['pagos']['fecha_operacion']);
			$month = $this->getMonthName($month[1]);

			$cargosFull[$month][] = array(
                    'id' => $cargo['pagos']['id'],
					'concepto' => $cargo['pagos']['concepto_pago'],
					'monto' => $cargo['pagos']['monto'],
					'estatus' => $this->getEstatus($cargo['pagos']['status']),
                    'tipoPago' => $cargo['pagos']['tipo_pago'],
					'fechaPago' => (!$cargo['pagos']['fecha_pago']) ? '' : $cargo['pagos']['fecha_pago'],
                    'fechaCreacion' => $cargo['pagos']['fecha_operacion'],
							'tipo' => $cargo['pagos']['tipo']				
				);
		}

		$this->set('cargos', $cargosFull);
		$this->render('index');
	}

	public function search() {
		$data = $this->request->data;
       
		$term = $data['termino'];
		$combobox = $data['combobox'];

		$condition = '';

		if (!empty($term)){
			if ($combobox == 1) { // concepto pago
				$condition = ' and concepto_pago like \'%'. $term .'%\'';
			} else if ($combobox == 2) { // estatus
				$condition = ' and status = ';

				if (strpos("No pagado", $term) !== false) {
					// return no pagado - 0
					$condition .= '0';
				} else if (strpos("Adeudo Pendiente", $term) !== false) {
					// return adeudo pendiente - 1
					$condition .= '1';
				} else {
					$condition = '2';
				}
			} else { if($combobox == 3){ // tipo de pago
                $condition = ' and tipo_pago like \'%'. $term .'%\'';
            }
        
        	else {
		if($term=='externo'){		
		$condition = ' and tipo = 2';		
		}else{
		$condition = ' and tipo = 1';
				
		}


			if (empty($condition)) {
				$condition = ' and 0 = 1 ';
			}
		}
			
	}

		$this->index($condition);
	}
}

	private function getEstatus($estatus) {
		$estatusStr = '';

		switch ($estatus) {
			case '0':
				$estatusStr = 'Pagado';
				break;
			
			case '1':
				$estatusStr = 'Adeudo pendiente';
				break;

			default:
				break;
		}

		return $estatusStr;
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
    
    public function edit($id = null) {
		if (!$this->Pago->exists($id)) {
			throw new NotFoundException(__('El pago seleccionado no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
		if(!empty($this->request->data['Pago']['status'])){
		$this->request->data['Pago']['status']=1;
		}else{
		$this->request->data['Pago']['status']=0;	
	}
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash(__('Se han realizado los cambios.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudieron relizar los cambios, favor de intentar nuevamente'));
			}
		} else {
			$options = array('conditions' => array($this->Pago->primaryKey => $id));
			$this->request->data = $this->Pago->find('first', $options);
			$this->set('status',$this->request->data['Pago']['status']);	
		}
	}
    
    public function add() {
		if ($this->request->data) {
			$this->Pago->create();
			if ($this->Pago->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado el nuevo pago.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo crear el nuevo pago, favor de intentar nuevamente.'));
			}
		}
	}
    
    public function showPagos() {
    	if ($data = $this->request->data) {
    		$month = isset($data['mes']) ? $data['mes'] : 0;
    		$week = isset($data['semana']) ? $data['semana'] : 0;
    		$day = isset($data['dia']) ? $data['dia'] : 0;
    	}

		$month = !isset($month) ? date('n') : $month;

		$monthsInfo = $this->Pago->query('SELECT concepto_pago, monto, fecha_operacion, WEEK(fecha_operacion,5) - 
			WEEK(DATE_SUB(fecha_operacion, INTERVAL DAYOFMONTH(fecha_operacion)-1 DAY),5)+1 as weeknumb
			from pagos
			where month(fecha_operacion) = ' . $month . ' order by fecha_operacion');

		if (!empty($monthsInfo)) {
			if((isset($week) && !empty($week)) || isset($day) && !empty($day)){
	            $weeks = array();
	            foreach($monthsInfo as $months) {
	                $weeks[$months[0]['weeknumb']][] = $months['pagos'];
	            }

	            if ($week > 0 && $day < 2) {
	            	if (isset($weeks[$week])) {
	            		$total = 0;
		                foreach ($weeks[$week] as $value) {
		                	$total += $value['monto'];
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

	            	$dayInfo = $this->Pago->query('SELECT concepto_pago, monto, fecha_operacion 
														from pagos
														where date(fecha_operacion) = "' . $date . '"');

	            	$total = 0;
	            	foreach ($dayInfo as $value) {
	            		$total += $value['pagos']['monto'];
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
}