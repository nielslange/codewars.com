<?php

function rgb(int $r,int $g, int $b): string {
	$r = get_range($r);
	$g = get_range($g);
	$b = get_range($b);

	$r = dechex($r);
	$g = dechex($g);
	$b = dechex($b);

	$r = format_hex($r);
	$g = format_hex($g);
	$b = format_hex($b);

	return strtoupper($r . $g . $b);
}

function get_range(int $d): int {
	return $d < 0 ? 0 : ($d > 255 ? 255 : $d);
}

function format_hex(string $s): string {
	return strlen($s) < 2 ? '0' . $s : $s;
}

var_dump(rgb(255, 255, 255)); // Expected: FFFFFF
var_dump(rgb(255, 255, 300)); // Expected: FFFFFF
var_dump(rgb(0,0,0)); 				// Expected: 000000
var_dump(rgb(-500,0,0)); 			// Expected: 000000
var_dump(rgb(148, 0, 211)); 	// Expected: 9400D3
