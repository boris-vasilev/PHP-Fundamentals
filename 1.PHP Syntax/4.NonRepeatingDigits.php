<?php

$N =  247;
if($N>=102) {
    for ($i = 102; $i <= $N; $i++){
        if(floor($i%10)!=floor(($i%100)/10)&&floor($i%10)!=floor($i/100)&&floor(($i%100)/10)!=floor($i/100)){
            echo "$i ";
        }
    }
}else{
    echo "no";
}