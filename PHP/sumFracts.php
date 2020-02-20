<?php

function sumFracts($l) {
	$result = 0;

	var_dump($l);

	foreach($l as $row) {
		$result += $row[0] / $row[1];
	}

	var_dump($result);
}

var_dump(sumFracts([[1, 2], [1, 3], [1, 4]])); // Expected: [13, 12]
var_dump(sumFracts([[1, 3], [5, 3]])); // Expected: 2
var_dump(sumFracts([[12, 3], [15, 3]])); // Expected: 9
var_dump(sumFracts([[2, 7], [1, 3], [1, 12]])); // Expected: [59, 84]