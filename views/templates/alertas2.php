<?php
foreach($alertas2 as $key2 => $mensajes2 ):
    foreach($mensajes2 as $mensaje2):
?>
<div class="alerta <?php echo $key2;?>" >
   <?php echo $mensaje2;?>
</div>
<?php
    endforeach;
endforeach;
?>