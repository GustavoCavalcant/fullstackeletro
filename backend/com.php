<?php

require "./Models/Comentario.php";

header("Access-Control-Allow-Origin:*");    // Permite que outras aplicações acessem a api
header("Content-type: application/json");   //Indicação de arquivo JSON 

$comentarios = Comentario::getAll();

echo json_encode($comentarios);