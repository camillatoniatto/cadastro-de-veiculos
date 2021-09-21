<?php
    $arquivo = fopen("reservar.txt", "r");
    $arquivo2 = fopen("reservar2.txt", "a+");
    while(!feof($arquivo)){
        $reservar = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    
    $posicao = $_GET['posicao'];
    $estado = $_POST['estado'];
    $reservar[$posicao+3] = $estado;

    unlink("reservar.txt");
    rename("reservar2.txt", "reservar.txt");
    $arquivo = fopen("reservar.txt", "a+");
    $contador = count($reservar);
    $i = 0;

    while($i <= $contador - 1){
        $gravar = $reservar[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo);
    echo "<script>alert('Reserva atualizada com sucesso!');
            window.location.href='reservas2.php';</script>";
?>