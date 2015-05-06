<?php
App::uses('AppModel', 'Model');
/**
 * Materia Model
 *
 * @property Tetramestre $Tetramestre
 * @property Carrera $Carrera
 * @property PlanEstudio $PlanEstudio
 * @property Maestro $Maestro
 * @property Usuario $Usuario
 * @property ReticularAvance $ReticularAvance
 */
class Materia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		
		'Carrera' => array(
			'className' => 'Carrera',
			'foreignKey' => 'carrera_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PlanEstudio' => array(
			'className' => 'PlanEstudio',
			'foreignKey' => 'plan_estudio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Maestro' => array(
			'className' => 'Maestro',
			'foreignKey' => 'maestro_id',
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
		),
                'Tetramestre' => array(
			'className' => 'Tetramestre',
			'foreignKey' => 'tetramestre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Hora' => array(
                    'className'=> 'Hora',
                    'foreignKey'=>'hora_id'
                )
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ReticularAvance' => array(
			'className' => 'ReticularAvance',
			'foreignKey' => 'materia_id',
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
