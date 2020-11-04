<?php

$conn = mysqli_connect("localhost", "root", "", "fseletro");

if(!$conn){
    die("A conexão ao BD falho: ". mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentarios(nome, msg) values('$nome', '$msg')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Contato - Full Stack Eletro</title>
</head>
<body>
    <!-- Inicio do menu -->
    <?php
        include('menu.html');
    ?>
    <!-- fim do menu -->
    <h1>Contato</h1>

    <hr>
        <div class="contatos">
            <div class="email">
                <img src="imag/email.jpg" width="40px">contato@fullstackeletro.com
            </div>
            <div class="whatsapp">
                <img src="imag/whats.webp" width="70px">(11) 99999-9999
            </div>
        </div>    
        
    
    <div class="form-contato">
        <form method="post" action="">
            <h4>Nome: </h4>
            <input type="text" name="nome"style="width: 400px;">
            <h4>Mensagem: </h4>
            <textarea style="width: 400px;" name="msg"></textarea>

            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>
    
    <?php
$sql = "select * from comentarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo "Data: ", $rows['data'], "<br>"; 
        echo "Nome: ", $rows['nome'], "<br>"; 
        echo "Mensagem: ", $rows['msg'], "<br><hr>"; 
        
}
}else {
    echo "Nenhum comentário ainda!";
}
?>

    <footer id="rodape">
        <p id="forma_pagamento">Formas de pagamento:</p>
        <img src="imag/Forma-pagamento.png" alt="Formas de pagamento" width="400px">
        <p>&copy; Recode Pro</p>
    </footer>   
</body>
</html>