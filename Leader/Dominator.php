<?php
function solution($A) {
    $stack = [];
    for($i = 0; $i < count($A); $i++){
        $stack[] = $A[$i];
        if(count($stack) >= 2){
            if($stack[count($stack)-1] != $stack[count($stack)-2]){
                array_pop($stack);
                array_pop($stack);
            }
        }
    }

    if(empty($stack)){
        return -1;
    }

    $candidate = $stack[0];
    $count = 0;

    foreach($A as $i => $num){
        if($candidate == $num){
            $index = $i;
            $count++;
        }
    }
    
    return $count > floor(count($A)/2) ? $index : -1;
}