<?php

    $noticias = array();

    $noticias[1]['Titulo'] = 'Titulo noticia 1';
    $noticias[1]['Conteudo'] = 'Conteudo noticia 1';

    $noticias[2]['Titulo'] = 'Titulo noticia 2';
    $noticias[2]['Conteudo'] = 'Conteudo noticia 2';

    $noticias[3]['Titulo'] = 'Titulo noticia 3';
    $noticias[3]['Conteudo'] = 'Conteudo noticia 3';

    //var_dump($noticias);


/*
// Leitura array com while
$idx = 1;
while ($idx <= 3) {
    echo $noticias[$idx]['Titulo'];
    echo '<br/>';
    echo $noticias[$idx]['Conteudo'];
    echo '<br/>';

    $idx++;
}
*/

//Leitura array com for

for ($idx=1; $idx <= 3; $idx++) {
    echo $noticias[$idx]['Titulo'];
    echo '<br/>';
    echo $noticias[$idx]['Conteudo'];
    echo '<br/>';
}
?>