<?php

function likes( $names ) {
	switch (count($names)) {
		case 0: $result = sprintf('no one likes this'); break;
		case 1: $result = sprintf('%s likes this', $names[0]); break;
		case 2: $result = sprintf('%s and %s like this', $names[0], $names[1]); break;
		case 3: $result = sprintf('%s, %s and %s like this', $names[0], $names[1], $names[2]); break;
		default: $result = sprintf('%s, %s and %d others like this', $names[0], $names[1], count($names)-2);
	}
	return $result;
}

var_dump(likes( [] ) );
var_dump(likes( [ 'Peter' ] ) );
var_dump(likes( [ 'Jacob', 'Alex' ] ) );
var_dump(likes( [ 'Max', 'John', 'Mark' ]) );
var_dump(likes( [ 'Alex', 'Jacob', 'Mark', 'Max' ] ) );
