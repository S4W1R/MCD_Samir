<?php
$pdo =  new PDO("mysql:dbname-test;host-localhost:3306","root","");

if($pdo) {
        echo "banco conectado!";
    }

?>