<?php

    $produtos[1] = 'Sofa';
    $produtos[2] = 'mesa';
    $produtos[3] = 'cadeira';
    $produtos[4] = 'fogao';
    $produtos[5] = 'geladeira';
    $produtos[6] = 'garrafa';

    foreach ($produtos as $produto ) {
       echo $produto. '<br/>';
        
       if ($produto == 'mesa') {
           echo 'Compre mesa <br/>';
       }

    }

?>