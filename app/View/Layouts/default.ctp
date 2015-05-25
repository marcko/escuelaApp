<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		UNIVERSIDAD
	</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('cake.generic');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>



	
	<div id="container">
		<div id="header">
			UNIVERSIDAD JOSÉ MARTÍ DE LATINOAMÉRICA
		</div>
		<div id="content" style="width: 100%; height: 590px">
		<table><tr><td>
		<?php
		#if($this->Session->check('usuario') ){}
		?>
			<div id="div-lista" >
				<ul id="lista">
					<li><?php echo $this->Html->link('Alumnos',array('controller'=>'alumnos','action'=>'index') );?></li>
					<li><?php echo $this->Html->link('Materias',array('controller'=>'materias','action'=>'index') );?></li>
					<li><?php echo $this->Html->link('Maestros',array('controller'=>'maestros','action'=>'index')); ?> </li>
					<li><?php echo $this->Html->link('Ciclo Escolar',array('controller'=>'tetramestres','action'=>'index')); ?></li>
					<li><?php echo $this->Html->link('Programa',array('controller'=>'carreras','action'=>'index')); ?></li>
					<li><?php echo $this->Html->link('Activo fijo',array('controller'=>'productos','action'=>'index')); ?></li>
					<li><?php echo $this->Html->link('Pagos',array('controller'=>'pagos','action'=>'index')); ?></li>
					<li><?php echo $this->Html->link('Cargos',array('controller'=>'cargos','action'=>'index')); ?></li>
					
					<li><?php echo $this->Html->link('Plan estudio',array('controller'=>'PlanEstudios','action'=>'index')); ?></li>
						<li><?php echo $this->Html->link('Entrada/Salida',array('controller'=>'cargos','action'=>'index2')); ?></li>
				</ul>
			</div>
		</td><td><?php echo $this->Html->link('Cerrar sesion',array('controller'=>'usuarios','action'=>'logout')); ?></td></tr></table>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			<?php //echo $this->Session->read('cliente.nombre');?>
		</div>
		
</body>
</html>
