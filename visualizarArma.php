<?php
require 'ConexaoBD.php';
?>
<!doctype html>
<html lang="pt-BR">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Detalhes da Arma</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dados da Arma <a href="cardListView.php" class="btn btn-danger float-end">VOLTAR</a></h4>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['id']))
                            {
                                $arma_id = mysqli_real_escape_string($conexao, $_GET['id']);
                                $sql = "SELECT * FROM arma WHERE id='$arma_id' ";
                                $query_run = mysqli_query($conexao, $sql);

                                if (mysqli_num_rows($query_run) > 0)
                                {
                                    $arma = mysqli_fetch_array($query_run);
                            ?>
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <p class="form-control">
                                            <?= $arma['nome']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Balas</label>
                                        <p class="form-control">
                                            <?= $arma['balas']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Dano</label>
                                        <p class="form-control">
                                            <?= $arma['dano']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Preco</label>
                                        <p class="form-control">
                                            <?= $arma['preco']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Imagem</label>
                                        <p class="form-control">
                                            <?= $arma['img']; ?>
                                        </p>
                                    </div>
                            <?php
                                } 
                                else 
                                {
                                    echo "<h4>Nenhum ID encontrado</h4>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>