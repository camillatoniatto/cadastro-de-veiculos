<?php
//abrir o arquivo de txt e colocar dados em um array
$arquivo = fopen("cadastro.txt", "r");
while(!feof($arquivo)){
    $veiculo[] = explode("|", fgets($arquivo));
}
fclose($arquivo);
?>