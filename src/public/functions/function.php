<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * @param string $str string to uppercase first letter
 */
function capitalizesFirstLetter(string $str) :string {
    return ucfirst($str);
}

/**
 * @param int $a second integer to sum
 * @param int $b second integer to sum
 * @return int sum of 2 integer
 */
function sum(int $a, int $b) :int {
    if (!is_int($a) || !is_int($b)) {
        echo "Error: argument is not a number.";
        return 0;
    }
    return $a + $b;
}

/**
 * @param string $str string to get acronym
 * @return string acronym of string
 */
function getAcronymOfWords(string $str) :string {
    $arr = explode(" ", $str);
    $acronym = "";
    foreach ($arr as $a) {
        $acronym .= strtoupper(substr($a, 0, 1));
    }
    return $acronym;
}

/**
 * @param string $str string to change ae to æ
 * @return string
 */
function aAndeTAE(string $str) :string {
    return str_replace("ae", "æ", $str);
}

/**
 * @param string $str string to change æ to ae
 * @return string
 */
function AEToaAnde(string $str) :string {
    return str_replace("æ", "ae", $str);
}

/**
 * @param string $message string of message to display
 * @param string $event string of event class default value -> info
 * @return string div element with specific class as event and message inner
 */
function feedback(string $message, string $event = "info") :string {
    return "<div class=" . $event . ">" . $message . "</div>";
}

/**
 * @return string words generate
 */
function generateRandomWords() :string {
    $file = "../../assets/words.txt";
    $fileArr = file($file);
    return $fileArr[randomNum($fileArr)];
}

/**
 * @param array $arr array of words
 * @return int index of words selected in array
 */
function randomNum(array $arr) :int {
    $lastIndex = count($arr) - 1;
    return rand(0, $lastIndex);
}

/**
 * @param string $str string to lowercase
 * @return string string lowercase
 */
function toLowerCase(string $str) :string {
    return strtolower($str);
}

/**
 * @param float $ray rayon of cone
 * @param float $height height of cone
 * @return float volume of cone
 */
function volumeOfCone(float $ray, float $height) :float {
    return round($ray * $ray * pi() * $height * (1 / 3), 2);
}

// first letter capitalizes
echo "<h3>First letter capitalizes</h3>";
$str = "hello World!";
echo "<p>" . capitalizesFirstLetter($str) . "</p>";

// display current year
echo "<h3>Current year</h3>";
echo "<p>" . date("Y") . "</p>";

echo "<h3>Current date and time</h3>";
echo "<p>" . date("d/H/Y h:m:s") . "</p>";

// sum function
echo "<h3>Sum function</h3>";
if (!empty($_POST)) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    echo $a . " + " . $b . " = ( sum($a, $b) ) => " . sum($a, $b);
} else { ?>
    <form action="#" method="post">
        <input type="text" value="0" min="0" max="20" name="a">
        <input type="text" value="20" min="0" max="20" name="b">
        <button type="submit">Send</button>
    </form>
<?php }

echo "<h3>Acronym of string</h3>";
$str = "hello World!";
echo "<p>" . $str . " -> " . getAcronymOfWords($str) . "</p>";

echo "<h3>ae to æ</h3>";
$str = "caecotrophie";
echo "<p>" . $str . " -> " . aAndeTAE($str) . "</p>";

echo "<h3>æ to ae</h3>";
$str = "cæcotrophie";
echo "<p>" . $str . " -> " . AEToaAnde($str) . "</p>";

echo "<h3>Specific class and message on div</h3>";
echo feedback("Incorrect email address", "error");
echo feedback("Your email as been send!");

echo "<h3>Generate a new word</h3>";
echo generateRandomWords() . ", ";
echo generateRandomWords();

if (isset($_GET['id'])) {
    echo "<form action=''>";
} else {
    echo "<form action='?id=10'>";
}
?>
<button type="submit">Generate</button>
</form>
<?php

echo "<h3>To lowercase</h3>";
echo toLowerCase("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

echo "<h3>Calc ray of cone</h3>";
$ray = array(5, 3);
$height = array(5, 3);

echo "<p>The volume of a cone wich ray is " . $ray[0] . " and height is " . $height[0] . " = " . volumeOfCone($ray[0], $height[0]) . "</p>";
echo "<p>The volume of a cone wich ray is " . $ray[1] . " and height is " . $height[1] . " = " . volumeOfCone($ray[1], $height[1]) . "</p>";
