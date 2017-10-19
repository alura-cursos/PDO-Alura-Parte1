<?php
    require_once 'global.php';

    try {
        $categoria = new Categoria();
        $nome = $_POST['nome'];
        $categoria->nome = $nome;
        $categoria->inserir();

        header('Location: categorias.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }