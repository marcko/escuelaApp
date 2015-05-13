<?php
App::uses('AppModel', 'Model');
/**
 * Cargo Model
 *
 * @property Alumno $Alumno
 * @property Concepto $Concepto
 * @property FormaPago $FormaPago
 */
class Salida extends AppModel {

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
		'FechaPago' => array(
			'className' => 'Pago',
			'foreignKey' => 'fecha_pago',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ConceptoPago' => array(
			'className' => 'Pago',
			'foreignKey' => 'concepto_pago',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoPago' => array(
			'className' => 'Pago',
			'foreignKey' => 'tipo_pago',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MontoPago' => array(
			'className' => 'Pago',
			'foreignKey' => 'monto',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FechaCargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'fecha_pago',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DescripcionCargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'descripcion',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoCargo' => array(
			'className' => 'Pago',
			'foreignKey' => 'forma_pago_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MontoCargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'cargo',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
