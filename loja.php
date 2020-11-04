<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Nossas lojas - Full Stack Eletro</title>
</head>
<body>
    <!-- Inicio do menu -->
    <?php
            include('menu.html');
    ?>
    <!-- fim do menu -->
    <h1>Nossas lojas</h1>
    <hr>
    <div class="lojas">
        <div class="loja-rj">
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000</p>
                <p>10 &ordm; andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
        </div>    
        <div class="loja-sp">    
                <h3>São Paulo</h3>
                <p>Avenida Paulista, 985</p>
                <p>3 &ordm; andar</p>
                <p>Jardins</p>
                <p>(11) 4444-4444</p>
        </div>  
        <div class="loja-sc">    
                <h3>Santa Catarina</h3>
                <p>Rua Major &Aacute;vila, 370</p>
                <p>Vila Mariana</p>
                <p>(47) 5555-5555</p>
        </div>   
    </div>
    
    <footer id="rodape">
        <p id="forma_pagamento">Formas de pagamento:</p>
        <img src="imag/Forma-pagamento.png" alt="Formas de pagamento" width="400px">
        <p>&copy; Recode Pro</p>
    </footer>        
  
</body>
</html>