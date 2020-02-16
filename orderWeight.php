<?php

function orderWeight($str) {
	foreach(explode(' ', $str) as $key => $value) {
		$array[$key]['key'] 	= $value;
		$array[$key]['value'] = array_sum(str_split($value));
	}

	foreach ($array as $key => $row) {
		$array_key[$key] 		= $row['key'];
		$array_value[$key] 	= $row['value'];
	}

	array_multisort($array_value, SORT_ASC, $array_key, SORT_STRING, $array);

	return implode(' ', array_column($array, 'key'));
}

var_dump(orderWeight("103 123 4444 99 2000")); 													// Expected: 2000 103 123 4444 99
var_dump(orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123")); // Expected: 11 11 2000 10003 22 123 1234000 44444444 9999
