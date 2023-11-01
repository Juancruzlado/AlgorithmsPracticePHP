<?php

function fizzBuzz(){
    for($i = 0; $i <= 100; $i++){
        if($i != 0){
            if($i % 3 == 0 & $i % 5 == 0){
                echo "fizzbuzz\n";
            }
            if($i % 3 == 0){
                echo "fizz\n";
            }
            if($i % 5 == 0){
                echo "buzz\n";
            }
            if($i % 3 != 0 && $i % 5 != 0){
                echo "$i\n";
            }
        }
    }
}

fizzBuzz();