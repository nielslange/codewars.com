<?php

function tower_builder(int $n): array {
  $total = calc_blocks($n);
  
  for ($i = 1; $i <= $n; $i++) { 
    $blocks = calc_blocks($i);
    $spaces = ($total - $blocks) / 2;
    $result[] = calc_row($blocks, $spaces);
  }

  return $result;
}

function calc_blocks(int $row): int {
  return $row * 2 - 1;
}

function calc_row(int $blocks, int $spaces): string {
  return str_repeat(' ', $spaces) . str_repeat('*', $blocks) . str_repeat(' ', $spaces);
}

var_dump(tower_builder(3));
var_dump(tower_builder(6));