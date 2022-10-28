<!DOCTYPE html>
<html>
<body>
<?php 
$a = "Hello Developer World!<br>PHP Data Types";
$b = 'Variables can store data of different types, and different data types can do different things.
<br>PHP supports the following data types:<br><ol><li>String</li><li>Integer</li><li>Float (floating point numbers - also called double)</li>
<li>Boolean</li><li>Array</li><li>Object</li><li>NULL</li><li>Resource</li></ol>';
echo "<h1>$a</h1>";
echo $b;

$c = "PHP String";
$d = "A string is a sequence of characters, like Hello world!<br>
A string can be any text inside quotes. You can use single or double quotes!";
echo "<h2>$c</h2>"; 
echo $d;

$e = "PHP Integer";
$f = "An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.<br>Rules for integers:
    <ol><li>An integer must have at least one digit</li>
    <li>An integer must not have a decimal point</li>
    <li>An integer can be either positive or negative</li>
    <li>Integers can be specified in: decimal (base 10),hexadecimal (base 16), octal (base 8), 
    or binary (base 2) notation</li>Example<br>";
$g = 5985;
echo "<h2>$e</h2>"; 
echo $f; 
var_dump($g);

$h = "PHP Float";
$i = "A float (floating point number) is a number with a decimal point or a number in exponential form.
<br>Example<br>";
$j = 10.365;
$k = 349.42;
echo "<h2>$h</h2>"; 
echo $i;
var_dump($j*$k);
echo "<br>";

echo "<h2>PHP Concatenation</h2>";
$l = "Mubashir Ifaz";
$m = "Web Design & Developer";
$n = "Impossible";
$o = "I M Possible";
echo "Hello! My self $l. I'm a $m. <br>Life is hard, So you have to be tough.<br>
When anybody tells me your $n, I say $o.";

$p = "PHP Constants";
define("Hello", "Hello World!");
define("GREETING", "Greeting new Developer.");
echo "<h2>$p</h2>";
echo Hello;
echo "<br>";
echo GREETING;
?>
</body>
</html>