<?php

$i = 1;
while($i <= 100){
    if($i % 15 === 0) {
        echo "FizzBuzz";   
    }
    elseif($i % 3 === 0) {
        echo "Fizz";
    } 
    elseif($i % 5 === 0) {
        echo "Buzz";
    }
    else {
        echo $i;
    }
    echo PHP_EOL;
    $i++;
}

$array = [3,4,1,2,5];
echo $array[0];

$age = [
    "miyake" => 24,
    "tabata" => 23,
    "kurihara" => 21
];
echo $age["tabata"];

?>