<?php
echo "<h4>SCOPE</h4>";
echo "Eid Salaami"; echo '<br>';
function salami($tk){
    static $salami = 34875;
    $salami += $tk;
    echo $salami. '<br>';
}
salami(0);
salami(6543);
salami(12345);
salami(985);
salami(234);
echo "<h4>GLOBAL</h4>";
$usre = [
    "user_name" => "Mubashir Ifaz",
    "Phone" => [
        "Whats app" => "+8801876666779",
        "Hotline" => "+8801644244369",
    ], 
    "email" => [
        "Business" => "aamifaz1996@gmail.com",
        "Normal" => "mubashirctg1996@gmail.com"
    ],
    "social_media" => [
        'Facebook' => "Mubashir_Ifaz",
        "Instragram" => "Mubashir_Ifaz",
        "twtter" => "Mubashir_Ifaz",
    ],
];
echo "<pre>";
print_r($usre);
print_r($usre['Phone']['Whats app']);
echo "</pre>";
echo "<h4>String Function</h4>";
echo "strtoupper & strtolower" . "<br>";
$name = 'Mubashir Ifaz';
echo strtoupper($name) . "<br>";
echo strtolower($name) . "<br>";
echo 'ucwords'. "<br>";
printf("Welcome %s", ucwords($name));
echo "<br>";
echo 'strrev & str_shuffle'. "<br>";
echo str_shuffle(strrev($name)) . "<br>";
function guessword($word){
    global $name;
    if($name == $word){
        echo "You have won the task" . "<br>";
    }else{
        echo "You have lose the task. Try again.";
    }
}
guessword("Mubashir Ifaz");
guessword("ljsevkes");
echo "strpos" . "<br>";
var_dump(strpos($name, 'hjnscjhn')) . "<br>";
var_dump(stripos($name, 'ifaz'));
echo "<br>";
$cmt = 'Life is hard
So you have to be tough.
When anybody tells me your Impossible
Then I say "I M Possible"';
echo substr($cmt, 0, 110) . '.....';
echo "<br>";
$badword = [
    'bad',
    'not good',
    'fu**',
    'as* ho**',
    'faw',
    'f*ck you',
    'shit',
    'piss off',
    'dick head',
    'son of a b*tch'
];
$goodwords = [
    'joss',
    'osthir',
    'acceptable',
    'excellent',
    'exceptional',
    'favorable',
    'great',
    'marvelous',
    'positive',
    'satisfactory'
];
$review = 'Your product is very bad. Your service is dick head.';
echo str_replace($badword, $goodwords, $review);
echo "<br>";
$pass="Mubashir_Ifaz";
echo md5($pass);echo"<br>";
echo sha1($pass);echo"<br>";
echo password_hash($pass,PASSWORD_BCRYPT);echo"<br>";
var_dump( password_verify("Mubashir_Ifaz",password_hash($pass,PASSWORD_BCRYPT)));echo"<br>";
$verify=password_hash($pass,PASSWORD_BCRYPT);
var_dump(password_verify("Ifaz",$verify));
echo "<br>";
$name = 'Abdullah Al Mubashir Ifaz';
echo str_word_count($name);