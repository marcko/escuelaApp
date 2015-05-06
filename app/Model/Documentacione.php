<?php
App::uses('AppModel', 'Model');
/**
 * Documentacione Model
 *
 * @property Alumno $Alumno
 * @property Fotografia $Fotografia
 * @property Usuario $Usuario
 */
class Documentacione extends AppModel {

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
		'Fotografia' => array(
			'className' => 'Fotografia',
			'foreignKey' => 'fotografia_id',
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
