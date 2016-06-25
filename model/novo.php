<?php

require_once 'dbcon.php';



$data = DateTime::createFromFormat('d/m/Y', $_POST['data']);

$valor = ($_POST['tipo'] == "D")? $_POST['valor'] * -1  : $_POST['valor'];


$sql = "INSERT INTO conta_corrente (data, descricao, categoria, tipo, valor)  "
        . "VALUES ('".$data->format('Y-m-d')."',"
        . " '".$_POST['descricao']."',"
        . " '".$_POST['categoria']."',"
        . " '".$_POST['tipo']."',"
        . " '".$valor."'"
        . ")";

try {
$result = $dbcon->exec($sql);

} catch (Exception $e)
{
    echo $e->getMessage();
    
}
echo json_encode($result);