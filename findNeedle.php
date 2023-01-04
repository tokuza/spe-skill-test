<?php

function findNeedle($haystack, $needles)
{
    
    return array_search($needles,$haystack);
}

echo findNeedle(["red", "blue", "yellow", "black", "grey"], "blue");

?>