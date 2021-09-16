<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cadastro e aluguel de veículos">
        <meta name="keywords" content="html,css,php">
        <meta name="robots" content="cadastro.php">
        <title>Cadastro de Veículos</title>
        <!-- CSS -->
        <!-- FONTES -->
    </head>
    <body>
        <header>
            <h1 class="titulo">Cadastro de Veículos</h1>
        </header>
        <main>
            <form action="cadastro2.php" method="POST">
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="modelo">Modelo</label>
                        <input type="text" name="modelo[]" placeholder="Ex: Uno"required/><br>
                        <label for="placa">Placa</label>
                        <input type="text" name="placa[]" placeholder="Ex: BRA1E23"required/><br>
                        <label for="ano">Ano</label>
                        <input type="text" name="ano[]" placeholder="Ex: 2021"required/><br>
                    </div>
                    
                    <div class="campo">
                    <label for="estado">Estado</label> 
                        <select id="estado" name="estado[]" required>
                            <option selected disabled value="0">Selecione</option>
                            <option value="disponivel">Disponível</option>
                            <option value="manutenção">Manutenção</option>
                        </select>
                    </div>
                </fieldset>
                <br>
                <!-- Botão para enviar o formulário -->
                <input name="botao1" type="submit" value="Enviar"><br>
                <input name="botao2" type="reset" value="Cancelar"><br>
                <br><br>
            </form>
            <?php
                if(isset($_POST['modelo'])){
                    echo "Veículo cadastrado com sucesso";
                }
                else{
                    echo ".";
                } 
            ?>             
        </main>        
    </body>
</html>