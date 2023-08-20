<?php
function checkSumOrValue($num1, $num2) {
    return ($num1 === 50 || $num2 === 50 || $num1 + $num2 === 50);
}

$num1 = 25;
$num2 = 30;

if (checkSumOrValue($num1, $num2)) {
    echo "True";
} else {
    echo "False";
}
?>
   
   <?php
function checkPositiveAndNegative($num1, $num2) {
    return ($num1 > 0 && $num2 < 0) || ($num1 < 0 && $num2 > 0);
}

$num1 = 10;
$num2 = -5;

if (checkPositiveAndNegative($num1, $num2)) {
    echo "One integer is positive and the other is negative.";
} else {
    echo "Both integers have the same sign or are zero.";
}
?>
  
  <?php
function checkMultiples($number) {
    return ($number % 5 === 0) || ($number % 8 === 0);
}

$number = 40;

if (checkMultiples($number)) {
    echo "$number is a multiple of 5 or 8.";
} else {
    echo "$number is not a multiple of 5 or 8.";
}
?>
 
 <?php
$rows = 8;
$columns = 8;

echo '<table border="1">';
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $columns; $j++) {
        if (($i + $j) % 2 == 0) {
            echo '<td style="background-color: black; width: 30px; height: 30px;"></td>';
        } else {
            echo '<td style="background-color: white; width: 30px; height: 30px;"></td>';
        }
    }
    echo '</tr>';
}
echo '</table>';
?>
