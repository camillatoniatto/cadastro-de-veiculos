<?php
    //abrir o arquivo de txt e colocar dados em um array
    $arquivo = fopen("cadastro.txt", "r");
    while(!feof($arquivo)){
        $veiculo = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cadastro e aluguel de veículos">
        <meta name="keywords" content="html,css,php">
        <meta name="robots" content="index.php">
        <title>KATIAU automóveis</title>
        <!-- STYLESHEET -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>body {background-color: lightgrey;}</style>
    </head>
    <body>
    <!--JS PARA O MODAL FUNCIONAR-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                 <div class="container-fluid">                    
                     <h1 class="text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-lightning-charge" viewBox="0 0 16 16">
                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
                    </svg>  
                    <b>KATIAU</b>automóveis</h1>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">                                                                          
                            <a href="index.php"><button type="button" class="btn btn-outline-light btn-sm">INÍCIO</button></a> 
                            <a href="disponivel.php"><button type="button" class="btn btn-outline-light btn-sm">VEÍCULOS</button></a>
                            <a href="reservas.php"><button type="button" class="btn btn-outline-light btn-sm">RESERVAS</button></a>
                            <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#cadastroModal">CADASTRO DE VEÍCULOS</button>                                                 
                        </il>
                     </ul>
                 </div>
             </nav>     
        </header>
        <main>
        <section>
        <div class="container-fluid">
            <br>
            <img src="imagens/carro_logo.png" width="20%" height="20%"><h3>ALUGUE SEU VEICULO COM SEGURANÇA E CREDIBILIDADE</h3>
            <br>
        </div> 
        <div class="container overflow-hidden">                     
            <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-justify">
                <div class="col-6">    
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3"><!--HEADER-->
                            <h4 class="my-0 fw-normal">Escolha o período da reserva</h4>
                        </div>
                        <div class="card-body"><!--BODY-->
                            
                            <form action="dados.php" method="POST">
                                <label for="inicio">Início da Reserva</label><br>
                                <input type="datetime-local" class="form-control" name="inicio" required><br>
                                <label for="fim">Fim da Reserva</label><br>
                                <input type="datetime-local" class="form-control" name="fim" required><br>                                                       
                            
                                
                                <label for="reservar">Lista de veículos disponíveis</label><br>
                                    <select class="form-control" id="reservar" name="reservar" required>
                                        <option selected disabled value="0">Selecione</option>
                                        
                                        <!--INICIO OPTION-->
                                            <?php
                                            $numero = count($veiculo);
                                            $i = 0;
                                            while($i <= $numero-4){                                                        
                                               
                                                //if ($veiculo[$i+3]=="Disponivel"){
                                                    ?> <option value="<?php echo $veiculo[$i]." - ".$veiculo[$i+1];?>"><?php                                           
                                                    echo $veiculo[$i]." - ";
                                                    echo $veiculo[$i+1];
                                                    //echo $veiculo[$i+3];                                           
                                                    $i = $i + 4;
                                                    ?> </option> <?php 
                                                //}else{ 
                                                    //n sei oq botar aqui kkkcry
                                                //}
                                            }
                                            ?>
                                        <!--FIM OPTION--> 
                                    </select>
                                    <br>
                                    <input class="form-check-input" type="radio" name="estado" id="estado" value="Provisória" checked>
                                    <label class="form-check-label" for="estado">
                                        Pré-reserva
                                    </label>


                                <hr><br><br>
                                <!--BOTÃO FORMULARIO-->
                                <div class="position-relative">
                                    <div class="position-absolute bottom-0 end-0">                                
                                        <input name="botao2" type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" value="Cancelar">
                                        <input name="botao1" type="submit" class="btn btn-outline-danger" value="Enviar">
                                    </div>
                                </div>
                            </form> 

                        </div>
                    </div>
                </div>

                <div class="col-6">    
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3"><!--HEADER-->
                            <h4 class="my-0 fw-normal">Já fez sua reserva?</h4>
                        </div>
                        <div class="card-body"><!--BODY-->
                            <center><a href="reservas2.php"><button type="button" class="btn btn btn-outline-danger btn-lg">Acessar Reserva</button></a></center>                  
                                                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
        </main>
            
            <!--CÓDIGO JANELA MODAL-->
            <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroModalLabel">CADASTRO DE VEÍCULOS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">                   
                    <!-- FORMULÁRIO DE CADASTRO -->
                    <form action="cadastro2.php" method="POST">                        
                        <div class="campo">
                            <label for="modelo">Modelo</label><br>
                            <input class="form-control" type="text" name="modelo" placeholder="Ex: Uno"required/><br>
                            <label for="placa">Placa</label><br>
                            <input class="form-control" type="text" name="placa" placeholder="Ex: BRA1E23"required/><br>
                            <label for="ano">Ano</label><br>
                            <input class="form-control" type="text" name="ano" placeholder="Ex: 2021"required/><br>
                        </div>                            
                        <div class="campo">
                        <label for="estado">Estado</label> 
                            <select class="form-control" id="estado" name="estado" required>
                                <option selected disabled value="0">Selecione</option>
                                <option value="Disponivel">Disponível</option>
                                <option value="Manutenção">Manutenção</option>
                            </select>
                        </div>                        
                </div>
                <div class="modal-footer">
                    <!-- BOTÕES DO FORMULARIO -->
                    <input name="botao2" type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" value="Cancelar">
                    <input name="botao1" type="submit" class="btn btn-outline-danger" value="Enviar">
                    </form>
                </div>
                </div>
            </div>
            </div>


        <footer>
            <hr>
            <nav class="navbar fixed-bottom navbar-dark bg-dark">
                 <div class="container-fluid">                  
                     <p class="text-light"> Desenvolvido por: Camilla Toniatto</p>
                 </div>
             </nav>
        </footer> 
    </body>
</html>
