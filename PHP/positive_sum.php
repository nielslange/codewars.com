<?php

function positive_sum($arr) {
    $result = 0;
    foreach ( $arr as $entry ) {
        if ( $entry > 0 )  {
            $result += $entry;
        }
    }
    return $result;
}

var_dump(positive_sum([1, 2, 3, 4, 5]));        // Expected: 15
var_dump(positive_sum([1, -2, 3, 4, 5]));       // Expected: 13
var_dump(positive_sum([]));                     // Expected: 0
var_dump(positive_sum([-1, -2, -3, -4, -5]));   // Expected: 0
var_dump(positive_sum([-1, 2, 3, 4, -5]));      // Expected: 9
