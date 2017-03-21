<!--TASK IS SPLITTED INTO FRONTEND and BACKEND FOR SEPARATION OF CONCERNS (SoC) -->
<!--realized with include... in backend file-->
<?php
if(isset($_GET["firstNum"])&&isset($_GET["secondNum"])&&isset($_GET["operation"])){
    if($_GET["operation"]=="sum"&&is_numeric($_GET["firstNum"])&&is_numeric($_GET["secondNum"])){
        $output = $_GET["firstNum"]+$_GET["secondNum"];   
    }elseif($_GET["operation"]=="subtract"&&is_numeric($_GET["firstNum"])&&is_numeric($_GET["secondNum"])) {
        $output =  $_GET["firstNum"]-$_GET["secondNum"];
    }else{
        $output = "Invalid input provided.";
    }
}
include "1.SumTwoNumbers_frontend.php"
?>