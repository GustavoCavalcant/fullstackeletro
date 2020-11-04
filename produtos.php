<?php

$conn = mysqli_connect("localhost", "root", "", "fseletro");

if (!$conn) {
    die("A conexão ao BD falho: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <script src="js/script.js"></script>
    <title>Produtos - Full Stack Eletro</title>
</head>

<body>
    <!-- Inicio do menu -->
    <?php
    include('menu.html');
    ?>
    <!-- fim do menu -->
    <header>

        <h1>Produtos</h1>
    </header>
    <hr>

    <section class="categorias">
        <h3>Categorias</h3>
        <ul>
            <li onclick="exibir_todos()">Todos (12)</li>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaroupas')">Lavadoura de roupas (2)</li>
            <li onclick="exibir_categoria('lavalouca')">Lava-louças(2)</li>
        </ul>
    </section>


    <?php
    $sql = "select * from produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {

    ?>
        
            <div class="produtos-blocos" style="display:block" id="<?php echo $rows['categoria']; ?>" >
                <img src="<?php echo $rows["imagem"]; ?>" width="120px" onmouseover="destaque(this)" onmouseout="imgpadrao(this)">
                <br>
                <p class="nomeprod"><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p class="preco-antigo">R$ <?php echo $rows["preco"]; ?></p>
                <p class="preco-atual">R$ <?php echo $rows["preco_venda"]; ?></p><br>
            </div>
        
    <?php
        }
    } else {
        echo "Nenhum produto cadastrado!";
    }
    ?>

    <footer id="rodape">
        <p id="forma_pagamento">Formas de pagamento:</p>
        <img src="imag/Forma-pagamento.png" alt="Formas de pagamento" width="400px">
        <p>&copy; Recode Pro</p>
    </footer>

</body>

</html>