<?php
$name = "Mubashir_Ifaz";
$age = 18;
$istrue = True;
$user = NULL;
$user2 = 0;
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($istrue);
echo "<br>";
var_dump($user);
echo "<br>";
var_dump($user2);
echo "<br>";

echo "My name is strtoupper($name)";
echo "<br>";
printf("My name is %s My age is %f", strtoupper($name), $age);
echo "<br>";
$num1 = 2580;
$num2 = 4329;
$num3 = 1972;
$num4 = 5;

echo $num1 + $num2;
echo "<br>";
echo $num1 - $num2;
echo "<br>";
echo $num1 * $num2;
echo "<br>";
echo $num1 / $num2;
echo "<br>";
echo $num1 - $num3 + $num2 * $num4;
echo "<br>";
echo $num1 % $num2;
echo "<br>";
echo $num4**4;
echo "<br>";
echo $num4**-4;
echo "<br>";
$num1 += $num3;
$num2 += 1300;
$num3 -= 1300;
$num4 *= 1300;
$age++;
echo $num1;
echo "<br>";
echo $num2;
echo "<br>";
echo $num3;
echo "<br>";
echo $num4;
echo "<br>";
echo $age;
echo "<br>";

$math = 60;
$phy = 70;
$chem = 80;
$bio = 90;
$hmath = 100;
$result = $math+$phy+$chem+$bio+$hmath;
$name1 = "Mubashir";
echo "$name1 your result is $result <br>";
$math = 60;
$phy = 70;
$chem = 80;
$bio = 90;
$hmath = 100;
$result = $math+$phy+$chem+$bio+$hmath;
$name2 = "Ifaz";
echo "$name2 your result is $result <br>";
function getresult($math, $phy, $chem, $bio, $hmath, $name2){
    $math = $math;
    $phy = $phy;
    $chem = $chem;
    $bio = $bio;
    $hmath = $hmath;
    $result = $math+$phy+$chem+$bio+$hmath;
    $name2 = $name2;
    echo "$name2 your result is $result <br>";
}
getresult(50, 60, 70, 80, 90, "Mubashir");
getresult(50, 60, 70, 80, 90, "Ifaz");

function billsplite($tbill, $person = 1){
    $tbill = $tbill;
    $person = $person;
    $billperperson = $tbill/$person;
    echo "Pre Person Bill is $billperperson <br>";
}
billsplite(5000, 4);
billsplite(5427);

$gress = 'green';
if($gress == 'green'){
    echo "This is true";
}else{
    echo "This is false";
}
echo "<br>";
$age = '18';
if($age === '18'){
    echo "This is true";
}else{
    echo "This is false";
}
echo "<br>";
$age = '18';
if($age != '12'){
    echo "You are not $age";
}else{
    echo "This is true";
}
?>