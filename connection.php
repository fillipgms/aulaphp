<?php

$server = "localhost";
$username = "root";
$password = "";
$databasename = "aula";

$conn = new mysqli($server, $username, $password, $databasename);

if (!$conn){
    echo "não foi possível conectar ao banco de dados";
};
