<div class="login">
    <h3></h3>
    <?php
    echo $this->Form->Create('Usuario');
    echo $this->Form->input('nombre',array('label'=>'Nombre usuario'));
    echo $this->Form->input('contrasena',array('label'=>'Password','type'=>'password'));
    echo $this->Form->end(array('type'=>'submit','label'=>'Ingresar'));
    
    ?>
</div>