<?php
$nota = 10;
$tekst = " my grade";

if ($nota > strlen($tekst)) {
    echo "$tekst is bigger than the length of '$nota'";
} else {
    echo "The length of '$tekst' is bigger than or equal to $nota";
}

echo "<hr>";

$age = 18;

if ($age >= 18) {
    echo "You are old enough to vote";
} else {
    echo "You are not old enough to vote";
}
echo "<hr>";


$a = 5;
$b = 60;


if ($a == $b) {
    echo "$a is equal to $b";
} elseif ($a > $b) {
    echo "$a is bigger than $b";
} else {
    echo "$a is smaller than $b";
}
echo "<hr>";

$age = isset($_GET['age']) ? (int)$_GET['age'] : 20; 

?>
<form method="get" action="">
    <label for="age">Enter your age: </label>
    <input type="number" name="age" id="age" value="<?php echo $age; ?>" min="0" max="120">
    <button type="submit">Check Age</button>
</form>

<?php
if (isset($_GET['age'])) {
    echo "<p>";
    switch (true) {
        case ($age >= 25):
            echo "You are old enough to rent a car";
            break;
        case ($age >= 20):
            echo "You are the right age";
            break;
        case ($age >= 18):
            echo "You are old enough to vote";
            break;
        default:
            echo "You are not old enough for any of the above";
            break;
    }
    echo "</p>";
}
echo "<hr>";


$x = 5;
while ($x < 10) {
    echo "x is now: $x  <hr>";
    $x++;
}


$z = 5;
do {
    echo "z is now: $z  <hr>";
    $z++;
} while ($z < 100);

?>