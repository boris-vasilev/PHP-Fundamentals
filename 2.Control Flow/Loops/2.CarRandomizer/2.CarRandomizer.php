<?php
function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}
//$colorList=["grey", "yellow","red","green","black","white","blue"];
if(isset($_GET["cars"])){
    $carNames=explode(", ",$_GET["cars"]);
    $carList;
    for($i=0;$i<count($carNames);$i++){
       // $carColor=rand(0,count($colorList));
        $carColor=rand_color();
        $carCount=rand(1,5);
        $carList[$i]=[$carNames[$i],$carColor,$carCount];
    }
}
include "2.CarRandomizer_frontend.php";
?>