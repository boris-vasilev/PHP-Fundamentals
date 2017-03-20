<?php
$sentence=$argv[1];
$letters=[];
$sentence=str_split($sentence);
foreach ($sentence as $letter){
    if(!array_key_exists($letter,$letters)){
        $letters[$letter]=1;
    }else{
        $letters[$letter]++;
    }
}
print_r($letters);