<?php

$conn = mysqli_connect("localhost", "root", "", "fseletro");

if(!$conn){
    die("A conexão ao BD falho: ". mysqli_connect_error());
}


if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $produto = $_POST['produto'];
    $valor_unitario = $_POST['valor_unitario'];
    $quantidade = $_POST['quantidade'];
    $valor_total = $_POST['valor_total'];

    $sql = "insert into pedidos (nome, endereco, telefone, produto, valor_unitario, quantidade, valor_total) 
    values('$nome', '$endereco', '$telefone', '$produto', $valor_unitario, $quantidade, $valor_total)";
    $result = $conn->query($sql);

    echo "<script>
        alert('Pedido realizado com sucesso!')
        window.location.href = 'index.php'
        </script>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Tela de pedidos</title>
</head>
<body>
    <header>
    <?php
            include('menu.html');
    ?> 
    
    <h1>Faça seu Pedido</h1>
    <hr>
    </header>
    
    <main class="pedidos">

        <form action="" method="post">
            <h4>Nome: </h4>
            <input type="text" name="nome" placeholder="Digite seu nome completo">
            <h4>Endereço: </h4>
            <input type="text" name="endereco" placeholder="Ex: Rua das flores, 180">
            <h4>Telefone: </h4>
            <input type="number" name="telefone" placeholder="Ex: 11987878787">
            <h4>Produto: </h4>
            <textarea name="produto" placeholder="Descrição do produto"></textarea>
            <h4>Valor unitário: </h4>
            <input type="number" name="valor_unitario">
            <h4>Quantidade: </h4>
            <input type="number" name="quantidade">
            <h4>Valor total: </h4>
            <input type="number" name="valor_total">
            <input type="submit" value="Enviar">

        </form>

    </main>
    <h2>Lista de Pedidos</h2>
    <?php
    $sql = "select * from pedidos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            echo"ID: ", $rows['id'], ", Nome: ", $rows['nome'], ", Endereço: ", $rows['endereco'], ", Telefone: ", $rows['telefone'],"<br>";
            echo "Produto: ", $rows['produto'], ", Valor unitário: ", $rows['valor_unitario'], ", Quantidade: ", $rows['quantidade'], ", Total: ", $rows['valor_total'],"<br><hr>";
        }
    } else {
        echo "Nenhum nenhum pedido efetuado!";
    }

    ?> 

    <footer id="rodape">
        <p id="forma_pagamento">Formas de pagamento:</p>
        <img src="imag/Forma-pagamento.png" alt="Formas de pagamento" width="400px">
        <p>&copy; Recode Pro</p>
    </footer>

</body>
</html>