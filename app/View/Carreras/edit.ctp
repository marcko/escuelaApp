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
  <legend><?php echo __('Editar Carrera'); ?></legend>
 <?php
  echo $this->Form->input('id');
  echo $this->Form->input('nombre');
  echo $this->Form->input('codigo');
  echo $this->Form->input('siglas');
  echo $this->Form->input('total_creditos');  
 
 ?>
 </fieldset>
 
 <br>
  <?php
  //echo "tipo:: ".$this->request->data['Carrera']['tipo'];die;
  if($this->request->data['Carrera']['tipo']==1){
   $checked_1="checked";
   $checked_2="";
   $checked_3="";
   $checked_4="";
  }
  if($this->request->data['Carrera']['tipo']==2){
   $checked_1="";
   $checked_2="checked";
   $checked_3="";
   $checked_4="";
  }else if($this->request->data['Carrera']['tipo']==3){
   $checked_1="";
   $checked_2="";
   $checked_3="checked";
   $checked_4="";
  }else if($this->request->data['Carrera']['tipo']==4){
   $checked_1="";
   $checked_2="";
   $checked_3="";
   $checked_4="checked";
   }
  ?>
   
  
   <label><b>Grado de estudio</b></label><br>
   <input <?php echo $checked_1; ?> type='radio' name='data[Carrera][tipo]' value='1' id='Bachillerato'>
   <label>Bachillerato</label>
   <br>
   <input <?php echo $checked_2; ?> type='radio' name='data[Carrera][tipo]' value='2' id='licenciatura'>
   <label>Licenciatura</label>
   <br>
   <input <?php echo $checked_3; ?> type="radio" name="data[Carrera][tipo]" value="3" id="maestria">
   <label>Maestria</label>
   <br>
   <input <?php echo $checked_4; ?> type="radio" name="data[Carrera][tipo]" value="4" id="doctorado">
   <label>Doctorado</label>
   <br><br><br>
 
 <?php
 if($status==1){
  $status= "checked";
 }else
  $status="";
 ?>
 
 <input type="checkbox" name="data[Carrera][status]" checked="<?php echo $status?>">
 <label>Activo</label>
 <br>
<?php echo $this->Form->end(__('Guardar cambios')); ?>
</div>
<div class="actions">
 <h3><?php echo __('Acciones'); ?></h3>
 <ul>

  <li><?php echo $this->Html->link(__('Listar Carreras'), array('action' => 'index')); ?></li>
 </ul>
</div>


