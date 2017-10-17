<?php

class Categoria
{

    public $id;
    public $nome;

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root', 'alura');
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}