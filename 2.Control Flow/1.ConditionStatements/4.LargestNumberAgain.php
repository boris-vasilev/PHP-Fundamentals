<?php
//Works as a flag. Quite dumb but the fasted method I cound think of.
$max="";
while($number=intval(fgets(STDIN))){
    // avoid automatic type coercion with === because 0==""
    if($max===""||$max<$number){
        $max=$number;
    }
}
echo $max;