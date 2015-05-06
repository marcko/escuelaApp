<script>
	function valida() {
		var pass1 = document.getElementById("pass1").value;
		var pass2 = document.getElementById("pass2").value;
		
		var tel = document.getElementById("tel").length;
		
		if (tel<=0) {
			alert("Ingresa un numero de telefono");
			return false;
		}
		
		
		if (pass1 != pass2){ 
			alert("Confirma correctamente la contraseña");
			return false;
		}
		return true;
	}
	
</script>

<div class="usuarios form">
<?php echo $this->Form->create('Usuario',array('onsubmit'=>' return valida()')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('label'=>'Nombre completo'));
		//echo $this->Form->input('apellido');
		echo $this->Form->input('correo');
		echo $this->Form->input('tel',array('id'=>'tel'));
		echo $this->Form->input('nom_usuario',array("label"=>"Nombre Usuario"));
		echo $this->Form->input('contrasena',array('id'=>'pass1',"label"=>"Contraseña",'type'=>'password'));
		echo $this->Form->input('contrasena ',array('id'=>'pass2',"label"=>"Confirmar Contraseña",'type'=>'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
