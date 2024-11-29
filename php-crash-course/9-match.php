<?php 

$status = 404;

$message = match ($status) {
    200, 300 => 'Success',
    400, 404, 500 => 'Error',
    default => 'Unknown status'
};
// match is like switch statement, but without break
// match uses strict comparison

echo $message . "\n";
