<?php 

function binSearch($array, $element){
    if(count($array) === 0) return false;
    $lo = 0;
    $hi = count($array) -1;

    while($lo < $hi) {
        $mid = floor(($lo + $hi) / 2);
        if($array[$mid] == $element){
            return true;
        }
        if($element < $array[$mid]){
            $hi = $mid -1;
        } else {
            $lo = $mid + 1;
        }
    }
    return false;
}

$array = [1, 2, 3, 4, 6, 7, 8, 9, 99];
$e = 9;

if(binSearch($array, $e) === true){
    echo "true";
} else {
    echo "false";
}