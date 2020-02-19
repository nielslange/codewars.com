<?php

function generateHashtag($str) {
	$str = str_replace(' ', '', ucwords(trim($str)));
	return empty($str) || strlen('#' . $str) > 140 ? false : '#' . $str;
}

var_dump(generateHashtag('')); // Expected: false
var_dump(generateHashtag(str_repeat(' ', 200))); // Expected: false
var_dump(generateHashtag('Codewars')); // Expected: #Codewars
var_dump(generateHashtag('Codewars      ')); // Expected: #Codewars
var_dump(generateHashtag('Codewars Is Nice')); // Expected: #CodewarsIsNice
var_dump(generateHashtag('codewars is nice')); // Expected: #CodewarsIsNice
var_dump(generateHashtag('Code' . str_repeat(' ', 140) . 'wars')); // Expected: #CodeWars
var_dump(generateHashtag('Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat')); // Expected: false
var_dump(generateHashtag(str_repeat("a", 139))); // Expected: #A
var_dump(generateHashtag(str_repeat("a", 140))); // Expected: false
