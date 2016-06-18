<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$dbcon = new PDO("sqlite:banco.sqlite");

$hoje = new DateTime();
$mesAnterior = new DateTime('-1 month');

$sql = "SELECT * FROM conta_corrente "
        . "WHERE data between '".$mesAnterior->format('Y-m-d')."' AND '".$hoje->format('Y-m-d')."' "
        . "ORDER BY data ASC";

$result = $dbcon->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
