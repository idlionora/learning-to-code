<?php

$largeArray = range(1, 1_000_000); // generate big array with values
$startTime = microtime(true);
$startMemory = memory_get_usage();

$out = [];

foreach ($largeArray as &$value) {
    $out[] = $value * 2; // add new element in php the simplest way
}
// using reference let you directly modify your values 
// but doubles the time and nearly triple the memory usage

$endTime = microtime(true);
$endMemory = memory_get_usage();

echo "Time: " . ($endTime - $startTime) . "seconds\n";
echo "Memory: " . round (($endMemory - $startMemory) / 1024 / 1024) . "MBs\n";