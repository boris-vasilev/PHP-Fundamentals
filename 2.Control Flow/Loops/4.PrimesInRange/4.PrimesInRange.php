<?php
if(isset($_GET["min"])&&isset($_GET["max"])){
    $numbersList=[];
    for($i=$_GET["min"]; $i<=$_GET["max"]; $i++){
        array_push($numbersList,$i);
    }
}
include "4.PrimesInRange_frontend.php";
?>