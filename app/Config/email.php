<?php

class EmailConfig { 
	public $gmail = array(
			'transport' => 'Smtp',
			'from' => array('josemartifact@gmail.com' =>'Facturacion'),
			'host' => 'ssl://smtp.gmail.com',
			'port' => 465,
			'username' => 'josemartifact',
			'client' => null,
			'password' => 'mayo2015'
		);
}
