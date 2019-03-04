<?php

    $num = 0;
    while ($num < 10) {

        $num = $num + 1;
        
        if($num == 3){
        continue;
        }

        echo $num;
    }

?>