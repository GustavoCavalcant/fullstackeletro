<?php

require "./Connection.php";

class Pedido
{
        public $id_pedido;
        public $nome;
        public $endereco;
        public $telefone;
        public $produto;
        public $valor_unitario;
        public $qtd;
        public $valor_total;


        public static function getAll()
        {
            $connection = Connection::getDb();

            $stmt = $connection->query("SELECT * FROM pedidos");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function register()
        {
            $connection = Connection::getDb();

            $stmt = $connection->query("INSERT INTO pedidos (nome, endereco, telefone, produto, valor_unitario, qtd, valor_total) 
            values ('$this->nome','$this->endereco', '$this->telefone' '$this->produto', '$this->valor_unitario', '$this->qtd', '$this->valor_total')");

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
}