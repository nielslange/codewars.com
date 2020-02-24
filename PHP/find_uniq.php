<?php

function find_uniq(array $array) {
	sort($array);

	if ( $array[0] === $array[1] ) rsort($array);

	return $array[0];
}

var_dump(find_uniq([1, 1, 1, 2, 1, 1])); // Expected: 2
var_dump(find_uniq([0, 0, 0.55, 0, 0])); // Expected: 0.55
var_dump(find_uniq([0, 1, 0])); // Expected: 1