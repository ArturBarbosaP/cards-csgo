<!doctype html>
<html lang="pt-BR">
    <?php 
    require('cardComponent.php'); 
    require('ConexaoBD.php');
    session_start();
    ?>

    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
    crossorigin="anonymous">
    <title> Cards CS:GO </title>
    </head>

    <body>
    <div class="container">
        <!-- Componente 1 MENU NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Cards de CS:GO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cardListView.php"> New Card</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="exportacao.php">Exportar Dados <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Componente 2 DESCRICAO JUMBOTRON -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Projeto Cards do CS:GO</h1>
                <p class="lead">Abaixo são exibidos os cards contendo as armas do CS:GO.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Exportação das armas
                            <div class="float-end"> <a href="exportaCard.php" class="btn btn-primary">Exportar Dados</a></div>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderedtable-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Balas</th>
                                    <th>Dano</th>
                                    <th>Preco</th>
                                    <th>Imagem</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $sql = "SELECT * FROM arma";
                            $execComando = mysqli_query($conexao, $sql);
                            if (mysqli_num_rows($execComando) > 0)
                            {
                                foreach ($execComando as $arma)
                                {?>
                                    <tr>
                                        <td><?= $arma['id']; ?></td>
                                        <td><?= $arma['nome']; ?></td>
                                        <td><?= $arma['balas']; ?></td>
                                        <td><?= $arma['dano']; ?></td>
                                        <td><?= $arma['preco']; ?></td>
                                        <td><img src="<?= 'img/'.$arma['img']; ?>" width="60px"></td>
                                    </tr>
                                <?php
                                }
                                } 
                                else 
                                {
                                    echo "<h5> Nenhuma arma cadastrada </h5>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</html>