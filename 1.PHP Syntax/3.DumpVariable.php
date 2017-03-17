<?php

$var = 5;
//try{
//    $var=$var+3;
//    echo $var-3;
//}catch (Exception $exception){
//    echo gettype($var);
//}
if(gettype($var)!="float"&&gettype($var)!="integer"){
    echo gettype($var);
}else{
    echo var_dump($var);
}