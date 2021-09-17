<?php
require 'Handler.php';
$dados = Handler::arrayHandler();
?>
<html>
    <div class="container">
        <?php if(isset($_POST['modelo'])){ //ARRUMAR O ISSET!!! ?>
            <h5>Ultimo veículo cadastrado</h5>
            <ul>
            <li>Modelo: <?= $dados['modelo']?></li>  
            <li>Placa: <?= $dados['placa']?> </li> 
            <li>Ano: <?= $dados['ano']?> </li> 
            <li>Estado: <?= $dados['estado']?></li> 
            </ul>
        <?php } else { echo " "; } ?>                   
    </div>
</html>