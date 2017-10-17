<?php require_once 'classes/Categoria.php' ?>

<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $categoria = new Categoria($id);
    $categoria->nome = $nome;

    $categoria->atualizar();

    header('Location: categorias.php');

