<?php
App::uses('AppModel', 'Model');
/**
 * Cargo Model
 *
 * @property Alumno $Alumno
 * @property Concepto $Concepto
 * @property FormaPago $FormaPago
 */
class Cargo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'forma_pago_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Concepto' => array(
			'className' => 'Concepto',
			'foreignKey' => 'concepto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FormaPago' => array(
			'className' => 'FormaPago',
			'foreignKey' => 'forma_pago_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
