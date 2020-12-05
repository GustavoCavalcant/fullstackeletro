<?php

require "./Models/Comentario.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON 

$comentarios = new Comentario;
$comentarios->nome = $_POST['nome'];
$comentarios->msg = $_POST['msg'];

$validate = $comentarios->register();

if ($validate) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}