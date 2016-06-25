<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

try{

$dbcon = new PDO("sqlite:banco.sqlite");

} catch (Exception $e)
{
    echo $e->getMessage();
    
}