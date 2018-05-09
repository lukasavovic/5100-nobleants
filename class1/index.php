<?php

// thi is single line comment
//echo 'Here I am'; // here

$name = "Aleksandra";
$first_name = 'Aleksandra';

// echo "hello $name! How are you $day";

$age = 20;
// $age = $age + 5;

$age += 5;

$message = "Hello ";
$message .= " world ";
$message .= " it ";
$message .= " a ";
$message .= " beatufiul ";
$message .= " day!";

dd($message);

$height = 175.5;
$female = true;

$cars = array('mazda', 'honda', 'toyota');
$cars2 = ['mazda', 'honda', 'toyota'];
$day = "mon";

$age = (string) $age;
//dd($age);

define('TAX', $cars);

dd(TAX);


if(isset($day)) {
    if ($day == "mon") {
        echo "It is Monday";
    }

}
function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die;
}

/*
This is multiline comment
Bla
*/

/**
 * This function gets the name of the user
 * @lastname String
 * @return String
 */

//
//dd($cars);
//dd($cars);







