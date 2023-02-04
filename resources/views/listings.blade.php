<h1>{{$heading}}</h1>

<?php

    foreach($listings as $l)
    {
        echo '<a href="vagas/'.$l['id'].'">'.$l['titulo'].'</a> - ';
        echo $l['descricao'];
        echo '<br>';
    }

?>