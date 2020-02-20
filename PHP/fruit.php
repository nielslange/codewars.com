<?php

function fruit($reels, $spins){
  $normalise = normalise($reels, $spins);

  switch ($normalise) {
    // Three of a kind
    case 'wildwildwild':        return 100; break;
    case 'starstarstar':        return 90; break;
    case 'bellbellbell':        return 80; break;
    case 'shellshellshell':     return 70; break;
    case 'sevensevenseven':     return 60; break;
    case 'cherrycherrycherry':  return 50; break;
    case 'barbarbar':           return 40; break;
    case 'kingkingking':        return 30; break;
    case 'queenqueenqueen':     return 20; break;
    case 'jackjackjack':        return 10; break;
    
    // Two of a kind plus wild
    case 'starstarwild':      return 18; break;
    case 'bellbellwild':      return 16; break;
    case 'shellshellwild':    return 14; break;
    case 'sevensevenwild':    return 12; break;
    case 'cherrycherrywild':  return 10; break;
    case 'barbarwild':        return 8; break;
    case 'kingkingwild':      return 6; break;
    case 'queenqueenwild':    return 4; break;
    case 'jackjackwild':      return 2; break;
    
    // Two of a kind or default
    default: 
      switch (true) {
        case strstr($normalise, 'wildwild'):      return 10; break;
        case strstr($normalise, 'starstar'):      return 9; break;
        case strstr($normalise, 'bellbell'):      return 8; break;
        case strstr($normalise, 'shellshell'):    return 7; break;
        case strstr($normalise, 'sevenseven'):    return 6; break;
        case strstr($normalise, 'cherrycherry'):  return 5; break;
        case strstr($normalise, 'barbar'):        return 4; break;
        case strstr($normalise, 'kingking'):      return 3; break;
        case strstr($normalise, 'queenqueen'):    return 2; break;
        case strstr($normalise, 'jackjack'):      return 1; break;
        default:                                  return 0;
      }
  }
}

function normalise(array $reels, array $spins): string {
  $result[] = $reels[0][$spins[0]];
  $result[] = $reels[1][$spins[1]];
  $result[] = $reels[2][$spins[2]];
  
  $result = array_map('strtolower', $result);
  sort($result);

  return implode($result);
}

$reel = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
$spin = [0,0,0];
var_dump(fruit([$reel,$reel,$reel],$spin)); // Expected: 100

$reel1 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
$reel2 = ["Bar", "Wild", "Queen", "Bell", "King", "Seven", "Cherry", "Jack", "Star", "Shell"];
$reel3 = ["Bell", "King", "Wild", "Bar", "Seven", "Jack", "Shell", "Cherry", "Queen", "Star"];
$spin = [5,4,3];
var_dump(fruit([$reel1,$reel2,$reel3],$spin)); // Expected: 0

$reel1 = ["King", "Cherry", "Bar", "Jack", "Seven", "Queen", "Star", "Shell", "Bell", "Wild"];
$reel2 = ["Bell", "Seven", "Jack", "Queen", "Bar", "Star", "Shell", "Wild", "Cherry", "King"];
$reel3 = ["Wild", "King", "Queen", "Seven", "Star", "Bar", "Shell", "Cherry", "Jack", "Bell"];
$spin = [0,0,1];
var_dump(fruit([$reel1,$reel2,$reel3],$spin)); // Expected: 3

$reel1 = ["King", "Jack", "Wild", "Bell", "Star", "Seven", "Queen", "Cherry", "Shell", "Bar"];
$reel2 = ["Star", "Bar", "Jack", "Seven", "Queen", "Wild", "King", "Bell", "Cherry", "Shell"];
$reel3 = ["King", "Bell", "Jack", "Shell", "Star", "Cherry", "Queen", "Bar", "Wild", "Seven"];
$spin = [0,5,0];
var_dump(fruit([$reel1,$reel2,$reel3],$spin)); // Expected: 6