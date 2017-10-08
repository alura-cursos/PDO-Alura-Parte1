<?php

class Conexao
{
    public static function pegarConexao()
    {
        $drive = 'mysql';
        $hostname = '127.0.0.1';
        $username = 'root';
        $password = 'local';
        $database = 'estoque';
        $conexao = new PDO($drive . ':host=' . $hostname . ';dbname=' . $database, $username, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}