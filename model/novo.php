<?php

require_once 'dbcon.php';

$sql = "INSERT INTO conta_corrente (data, descricao, categoria, tipo, valor)  "
        . "VALUES ('2016-06-25', 'Presente', 'outras', 'D', 100.10)";

$result = $dbcon->query($sql);



