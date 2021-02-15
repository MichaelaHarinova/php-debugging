<?php
declare(strict_types=1);

// === Exercise 1 ===
function new_exercise() {
    $block = "<br/><hr/><br/><br/>Exercise starts here:<br/>";
    echo $block;

} new_exercise();


// === Exercise 2 ===
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday. '<br/>';


// === Exercise 3 ===
$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10).'<br/>';


// === Exercise 4 ===
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);

}
echo print_r($week, true).'<br/>';


// === Exercise 5 ==
$arr = [];
for ($letter = ord('a'); $letter <= ord('z'); $letter++) {
    array_push($arr, chr($letter));
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

