<?php

$conn = mysqli_connect("localhost", "root", "", "fseletro");

if (!$conn) {
    die("A conexão ao BD falho: " . mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['msg'])) {
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <!-- Inicio do menu -->
    <?php
    include('menu.html');
    ?>
    <!-- fim do menu -->

    <div class="container-fluid">
        <h1>Contato</h1>
        <hr>
        <div class="row">
            <div class="col">
                <img src="imag/email.jpg" width="40px">contato@fullstackeletro.com
            </div>
            <div class="col">
                <img src="imag/whats.webp" width="70px">(11) 99999-9999
            </div>
        </div>

        <br> <br> <br>

        <form method="post" action="">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" style="width: 400px;">
                <label for="msg">Mensagem: </label>
                <textarea class="form-control" style="width: 400px;" placeholder="Digite sua mensagem" name="msg"></textarea>
            </div>
            <button type="submit" class="btn btn-info" name="submit">Enviar</button>

        </form>


        <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br><hr>";
            }
        } else {
            echo "Nenhum comentário ainda!";
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