<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$temp = 10;
if ($temp < 15) {
    echo "Temp is lower than 15 degres!";
} else {
    echo "Temp is higher than 15 degres!";
}