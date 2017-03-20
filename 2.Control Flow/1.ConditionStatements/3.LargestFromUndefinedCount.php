<?php
$max=0;
//$number=intval(fgets(STDIN)) -------- becomes falsy when ""(empty string)is passed
while ($number=intval(fgets(STDIN))){
    if($number>$max){
        $max=$number;
    }
}
echo $max;