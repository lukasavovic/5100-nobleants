<?php

$girlfriends = ['Monica', 'Jenny', 'Rachael'];
$wardrobe = array('Shirt', 'Skirt', 'Hat');

$food = [];
// echo $wardrobe[2];

$food[7] = "Carrot";

$girlfriends[0]= 'Sarah';
//$girlfriends[2] = null;
unset($girlfriends[2]); // to completely delete the variable or an element from the array use unset()
$name = "Luka";
//dd($name[0]);
//sarah, jenny, rachael
//sarah, anne, marry

array_splice($girlfriends,-2, -1, ['Anne', 'Marry']);
$girlfriends = array_reverse($girlfriends, true);

//dd($girlfriends);

// echo "<pre>";
// print_r( $wardrobe );
// echo "</pre>";
echo "The amount of wardrobe items is " . count($wardrobe);
//dd(count($wardrobe));
echo "<br>";
$no_of_el = array_push($wardrobe, "Shoes", 'Pants');
echo "The amount of wardrobe items is {$no_of_el}";
$el = array_pop($wardrobe);
echo "The element {$el} was deleted from the wardrobe";
array_unshift($wardrobe, 'Belt');
array_shift($wardrobe);



//dd($wardrobe);

//$user = ['John', 'Smith', 30];

$user = [
  'name' => 'Josh',
  'lastname' => 'Smith',
  'age' => 30,
  'girlfriend' => $girlfriends[0]
];
//dd($user['girlfriend']);
array_reverse($user);


$user['email'] = "blah@lkasdlk.com";

$user['medical_data'] = [
  'blood_pressure' => 80,
  'pulse' => 70,
];

// dd( $user['medical_data']['pulse'] );
echo "<br><br>";

$wardrobe_cap = array_map(function($el) {
    return strtoupper($el);
}, $wardrobe);

$wardrobe_filter = array_filter($wardrobe, function ($el){
    if($el[0] == "S") {
        return $el;
    }
});

$exists = in_array('Hat', $wardrobe_filter);

//implode(",", $wardrobe);
// Sally Whittaker,2018,McCarren House,312,3.75
$data = explode(" ", "Sally Whittaker,2018,McCarren House,312,3.75");

$sentence  = "Marry had a little lamb";

$sentence = explode(" ", $sentence);
$sentence = array_reverse($sentence);
$sentence = implode(" ", $sentence);

$property= "age";
dd( $user[$property] );
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die;
}