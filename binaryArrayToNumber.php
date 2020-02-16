<?php

function binaryArrayToNumber($arr) {
  return bindec(implode($arr));
}

var_dump(binaryArrayToNumber([0,0,0,1]));	// Expected: 1
var_dump(binaryArrayToNumber([0,0,1,0]));	// Expected: 2
var_dump(binaryArrayToNumber([1,1,1,1]));	// Expected: 15
var_dump(binaryArrayToNumber([0,1,1,0]));	// Expected: 6
