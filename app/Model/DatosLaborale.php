<?php
App::uses('AppModel', 'Model');
/**
 * DatosLaborale Model
 *
 * @property Alumno $Alumno
 * @property Usuario $Usuario
 */
class DatosLaborale extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'alumno_id';


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
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
