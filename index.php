<?php

include 'vendor/autoload.php';

use Carbon\Carbon;

$carbon = new Carbon();                  // equivalent to Carbon::now()
$carbon = new Carbon('first day of January 2008', 'America/Vancouver');
echo get_class($carbon);                 // 'Carbon\Carbon'
$carbon = Carbon::now(-5);

$now = Carbon::now();

$nowInLondonTz = Carbon::now(new DateTimeZone('Europe/London'));

// or just pass the timezone as a string
$nowInLondonTz = Carbon::now('Europe/London');

// or to create a date with a timezone of +1 to GMT during DST then just pass an integer
echo Carbon::now(1)->tzName;             // Europe/London


echo (new Carbon('first day of December 2008'))->addWeeks(2);     // 2008-12-15 00:00:00
echo Carbon::parse('first day of December 2008')->addWeeks(2);    // 2008-12-15 00:00:00