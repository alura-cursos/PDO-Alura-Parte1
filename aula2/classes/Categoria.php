<?php

require_once 'classes/Conexao.php';

class Categoria
{

    public $id;
    public $nome;

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
}