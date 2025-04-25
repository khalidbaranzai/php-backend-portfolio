<?php
// CONDITIONALS
$marks = 75;


echo "Marks: $marks<br>";
if ($marks >= 90) {
    echo "Grade: A+<br>";
} elseif ($marks >= 80) {
    echo "Grade: A<br>";
} elseif ($marks >= 70) {
    echo "Grade: B<br>";
} else {
    echo "Grade: C or below<br>";
}

echo "<br>";

// SWITCH STATEMENT
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week 😴<br>";
        break;
    case "Friday":
        echo "Almost weekend! 😎<br>";
        break;
    default:
        echo "Just another day...<br>";
}

echo "<br>";

// FOR LOOP
echo "Even numbers from 1 to 10:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}
echo "<br><br>";

// WHILE LOOP
echo "Countdown from 5:<br>";
$counter = 5;
while ($counter > 0) {
    echo "$counter ";
    $counter--;
}
echo "<br><br>";

// FOREACH LOOP
$fruits = ["🍎 Apple", "🍌 Banana", "🍊 Orange"];
echo "Fruit List:<br>";
foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}

echo "<br>";


if (isset($_GET['submit'])) {
    $mul_num = $_GET['number'];
    for ($i = 1; $i <= 10; $i++) {
        echo "$mul_num x $i = " . ($mul_num * $i) . "<br>";
    }
}



$numbers = [10, 20, 30, 50];

foreach ($numbers as $number) {
    echo "$number <br>";
}

?>


<html>
    <form action="">
        <label for="">Insert number to get Multiplication</label>
        <input type="number" name="number" id="number" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</html>