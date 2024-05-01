<?php session_start(); ?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Criar Arma</title>
    </head>
    <body>

        <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Arma <a href="cardListView.php" class="btn btn-danger float-end">VOLTAR</a> </h4>
                    </div>
                    <div class="card-body">
                        <form action="crudArmas.php" method="POST">
                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome"class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Balas</label>
                                <input type="number" name="balas"class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Dano</label>
                                <input type="number" name="dano"class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Preco</label>
                                <input type="number" name="preco"class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label>Imagem</label>
                                <input type="file" name="img"class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="inserir_arma" class="btn btn-primary">Inserir Arma</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>