<?php require_once 'cabecalho.php' ?>

<div class="row">
    <div class="col-md-12">
        <h2>Criar Nova Categoria</h2>
    </div>
</div>

<form action="categorias-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome da Categoria">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
