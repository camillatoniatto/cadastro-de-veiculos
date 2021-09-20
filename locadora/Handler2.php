<?php
    class Handler{
        public static function arrayHandler(){                
            $a = array();                
            $a['inicio'] = $_POST['inicio'];
            $a['fim'] = $_POST['fim'];                
            $a['reservar'] = $_POST['reservar'];                        
            $a['estado'] = $_POST['estado'];
            //organizando os valores no array                            
            $gravar = $_POST['inicio']."|".$_POST['fim']."|".$_POST['reservar']."|".$_POST['estado']."|";
                        
            //salvando array no arquivo de texto
            $arquivo = fopen('reservar.txt', 'a+');
            fwrite($arquivo, $gravar); //.PHP_EOL
            fclose($arquivo);
            return $a;
        }
    }
?>