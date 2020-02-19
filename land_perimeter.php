<?php

function land_perimeter( array $arr ): string {
	foreach ( $arr as $row ) {
		$array[] = str_split( $row );
	}
	
	$row 		= sizeof( $array );
	$column	= ( sizeof( $array, 1 ) - $row ) / $row;
	$result = 0;

	for ( $i = 0; $i < $row; $i++ ) {
		for ( $j = 0; $j < $column; $j++ ) {
			if ( $array[$i][$j] == 'X' ) {
				$result += calculate( $array, $i, $j );
			}
		}
	}

	return sprintf( "Total land perimeter: %d", $result );
}

function calculate( array $array, int $x, int $y ): int {
	$result = 0;

	if ( !isset($array[$x-1][$y]) || $array[$x-1][$y] != 'X' ) $result += 1;
	if ( !isset($array[$x+1][$y]) || $array[$x+1][$y] != 'X' ) $result += 1;
	if ( !isset($array[$x][$y-1]) || $array[$x][$y-1] != 'X' ) $result += 1;
	if ( !isset($array[$x][$y+1]) || $array[$x][$y+1] != 'X' ) $result += 1;

	return $result;
}

var_dump(land_perimeter(["XX", "00"])); // Expected: 6
var_dump(land_perimeter(["XX0", "0X0"])); // Expected: 8
var_dump(land_perimeter(["0000", "0XX0", "0X00", "0000"])); // Expected: 8
var_dump(land_perimeter(["OXOOOX", "OXOXOO", "XXOOOX", "OXXXOO", "OOXOOX", "OXOOOO", "OOXOOX", "OOXOOO", "OXOOOO", "OXOOXX"])); // Expected: 60
var_dump(land_perimeter(["OXOOO", "OOXXX", "OXXOO", "XOOOO", "XOOOO", "XXXOO", "XOXOO", "OOOXO", "OXOOX", "XOOOO", "OOOXO"])); // Expected: 52
var_dump(land_perimeter(["XXXXXOOO", "OOXOOOOO", "OOOOOOXO", "XXXOOOXO", "OXOXXOOX"])); // Expected: 40
var_dump(land_perimeter(["XOOOXOO", "OXOOOOO", "XOXOXOO", "OXOXXOO", "OOOOOXX", "OOOXOXX", "XXXXOXO"])); // Expected: 54
var_dump(land_perimeter(["OOOOXO", "XOXOOX", "XXOXOX", "XOXOOO", "OOOOOO", "OOOXOO", "OOXXOO"])); // Expected: 40
