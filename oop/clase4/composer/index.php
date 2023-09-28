<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

$today = Carbon::today();

echo '<pre>';
$newDate = $today->subDays(3);
var_dump($today->dayName);
