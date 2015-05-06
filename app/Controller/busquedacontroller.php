<?php
App::uses('AppController', 'Controller');

class busquedaController extends AppController {
    
       public function index($id = null) {

	
		if (!$this->Pago->exists($id= null)) {
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