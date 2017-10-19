<?php require_once 'global.php' ?>

<?php
    try {
        $id = $_POST['id'];
        $nome = $_POST['nome'];

        $categoria = new Categoria($id);
        $categoria->nome = $nome;

        $categoria->atualizar();

        header('Location: categorias.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

