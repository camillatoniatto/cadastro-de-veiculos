<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veículos Disponíveis</title>
    </head>
    <body>
        <header>
            <h1 class="titulo">Veículos Disponíveis</h1>
        </header>
        <main>
            <form action="disponivel.php" method="POST"></form>
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="inicio">Início da Reserva</label>
                        <input type="datetime-local" name="inicio" required><br>
                        <label for="fim">Fim da Reserva</label>
                        <input type="datetime-local" name="fim" required><br>   
                    </div>
                    </fieldset>
                    <fieldset class="grupo">
                    <!-- OPTIONS PROVISÓRIAS -->
                    <div class="campo">
                    <label for="veiculos">Veículos Disponíveis</label> 
                        <select id="veiculos" name="veiculos" required>
                            <option selected disabled value="0">Selecione</option>
                            <option value=" ">veiculo 1</option>
                            <option value=" ">veiculo 2</option>
                            <option value=" ">veiculo 3</option>
                            <option value=" ">veiculo 4</option>
                            <option value=" ">veiculo 5</option>
                        </select>
                    </div>
                </fieldset>
                <br>
                <!-- Botão para enviar/cancelar o formulário -->
                <input name="botao1" type="submit" value="Enviar"><br>
                <input name="botao2" type="reset" value="Cancelar"><br>
                <br><br>
            </form>
        </main> 
    </body>
</html>