<?php
    $arquivo = fopen('cadastro.txt', 'r');
    while(!feof($arquivo)){
        $veiculo = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    
    $disponivel = 0;
    foreach($veiculo as $valor){
        if($valor == "Disponivel"){
            $disponivel++;
        }
    }
    $manutencao = 0;
        foreach($veiculo as $valor){
            if($valor == "Manutenção"){
                $manutencao++;
            }
        }
    echo "<b>Veículos disponíveis:</b> $disponivel cadastrados.<br>";
    echo "<b>Veículos em manutenção:</b> $manutencao cadastrados.<br>";
?>