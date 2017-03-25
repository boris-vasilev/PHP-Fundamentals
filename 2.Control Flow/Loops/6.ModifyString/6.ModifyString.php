<?php
$output;
if(isset($_GET["operation"])&&isset($_GET["string"])){
    switch ($_GET["operation"]) {
        case 'palindrome':
            if($_GET["string"]==strrev($_GET["string"])){
                $output=$_GET["string"]." is a palindrome.";
            }else{
                $output=$_GET["string"]." is not a palindrome.";
            }
            break;
        case 'reverse':
            $output=strrev($_GET["string"]);
            break;
        case 'split':
            $output="";
            $strToArr= str_split($_GET["string"]);
            foreach($strToArr as $character){
                $output.=$character." ";
            }
            break;
        case 'hash':
            $output = hash('md5',$_GET["string"]);
            break;
        case 'shuffle':
            $output = str_shuffle($_GET["string"]);
            break;
        default:
            $output="Invalid operation";
            break;
    }
}
include "6.ModifyString_frontend.php";
?>