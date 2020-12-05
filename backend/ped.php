<?php

require "./Models/Pedido.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON 

$pedidos = Pedido::getAll();



echo json_encode($pedidos);