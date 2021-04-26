<?php

// Count the amount of ones in the binary representation of an integer
//  For example, since 12 is 1100 in binary, the return value should be 2.


countOnes(12);
function countOnes($i) {
    echo (array_sum(str_split(decbin($i))));
}


// *********************************************************************************

// Create a function that takes an array of names and returns an array where only the first letter of each name is capitalized.

function capMe($arr) {
  $capWords=[];
  foreach($arr as $item){
    $capWords[]=ucfirst(strtolower($item));		
			 }
      
           return $capWords; 
}


// **********************************************************************************

// Create a function that takes an array of items, removes all duplicate items and returns a new array in the same sequential order as the old array.

function removeDups($arr) {
	$unique=[];
  foreach($arr as $item){
		if(!in_array($item,$unique)){
			$unique[]=$item;
		}
	}
	return $unique;
}


