<?php
$output_names;
$output_ages;
if(isset($_GET["delimiter"])&&isset($_GET["names"])&&isset($_GET["ages"])){
    switch($_GET["delimiter"]){
        case "|":
            // explode() works like str_split() but with custom delimiter
            $output_names=explode("|",$_GET["names"]);
            $output_ages=explode("|",$_GET["ages"]);
            break;
        case ",":
            $output_names=explode(",",$_GET["names"]);
            $output_ages=explode(",",$_GET["ages"]);
            break;
        case "&":
            $output_names=explode("&",$_GET["names"]);
            $output_ages=explode("&",$_GET["ages"]);    
        break;
    }
}
include "2.RenderStudentsInfo_frontend.php";