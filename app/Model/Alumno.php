<?php
App::uses('AppModel', 'Model');
/**
 * Alumno Model
 *
 * @property Municipio $Municipio
 * @property Estado $Estado
 * @property Usuario $Usuario
 * @property DatosLaborale $DatosLaborale
 * @property Documentacione $Documentacione
 * @property ReticularAvance $ReticularAvance
 */
class Alumno extends AppModel {

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
		'Municipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'municipio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
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
		
		'Colonia' => array(
			'className' => 'Colonia',
			'foreignKey' => 'colonia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Carrera' => array(
			'className' => 'Carrera',
			'foreignKey' => 'carrera_id',
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
		'DatosLaborale' => array(
			'className' => 'DatosLaborale',
			'foreignKey' => 'alumno_id',
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
		'Documentacione' => array(
			'className' => 'Documentacione',
			'foreignKey' => 'alumno_id',
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
		'ReticularAvance' => array(
			'className' => 'ReticularAvance',
			'foreignKey' => 'alumno_id',
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
