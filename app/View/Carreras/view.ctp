<div class="carreras view">
<h2>Carrera</h2>
 <dl>
  
  <dt>Nombre</dt>
  <dd>
   <?php echo $carrera['Carrera']['nombre']; ?>
   &nbsp;
  </dd>
  <dt>Codigo</dt>
  <dd>
   <?php echo $carrera['Carrera']['codigo']; ?>
   &nbsp;
  </dd>
  <dt>Siglas</dt>
  <dd>
   <?php echo $carrera['Carrera']['siglas']; ?>
   &nbsp;
  </dd>
  <dt>Total Creditos</dt>
  <dd>
   <?php echo $carrera['Carrera']['total_creditos']; ?>
   &nbsp;
  </dd>
  <dt>Grado de estudio</dt>
  <dd>
   <?php 

    if($carrera['Carrera']['tipo']==1){
    echo "Bachillerato &nbsp"; 
         }
      if($carrera['Carrera']['tipo']==2){
    echo "Licenciatura &nbsp"; 
         }
         
         if($carrera['Carrera']['tipo']==3){
    echo "Maestria &nbsp"; 
         }
         
         if($carrera['Carrera']['tipo']==4){
    echo "Doctorado &nbsp"; 
         }

   ?>
   &nbsp;
  </dd>
  
  <dt>Usuario</dt>
  <dd>
   <?php echo $carrera['Usuario']['nombre']; ?>
   &nbsp;
  </dd>
  <dt>Creado</dt>
  <dd>
   <?php echo $carrera['Carrera']['created']; ?>
   &nbsp;
  </dd>
  <dt>Modificado</dt>
  <dd>
   <?php echo $carrera['Carrera']['modified']; ?>
   &nbsp;
  </dd>
 </dl>
</div>
<div class="actions">
 <ul>
  <li><?php echo $this->Html->link(__('Editar  Carrera'), array('action' => 'edit', $carrera['Carrera']['id'])); ?> </li>
  <li><?php echo $this->Html->link(__('Listar Carreras'), array('action' => 'index')); ?> </li>
  <li><?php echo $this->Html->link(__('Agregar Carrera'), array('action' => 'add')); ?> </li>
 </ul>
</div>

  <!--
  <div class="carreras view">
<h2>Carrera</h2>
 <dl>
  <dt>Nombre</dt>
  <dd>
   <?php echo $carrera['Carrera']['nombre']; ?>
   &nbsp;
  </dd>
  <dt>Codigo</dt>
  <dd>
   <?php echo $carrera['Carrera']['codigo']; ?>
   &nbsp;
  </dd>
  <dt>Siglas</dt>
  <dd>
   <?php echo $carrera['Carrera']['siglas']; ?>
   &nbsp;
  </dd>
  <dt>Total Creditos</dt>
  <dd>
   <?php echo $carrera['Carrera']['total_creditos']; ?>
   &nbsp;
  </dd>
  <dt>Grado de estudio</dt>
  <dd>
   <?php 

    if($carrera['Carrera']['tipo']==1){
    echo "Bachillerato &nbsp"; 
         }
      if($carrera['Carrera']['tipo']==2){
    echo "Licenciatura &nbsp"; 
         }
         
         if($carrera['Carrera']['tipo']==3){
    echo "Maestria &nbsp"; 
         }
         
         if($carrera['Carrera']['tipo']==4){
    echo "Doctorado &nbsp"; 
         }

   ?>
   &nbsp;
  </dd>
  
  <dt>Usuario</dt>
  <dd>
   <?php echo $carrera['Usuario']['nombre']; ?>
   &nbsp;
  </dd>
  <dt>Creado</dt>
  <dd>
   <?php echo $carrera['Carrera']['created']; ?>
   &nbsp;
  </dd>
  <dt>Modificado</dt>
  <dd>
   <?php echo $carrera['Carrera']['modified']; ?>
   &nbsp;
  </dd>
 </dl>
</div>
<div class="actions">
 <ul>
  <li><?php echo $this->Html->link(__('Editar  Carrera'), array('action' => 'edit', $carrera['Carrera']['id'])); ?> </li>
  <li><?php echo $this->Html->link(__('Listar Carreras'), array('action' => 'index')); ?> </li>
  <li><?php echo $this->Html->link(__('Agregar Carrera'), array('action' => 'add')); ?> </li>
 </ul>
</div>
<div class="carreras view">
<h2>Carrera</h2>
 <dl>
  
  <dt>Nombre</dt>
  <dd>
   <?php echo $carrera['Carrera']['nombre']; ?>
   &nbsp;
  </dd>
  <dt>Codigo</dt>
  <dd>
   <?php echo $carrera['Carrera']['codigo']; ?>
   &nbsp;
  </dd>
  <dt>Siglas</dt>
  <dd>
   <?php echo $carrera['Carrera']['siglas']; ?>
   &nbsp;
  </dd>
  <dt>Total Creditos</dt>
  <dd>
   <?php echo $carrera['Carrera']['total_creditos']; ?>
   &nbsp;
  </dd>
  <dt>Grado de estudio</dt>
  <dd>
   <?php 

    if($carrera['Carrera']['tipo']==1){
    echo "Bachillerato &nbsp"; 
         }
      if($carrera['Carrera']['tipo']==2){
    echo "Licenciatura &nbsp"; 
         }
         
         if($carrera['Carrera']['tipo']==3){
    echo "Maestria &nbsp"; 
         }
         
         if($carrera['Carrera']['tipo']==4){
    echo "Doctorado &nbsp"; 
         }

   ?>
   &nbsp;
  </dd>
  
  <dt>Usuario</dt>
  <dd>
   <?php echo $carrera['Usuario']['nombre']; ?>
   &nbsp;
  </dd>
  <dt>Creado</dt>
  <dd>
   <?php echo $carrera['Carrera']['created']; ?>
   &nbsp;
  </dd>
  <dt>Modificado</dt>
  <dd>
   <?php echo $carrera['Carrera']['modified']; ?>
   &nbsp;
  </dd>
 </dl>
</div>
<div class="actions">
 <ul>
  <li><?php echo $this->Html->link(__('Editar  Carrera'), array('action' => 'edit', $carrera['Carrera']['id'])); ?> </li>
  <li><?php echo $this->Html->link(__('Listar Carreras'), array('action' => 'index')); ?> </li>
  <li><?php echo $this->Html->link(__('Agregar Carrera'), array('action' => 'add')); ?> </li>
 </ul>
</div>

-->