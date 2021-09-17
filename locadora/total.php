<?php
//PROVISÓRIO, apenas para testes
$arquivo = fopen('cadastro.txt', 'r');
    while(!feof($arquivo)){
        $veiculo = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    
    $modelo = 0;
    foreach($veiculo as $valor){
        if($valor == "Modelo"){
            $modelo++;
        }
    }
    $placa = 0;
        foreach($veiculo as $valor){
            if($valor == "Placa"){
                $placa++;
            }
        }
    echo "<b>Modelos:</b> $modelo, cadastrados.<br>";
    echo "<b>Placas:</b> $placa, cadastradas.<br>";
?>