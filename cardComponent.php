<?php
    function exibirCard($card)
    {
        echo '<h3 class="card-title">'.$card["nome"].'</h3>' . '<br>';
        echo '<img src=img/'.$card["img"].' class="card-img-top">'.'<br> <br>';
        echo 'Balas: '.$card["balas"].'<br>';
        echo 'Dano: '.$card["dano"].'<br>';
        echo 'Preço: $'.$card["preco"].'<br> <br> <br>';
    }
?>