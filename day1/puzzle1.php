<?php

$input_file = 'day1_1.csv';
$fh = fopen($input_file, 'r');

$sum_calibration_value = 0;

while (($line = fgetcsv($fh)) !== FALSE) {
    $current_calibration_value = "";
    preg_match('/\d+/', $line[0],$matches);
    $current_calibration_value .= substr(current($matches), 0, 1);
    preg_match('/\d+/', strrev($line[0]) ,$matches);
    $current_calibration_value .= substr(current($matches), 0, 1);

    $sum_calibration_value += (int)$current_calibration_value;
}

echo $sum_calibration_value;
