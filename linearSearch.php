<?php 

function linearSearch($array, $element){
    foreach($array as $arr){
        if($arr == $element){
            return true;
        }
    }
}

$ar = [1, 2, 3, 4, 5, 6, 7];
if(linearSearch($ar, 7) == true){
    echo "yes";
}