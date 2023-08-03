<?php
$iteration = 57;
$pronouns = array('I', 'You', 'He/She','We', 'You', 'They');
$names = array(
    "Jérôme",
    "Adeline",
    "Camille",
    "Cedric",
    "Ilias",
    "Jason",
    "Manon",
    "Nathan",
    "Marius",
    "Pauline",
    "Rui",
    "Sam",
    "Steeve",
    "Tim",
    "Youssef",
    "Corentin",
    "Sarah",
    "Clara",
    "Lucie",
    "Abdoulaye",
    "Nicolas",
    "Pietro",
    "Robin"
);
$countries = array(
    "none" => "Select a Country",
    "AL" => "Albania",
    "AD" => "Andorra",
    "AM" => "Armenia",
    "AT" => "Austria",
    "AZ" => "Azerbaijan",
    "BY" => "Belarus",
    "BE" => "Belgium",
    "BA" => "Bosnia and Herzegovina",
    "BG" => "Bulgaria",
    "HR" => "Croatia",
    "CY" => "Cyprus",
    "CZ" => "Czechia",
    "DK" => "Denmark",
    "EE" => "Estonia",
    "FI" => "Finland",
    "FR" => "France",
    "GE" => "Geoorgia",
    "DE" => "Germany",
    "GR" => "Greece",
    "HU" => "Hungary",
    "IS" => "Iceland",
    "IE" => "Ireland",
    "IT" => "Italy",
    "KZ" => "Kazakhstan",
    "LV" => "Latvia",
    "LI" => "Liechtenstein",
    "LT" => "Lithuania",
    "LU" => "Luxembourg",
    "MT" => "Malta",
    "MD" => "Moldova",
    "MC" => "Monaco",
    "ME" => "Montenegro",
    "NL" => "Netherlands",
    "MK" => "North Macedonia",
    "NO" => "Norway",
    "PL" => "Poland",
    "PT" => "Portugal",
    "RO" => "Romania",
    "RU" => "Russia",
    "SM" => "San Marino",
    "RS" => "Serbia",
    "SK" => "Slovakia",
    "SI" => "Slovenia",
    "ES" => "Spain",
    "SE" => "Sweden",
    "CH" => "Switzerland",
    "TR" => "Turkey",
    "UA" => "Ukraine",
    "UK" => "United Kingdom",
    "VA" => "Vatican City"
);

/*
// print wash plate 57 times
for ($i = 1; $i <= $iteration; $i++) {
    wash_plate($i);
}
*/

// print pronouns
echo "<h3>Exo: pronouns</h3><ul>";
foreach($pronouns as $pronoun) {
    echo "<li>" . $pronoun . " code</li>";
}

// print while loop 1 -> 120
echo "</ul><h3>Exo: 120 loops</h3><p>";
$i = 1;
while ($i <= 120) {
    echo $i;
    if ($i != 120) echo ", ";
    else echo "</p>";
    $i++;
}

// print for loop 1 -> 120
echo "<p>";
for ($j = 1; $j <= 120; $j++) {
    echo $j;
    if ($j != 120) echo ", ";
    else echo "</p>";
}

// Print member in startup
echo "In my startup there are ";
$i = 0;
foreach ($names as $name) {
    if ($i == count($names) - 1) echo $name;
    else echo $name . ", ";
    $i++;
}
?>
<select>
    <?php foreach ($countries as $k => $v) {
        echo "<option value=" . $k . ">" . $v . "</option>";
    } ?>
</select>

<?php
function wash_plate($i) :void {
    echo $i . ": I finished washing this plate!<br/>";
}