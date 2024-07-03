<?php
require "connection.php";

$product = $_GET["id"];

$request = "SELECT * FROM produtos WHERE id = ". $product;
$result = mysqli_query($conn, $request);
$produto = mysqli_fetch_assoc($result);





