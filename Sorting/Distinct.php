<?php
function solution($A) {
    $distinct = 0;
    
    sort($A);

    for($i = 0; $i < count($A) - 1; $i++){
        if($A[$i] !== $A[$i+1]){
            $distinct++;
        }
    }
    
    //we counted distinct pairs
    //and need to add +1 for distinct values
    if(count($A) > 0){
        $distinct++;
    }
    
    return $distinct;
}