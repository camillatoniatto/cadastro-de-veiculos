<?php
    //PROVISÓRIO, apenas para testes
    $arquivo = fopen('cadastro.txt', 'r');
    while(!feof($arquivo)){
        $veiculo = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    
    $disponivel = 0;
    foreach($veiculo as $valor){
        if($valor == "Disponível"){
            $disponivel++;
        }
    }
    $manutencao = 0;
        foreach($veiculo as $valor){
            if($valor == "Manutenção"){
                $manutencao++;
            }
        }
    echo "<b>Veículos disponíveis:</b> $disponivel, cadastrados.<br>";
    echo "<b>Veículos em manutenção:</b> $manutencao, cadastrados.<br>";
?>