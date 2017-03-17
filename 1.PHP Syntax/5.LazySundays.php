<?php

$month=(int)date("m");
$year = (int)date("Y");
if($month==2){
    if(($year%4==0&&$year%100!=0)||$year%400==0) {
        for ($i = 1; $i <= 29; $i++) {
            $day=mktime(10, 10, 10,$month,$i ,$year);
            if(date("l",$day)=="Sunday"){
                echo date("d-M-Y",$day)."\n";
            }
        }
    }else{
        for ($i = 1; $i <= 28; $i++) {
            $day=mktime(10, 10, 10, $month,$i ,$year);
            if(date("l",$day)=="Sunday"){
                echo date("d-M-Y",$day)."\n";
            }
        }
    }
}elseif(($month<8&&$month%2==0)||($month>8&&$month%2==1)){
    for($i = 1; $i<=30;$i++) {
        $day=mktime(10, 10, 10, $month,$i ,$year);
        if(date("l",$day)=="Sunday"){
            echo date("d M Y",$day)."\n";
        }
    }
}else{
    for ($i = 1; $i<=31; $i++){
        $day=mktime(10, 10, 10, $month,$i ,$year);
        if(date("l",$day)=="Sunday"){
            echo date("d M Y",$day)."\n";
        }
    }
}