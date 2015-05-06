<?php
App::uses('AppModel', 'Model');
/**
 * Colonia Model
 *
 * @property Municipio $Municipio
 */
class Colonia extends AppModel {
var $displayField= "nombre";


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Municipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'municipio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
