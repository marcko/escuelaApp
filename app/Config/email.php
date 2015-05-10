<?php

class EmailConfig { 
	public $gmail = array(
			'transport' => 'Smtp',
			'from' => array('admin@sandbox0ce4985f30bb4b54a69e32d1e4401a04.mailgun.org' =>'Facturacion'),
			'host' => 'ssl://smtp.mailgun.org',
			'port' => 465,
			'username' => 'postmaster@sandbox0ce4985f30bb4b54a69e32d1e4401a04.mailgun.org',
			'password' => '8c2d118407144edd3dcc468618705815'
		);
}
