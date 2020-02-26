<?php

function past(int $h, int $m, int $s): int {
  return ( $h < 0 || $h > 23 ||  $m < 0 || $m > 59 || $s < 0 || $s > 59 ) ? -1 : ( $h * 3600000 + $m * 60000 + $s * 1000 );
}

var_dump(past(0, 1, 1)); // Expected: 61000
var_dump(past(1, 1, 1)); // Expected: 3661000
var_dump(past(0, 0, 0)); // Expected: 0
var_dump(past(1, 0, 1)); // Expected: 3601000
var_dump(past(1, 0, 0)); // Expected: 3600000