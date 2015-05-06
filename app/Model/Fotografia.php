<?php
App::uses('AppModel', 'Model');
/**
 * Fotografia Model
 *
 * @property TiposFotografias $TiposFotografias
 * @property Documentacione $Documentacione
 */
class Fotografia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
        var $displayField= "tamaño";


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TiposFotografias' => array(
			'className' => 'TiposFotografias',
			'foreignKey' => 'tipos_fotografias_id',
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
		'Documentacione' => array(
			'className' => 'Documentacione',
			'foreignKey' => 'fotografia_id',
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
