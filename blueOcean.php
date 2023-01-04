<?php
function blueOcean($array1, $array2)
{
    foreach ($array2 as $value) {
    	foreach ($array1 as $value2) {
    		if($value == $value2){
    			$key = array_search($value2, $array1);
    			unset($array1[$key]);
    		}
    		
    	}
	}
    
    print_r($array1);
}
blueOcean([1,5,5,5,5,3], [5]);
?>