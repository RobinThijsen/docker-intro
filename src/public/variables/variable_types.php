<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = "Robin";
$age = 22;
$colorEyes = "blue";
$family = array(
    "Andre",
    "Pascale",
    "Maxence",
    "Robin"
);
$hungry = false;

echo "<p>Hi! my name is " . $name . ".</p>";
echo "<p>I am " . $age . " years old.</p>";
echo "<p>My eyes are " . $colorEyes . ".</p>";
echo "<p>The first person in my family is " . $family[0] . ".</p>";
