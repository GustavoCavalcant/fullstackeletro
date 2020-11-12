<?php

$conn = mysqli_connect("localhost", "root", "", "fseletro");

if (!$conn) {
    die("A conexão ao BD falho: " . mysqli_connect_error());
}


if (isset($_POST['nome'])) {
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        include('menu.html');
        ?>
    </header>
    <div class="container-fluid">
        <h1>Faça seu Pedido</h1>
        <hr>
    </div>

    <main class="container">

        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="email" class="form-control" name="nome" id="inputEmail4" placeholder="Digite seu nome completo">
                </div>
                <div class="form-group col-md-6">
                    <label for="endereco">Endereço</label>
                    <input type="password" class="form-control" id="inputAddress4" name="endereco" placeholder="Ex: Rua das flores, 180">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="inputAddress4" name="telefone" placeholder="Ex: 11987878787">
                </div>
                <div class="form-group col-md-6">
                    <label for="produto">Produto</label>
                    <input type="text" class="form-control" id="inputAddress4" name="produto" placeholder="Descrição do produto">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="unitario">Valor unitario(R$)</label>
                    <input type="number" name="valor_unitario" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                    <label for="qtd">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade">
                </div>
                <div class="form-group col-md-5">
                    <label for="total">Valor Total(R$)</label>
                    <input type="number" class="form-control" name="valor_total">
                </div>
            </div>


    </main>
    <div class="container-fluid">
        <p class="display-4">Lista de Pedidos</p>
        <?php
        $sql = "select * from pedidos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo "ID: ", $rows['id'], ", Nome: ", $rows['nome'], ", Endereço: ", $rows['endereco'], ", Telefone: ", $rows['telefone'], "<br>";
                echo "Produto: ", $rows['produto'], ", Valor unitário: ", $rows['valor_unitario'], ", Quantidade: ", $rows['quantidade'], ", Total: ", $rows['valor_total'], "<br><hr>";
            }
        } else {
            echo "Nenhum nenhum pedido efetuado!";
        }

        ?>
    </div>

    <?php
    include_once('footer.html');
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>