<?php

function location_table_id($lat, $lng)
{
    $longitude_length = 40000 * cos(deg2rad($lat));
    $longitude_number_box = $longitude_length * 0.1;
    $lng_bin = round($longitude_number_box * $lng / 360);
    $latitude_bin = round($lat / 0.0999);
    return $latitude_bin . " - " . $lng_bin;
}

echo location_table_id("41.009458","28.978976")."<br>";