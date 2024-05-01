<?php

$conexao = mysqli_connect("localhost","root","","projetoCards");

if(!$conexao)
{
    die('Falha ao conectar: '. mysqli_connect_error());
}
?>