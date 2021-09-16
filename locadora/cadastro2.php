<?php
require 'Handler.php';
$dados = Handler::arrayHandler();
?>

<!DOCTYPE html>
    <html lang="pt-br">

    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="veiculos disponiveis">
        <meta name="keywords" content="html,css,php">
        <meta name="robots" content="cadastro2.php">
        <title>Dados do Veículo</title>
    </head>

    <body>
        <div class="container">
            <h1 class="titulo">Dados coletados</h1>
            <div class="subtitulo">
                <h3>Resumo dos dados</h3>
            </div>
            <div class="corpo">
            
                <p>Modelo:
                    <?= $dados['modelo']?>
                </p>  

                <p>Placa:
                    <?= $dados['placa']?>
                </p>

                <p>Ano:
                    <?= $dados['ano']?>
                </p>

                <p>Estado:
                    <?= $dados['estado']?>
                </p>
                
                <a href="index.html"><button class="botao">Página Inicial</button></a>
                <a href="cadastro.php"><button class="botao">Voltar para o cadastramento</button></a>           
            </div>
        </div>
    </body>
</html>