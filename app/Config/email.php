<?php

class EmailConfig { 
	public $gmail = array(
			'transport' => 'Smtp',
			'from' => array('email@gmail.com' =>'Facturacion'),
			'host' => 'ssl://smtp.gmail.com',
			'port' => 465,
			'username' => 'user',
			'client' => null,
			'password' => 'password'
		);
}
