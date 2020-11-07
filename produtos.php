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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

    
    <div class="container-fluid">  
    
        <ul class="nav flex-column">
        
            <p class="display-4">Categorias</p>
            <li class="nav-item" onclick="exibir_todos()">Todos (12)</li>
            <li class="nav-item" onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li class="nav-item" onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li class="nav-item" onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li class="nav-item" onclick="exibir_categoria('lavaroupas')">Lavadoura de roupas (2)</li>
            <li class="nav-item" onclick="exibir_categoria('lavalouca')">Lava-louças(2)</li>
        </ul>
    </div>
    <br />


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

    <?php
        include_once('footer.html');
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>