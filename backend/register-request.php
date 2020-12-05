<?php

require "./Models/Pedido.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON 

$pedidos = new Pedido;
$pedidos->$nome = $_POST['nome'];
$pedidos->$endereco = $_POST['endereco'];
$pedidos->$telefone = $_POST['telefone'];
$pedidos->$produto = $_POST['produto'];
$pedidos->$valor_unitario = $_POST['valor_unitario'];
$pedidos->$qtd = $_POST['qtd'];
$pedidos->$valor_total = $_POST['valor_total'];

$validate = $pedidos->register();

if ($validate) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}