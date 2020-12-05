<?php

require "./Connection.php";

class Produto
{
        public $id_produto;
        public $categoria;
        public $imagem;
        public $descricao;
        public $preco;
        public $preco_venda;

        public static function getAll()
        {
            $connection = Connection::getDb();

            $stmt = $connection->query("SELECT * FROM produtos join categorias on produtos.id_categoria = categorias.id_categoria");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}