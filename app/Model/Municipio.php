<?php
App::uses('AppModel', 'Model');
/**
 * Municipio Model
 *
 * @property Alumno $Alumno
 * @property Colonia $Colonia
 */
class Municipio extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'municipio_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Colonia' => array(
			'className' => 'Colonia',
			'foreignKey' => 'municipio_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
