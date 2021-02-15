<?php
declare(strict_types=1);

// === Exercise 1 ===
function new_exercise() {
    $block = "<br/><hr/><br/><br/>Exercise starts here:<br/>";
    echo $block;

} new_exercise();




new_exercise(2);
// === Exercise 2 ===
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday. '<br/>';





new_exercise(3);
// === Exercise 3 ===
$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10).'<br/>';






new_exercise(4);
// === Exercise 4 ===
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);

}
echo print_r($week, true).'<br/>';





new_exercise(5);
// === Exercise 5 ==
$arr = [];
for ($letter = ord('a'); $letter <= ord('z'); $letter++) {
    array_push($arr, chr($letter));
}

echo print_r($arr,true) ."<br/>"; // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array




new_exercise(6);
// === Exercise 6 ===
$arr = [];
function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
   return implode(" - ", $params);
}

function randomGenerate(&$arr,$amount) {

    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)];

    return $randname;
}
randomGenerate($arr,2);
echo "Here is the name: " . combineNames($arr[0],$arr[1]) . "<br/>";





new_exercise(7);
// === Exercise 7 ===
function copyright(string $year ) {
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y',)) . "<br/>";



new_exercise(8);
// === Exercise 8 ===
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    }else{
        return 'No access';
    }
}


//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas')."<br/>";
//no access
echo login('john@example.be', 'dfgidfgdfg')."<br/>";
//no access
echo login('wrong@example.be', 'wrong')."<br/>";
//you can change things again!



new_exercise(9);
// === Exercise 9 ===
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br/>';
        }
    }
    return 'Acceptable<br/>';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf')."<br/>";
//invalid link
echo isLinkValid('https://google.com')."<br/>";
//VALID link
echo isLinkValid('http://google.com')."<br/>";
//VALID link
echo isLinkValid('http://google.com/test.txt')."<br/>";



new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
$numberOfItems = count($areTheseFruits);
for($i=0; $i < $numberOfItems; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this







