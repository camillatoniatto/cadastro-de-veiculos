<?php
class Handler{
    public static function arrayHandler(){
        $a = array();
        $a['modelo'] = $_POST['modelo'];
        $a['placa'] = $_POST['placa'];
        $a['ano'] = $_POST['ano'];

        $a['estado'] = $_POST['estado'];
        $check0 = $check1 = $check2 = "";
        switch ('estado') {
            case "Selecione": {
                $check0 = "selected";
            break;
            }
            case "Disponível": {
                $check1 = "Disponível";
            break;
            }
            case "Manutenção": {
                $check2 = "Manutenção";
            break;
            }  
        }
    return $a;
    }
}
?>
