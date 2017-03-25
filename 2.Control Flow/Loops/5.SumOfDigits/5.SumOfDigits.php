<?php
$output;
if(isset($_GET["input"])){
    $numbers=explode(", ",$_GET["input"]);
    for($i = 0; $i<count($numbers); $i++){
        if(is_numeric($numbers[$i])){
            $digSum=0;
            $tempNum=intval($numbers[$i]);
            while($tempNum!=0){
                $digSum+=$tempNum%10;
                $tempNum=floor($tempNum/10);
            }
            $output["$numbers[$i]"]=$digSum;
        }else{
            $output["$numbers[$i]"]="I cannot sum that.";
        }
    }
}
include "5.SumOfDigits_frontend.php";
?>