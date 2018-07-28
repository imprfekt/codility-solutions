<?php
function solution($A) {
    sort($A);
    
    if($A[count($A) - 1] < 0){
        return $A[count($A) - 1] * $A[count($A) - 2] * $A[count($A) - 3];
    }
    
    //if the biggest number is POSITIVE
    //solution is either product of a last triplet
    //or a product of two smallest negative numbers and the biggest one
    $potentialNegative = $A[0] * $A[1];
    $potentialPositive = $A[count($A) - 3] * $A[count($A) - 2];
    
    if($potentialPositive > $potentialNegative){
        return $A[count($A) - 1] * $potentialPositive;
    }else{
        return $A[count($A) - 1] * $potentialNegative;
    }
}