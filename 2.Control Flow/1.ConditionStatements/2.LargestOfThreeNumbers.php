<?php
$first=intval(fgets(STDIN));
$second=intval(fgets(STDIN));
$third=intval(fgets(STDIN));
$max=$first;
if($second>$max){
    $max=$second;
}
if($third>$max){
    $max=$third;
}
echo $max;