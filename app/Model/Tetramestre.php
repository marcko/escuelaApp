<?php
App::uses('AppModel', 'Model');
/**
 * Tetramestre Model
 *
 * @property Usuario $Usuario
 * @property Materia $Materia
 */
class Tetramestre extends AppModel {

    public $displayField ='nombre';

	public $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'tetramestre_id',
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
