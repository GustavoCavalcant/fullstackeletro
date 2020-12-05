<?php

class Connection 
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=localhost;dbname=fseletro;charset=utf8",
            "root",
            ""
        );

        if($conn) {
            return $conn;
        }
        else {
            echo "<h1>Erro ao realizar conexão</h1>";
        }
    }
}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "fseletro";

// $table = $_GET['table'];

// $conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn) {
//     die("A conexão ao BD falhou: " . mysqli_connect_error());
// }
// setlocale(LC_MONETARY, 'pt_BR');

// $sql = "select * from $table";
//         $result = $conn->query($sql);

//         // echo $result->fetch_all();

//         print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)) );

//         mysqli_close($conn);
        
