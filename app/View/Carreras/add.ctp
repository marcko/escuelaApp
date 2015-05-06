<script type="text/javascript">
 
 //window.onload=alert("x");
 
 function valida() {
  //alert("valida");
  var Bachillerato =document.getElementById("Bachillerato");
  var licenciatura =document.getElementById("licenciatura");
  var maestria =document.getElementById("maestria");
  var doctorado =document.getElementById("doctorado");
  
  if (! (Bachillerato.checked ==true ||licenciatura.checked ==true || maestria.checked==true || doctorado.checked==true )) {
   alert("Selecciona el grado de estudio!");
   return false;
  }
  return true;
 }
 
</script>

<div class="carreras form">
<?php echo $this->Form->create('Carrera',array('onsubmit'=>"return valida()")); ?>
 <fieldset>
  <legend><?php echo __('Agregar Carrera'); ?></legend>
 <?php
  echo $this->Form->input('nombre');
  echo $this->Form->input('codigo');
  echo $this->Form->input('siglas',array('label'=>'Siglas (se concatena para sacar el numero de control)'));
  echo $this->Form->input('total_creditos');
  
 ?>
 </fieldset>
 <br>
  <input type="radio" name="data[Carrera][tipo]" value="1" id="Bachillerato">
  <label>Bachillerato</label>
  <br>

  <input type="radio" name="data[Carrera][tipo]" value="2" id="licenciatura">
  <label>Licenciatura</label>
  <br>
   
  <input type="radio" name="data[Carrera][tipo]" value="3" id="maestria">
  <label>Maestria</label>
  <br>
   
  <input type="radio" name="data[Carrera][tipo]" value="4" id="doctorado">
  <label>Doctorado</label>
  <br>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
 <ul>

  <li><?php echo $this->Html->link(__('Listar  Carreras'), array('action' => 'index')); ?></li>
 </ul>
</div>

