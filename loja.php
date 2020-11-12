<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilo.css">
  <title>Nossas lojas - Full Stack Eletro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <!-- Inicio do menu -->
  <?php
  include('menu.html');
  ?>
  <!-- fim do menu -->
  <div class="container-fluid">
    <h1>Nossas lojas</h1>
    <hr>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">Rio de Janeiro</th>
          <th scope="col">São Paulo</th>
          <th scope="col">Santa Catarina</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Avenida Presidente Vargas, 5000</td>
          <td>Avenida Paulista, 985</td>
          <td>Rua Major &Aacute;vila, 370</td>
        </tr>
        <tr>
          <td>10 &ordm; andar</td>
          <td>3 &ordm; andar</td>
          <td>Vila Mariana</td>
        </tr>
        <tr>
          <td>Centro</th>
          <td>Jardins</td>
          <td>(47) 5555-5555</td>
        </tr>
        <tr>
          <td>(21) 3333-3333</th>
          <td colspan="2">(11) 4444-4444</td>
        </tr>
      </tbody>
    </table>
  </div>


  <?php
  include_once('footer.html');
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>