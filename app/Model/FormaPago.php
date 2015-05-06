<?php
App::uses('AppModel', 'Model');
/**
 * FormaPago Model
 *
 */
class FormaPago extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
var $displayField = 'nombre';
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
