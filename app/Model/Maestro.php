<?php
App::uses('AppModel', 'Model');
/**
 * Maestro Model
 *
 * @property Materia $Materia
 */
class Maestro extends AppModel {

    var $displayField ='nombre';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'maestro_id',
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
