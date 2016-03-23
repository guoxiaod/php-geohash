--TEST--
Check geohash_verify_hash
--SKIPIF--
<?php if (!extension_loaded("geohash")) print "skip"; ?>
--FILE--
<?php 

$hash = 'xp4ge1b';

$r1 = geohash_get_neighbors($hash);
$r2 = geohash_get_neighbors($hash);
$r3 = geohash_get_neighbors($hash);
$r4 = geohash_get_neighbors($hash);

$a1 = geohash_get_adjacent($hash, 0);
$a2 = geohash_get_adjacent($hash, 1);
$a3 = geohash_get_adjacent($hash, 2);
$a4 = geohash_get_adjacent($hash, 3);

var_export($r1); echo "\n";
var_export($r2); echo "\n";
var_export($r3); echo "\n";
var_export($r4); echo "\n";
var_export($a1); echo "\n";
var_export($a2); echo "\n";
var_export($a3); echo "\n";
var_export($a4); echo "\n";

?>
--EXPECT--
array (
  'north' => 'xp4ge40',
  'east' => 'xp4ge1c',
  'west' => 'xp4gdcz',
  'south' => 'xp4ge18',
  'north_east' => 'xp4ge41',
  'south_east' => 'xp4ge19',
  'north_west' => 'xp4gdfp',
  'south_west' => 'xp4gdcx',
)
array (
  'north' => 'xp4ge40',
  'east' => 'xp4ge1c',
  'west' => 'xp4gdcz',
  'south' => 'xp4ge18',
  'north_east' => 'xp4ge41',
  'south_east' => 'xp4ge19',
  'north_west' => 'xp4gdfp',
  'south_west' => 'xp4gdcx',
)
array (
  'north' => 'xp4ge40',
  'east' => 'xp4ge1c',
  'west' => 'xp4gdcz',
  'south' => 'xp4ge18',
  'north_east' => 'xp4ge41',
  'south_east' => 'xp4ge19',
  'north_west' => 'xp4gdfp',
  'south_west' => 'xp4gdcx',
)
array (
  'north' => 'xp4ge40',
  'east' => 'xp4ge1c',
  'west' => 'xp4gdcz',
  'south' => 'xp4ge18',
  'north_east' => 'xp4ge41',
  'south_east' => 'xp4ge19',
  'north_west' => 'xp4gdfp',
  'south_west' => 'xp4gdcx',
)
'xp4ge40'
'xp4ge1c'
'xp4gdcz'
'xp4ge18'
