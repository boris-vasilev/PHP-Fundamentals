<?php
//GETTING ARGUMENTS FROM CLI(command line)
$operation =fgets(STDIN);
$firstNum=intval(fgets(STDIN));
$secondNum=intval(fgets(STDIN));
//CANT FIGURE OUT WHY BUT fgets() gets also the ENTER after the argument that is passed that's why we exclude the last character {{{ substr($operation,0,strlen($operation)-1) }}}
if(substr($operation,0,strlen($operation)-1)=="sum"){
    echo $firstNum+$secondNum;
}elseif(substr($operation,0,strlen($operation)-1)=="subtract"){
    echo $firstNum-$secondNum;
}else{
    echo("Invalid operation");
}