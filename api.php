<?php
require "connection.php";

$request = "SELECT * FROM produtos";
$result = mysqli_query($conn, $request);
$resposta = mysqli_fetch_assoc($result);
$json = array();

while($linha = mysqli_fetch_assoc($result)){
    $json[] = array(
        "product_id"=> $linha["id"],
        "nome"=> $linha["nome"],
        "preco"=> $linha["preco"],
        "descricao"=> $linha["descricao"],
    );
}

return json_encode($json);



