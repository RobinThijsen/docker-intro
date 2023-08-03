<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$me = array(
    "firstname" => "Robin",
    "lastname" => "Thijsen",
    "age" => 22,
    "hungry" => false,
    "favSeason" => "summer",
    "favSports" => array(
        "volley", "tennis", "hockey"
    )
);

$web_development = array(
    "frontend" => array(),
    "backend" => array()
);
$web_development['frontend'][] = "xhtml";
$web_development['backend'][] = "Ruby on Rails";
$web_development['frontend'][] = "CSS";
$web_development['backend'][] = "Flash";
$web_development['frontend'][] = "JavaScript";
$web_development['frontend'][0] = "html";
$web_development['backend'][4] = "";

?>
<ul style="line-height: 1.8rem;">
    <?php
        extract($me);
        echo "<li>My name is " . $firstname . " " . $lastname . ".</li>";
        echo "<li>I am " . $age . " years old.</li>";
        if ($hungry) echo "<li>I am hungry.</li>";
        else echo "<li>I am not hungry.</li>";
        echo "<li>My favorite season is " . $favSeason . ".</li>";
        echo "<li>My favorites sports are: </li><ul>";
        for ($i = 0; $i < count($favSports); $i++) {
            echo "<li>" . $favSports[$i] . "</li>";
        }
        echo "</ul>";
    ?>
</ul>

