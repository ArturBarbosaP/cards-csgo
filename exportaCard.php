<?php
require('ConexaoBD.php');

$arquivo = fopen('exportacao.csv', 'w+');

if ($arquivo) 
{
    $sql = "SELECT * FROM arma";
    $execComando = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($execComando) > 0)
    {
        fwrite($arquivo, "id;nome;balas;dano;preco\n");
        
        foreach ($execComando as $arma)
        {
            fwrite($arquivo, $arma['id'].";".$arma['nome'].";".$arma['balas'].";".$arma['dano'].";".$arma['preco']."\n");
        }

        fclose($arquivo);

        header('Location: exportacao.php');
    }
    else
    {
        fwrite($arquivo, "Nenhuma arma cadastrada!;");
    }
}
else
{
    echo "Não foi possível criar o arquivo! <br><br>";
    echo "<a href='exportacao.php'>Voltar</a>";
}
?>