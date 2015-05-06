<?php

    class Hora extends AppModel{        
        public  $displayField='hora';
        
        public $hasMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'hora_id',
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



?>