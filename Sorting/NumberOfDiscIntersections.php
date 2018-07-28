<?php 
//O(n^2) time complexity
function solution($A) {
    $min = [];
    $max = [];
    $ranges= [];
    $result = 0;
    foreach($A as $i => $num){
        $ranges[$i] = ["min" => $i - $num, "max" => $i + $num];
    }
    
    sort($ranges);
    //var_dump($ranges);
    
    for($i = 0; $i < count($ranges) - 1; $i++){
        for($j = $i + 1; $j < count($ranges); $j++){
           if($ranges[$j]["min"] <= $ranges[$i]["max"]){
                $result++;
            }else{
                break;
            }
        }
    }
    //asort($min);
    //var_dump($min);
    //echo implode(", ", $min);
    //var_dump($max);
    return $result;
}