<?php
$name = "Mubashir Ifaz";
echo htmlentities($name);
echo "<br>";
echo html_entity_decode("Welcome to my program");
echo "<br>";
$para = "I love my work." . "<br>";
echo str_repeat($para,2);
if(empty($name)){
    echo "plz input any alphabate";
}else{
    echo "well done";
}
echo "<br>";
$fist = "Mubashir";
$second = null;
var_dump(isset($fist));
echo "<br>";
var_dump(isset($second));
echo "<br>";
$parag ="I'm a part time freelance & a full time teacher";
print_r(explode(" ",$parag));
echo "<br>";
$file_format = "index.jpg.png.ai.psd.html.php";
$array_file = explode(".",$file_format);
if(end($array_file) == "html" ){
    echo "well";
}else{
    echo "select html extention format";
}
$student = [
    [
   "name" => "Ifaz",
    "roll" => 174087
    ],
    [
        "name" => "Mubashir",
         "roll" => 174099
    ],
    [
        "name" => "Abdullah",
         "roll" => 174089
    ],
    [
        "name" => "Ali",
         "roll" => 174033
         ]

];

echo "<br>";
if(count($student) > 3 ){
    echo "Sorry";
}else{
    echo "wellcome";
}
$names = [
    "Mubashir",
    "Ifaz",
];
echo "<pre>";
print_r($names);
echo "</pre>";
array_push($names,"Abdullah","Ali");
echo "<pre>";
print_r($names);
echo "</pre>";
array_pop($names);
echo "<pre>";
print_r($names);
echo "</pre>";
array_unshift($names,"Ali","Muhammad");
echo "<pre>";
print_r($names);
echo "</pre>";
array_shift($names);
echo "<pre>";
print_r($names);
echo "</pre>";