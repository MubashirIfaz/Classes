<?php
function getGreaterNo($num1, $num2, $num3, $num4)
{
    $num1 = $num1;
    $num2 = $num2;
    $num3 = $num3;
    $num4 = $num4;
    echo "$num1</br>$num2</br>$num3</br>$num4 ";
    echo "</br>";
    if ($num1 > $num2 && $num1 > $num3 && $num1 > $num4) {
        echo " $num1 is the Greatter Number";
    } elseif ($num2 > $num1 && $num2 > $num3 && $num2 > $num4) {
        echo "$num2 is the Greatter Number";
    } elseif ($num3 > $num1 && $num3 > $num2 && $num3 > $num4) {
        echo "$num3 is the Greatter Number";
    } else {
        echo "$num4 is the Greatter Number";
    }
}
getGreaterNo(38965498, 12394, 129348, 12394);
echo "<br>";
getGreaterNo(88439, 3459598, 4359954, 249552);
echo "<br>";
echo "<br>";
$username = "Mubashir";
$pass = "Ifaz";
if ($username == "Mubashir") {
    if ($pass == "Ifaz") {
        echo "Welcome $username";
    } else {
        echo "Incorrect pass";
    }
} else {
    echo "$username is incorrect";
}
echo "<br>";
$username = "Mubashir";
$pass = "nsdkjcnsdnjc";
if ($username == "Mubashir") {
    if ($pass == "Ifaz") {
        echo "Welcome $username";
    } else {
        echo "Incorrect pass";
    }
} else {
    echo "$username is incorrect";
}
echo '<br>';
$username = "knkjnks4894";
$pass = "Ifaz";
if ($username == "Mubashir") {
    if ($pass == "Ifaz") {
        echo "Welcome $username";
    } else {
        echo "incorrect pass";
    }
} else {
    echo "$username is incorrect";
}
echo '<br>';
echo '<br>';
function getEvenOrOdd($num)
{
    $num = $num;
    if ($num > 0) {
        echo "$num is Positive";
        if ($num % 2 == 0) {

            echo " & it's an even number";
        } else {
            echo " & it's an odd Number";
        }
    } elseif ($num < 0) {
        echo "$num is Negative Number";
    } else {
        echo "$num is Nutral Number";
    }
}
getEvenOrOdd(9854);
echo '<br>';
getEvenOrOdd(-983985);
echo '<br>';
getEvenOrOdd(0);
echo '<br>';
getEvenOrOdd(8745);
echo '<br>';
echo '<br>';
$name = "Mubashir";
if (ctype_alpha($name) == 1) {
    echo "Welcome $name";
} else {
    echo "invalid name";
}
echo '<br>';
$age = "Ifaz";
if (is_numeric($age) == 1) {
    echo "Welcome $name";
} else {
    echo "invalid age";
}
echo "<h2>Loan System & callback function </h2>";
function paypermonth($ammount, $interest, $year = 1)
{
    $ammount = $ammount;
    $year = $year;
    $interest = $interest;
    
    $totalInterest = ($interest/100) * $year;
    $totalInterestmoney = $totalInterest * $ammount;
    $totalPayableAmmount = $ammount + $totalInterestmoney;
    $perMonth = $totalPayableAmmount / ($year*12);
    echo "You have to pay per month is " .round($perMonth);
}
function eligability($Income, $Cost, $perMonth)
{
    $Income = $Income;
    $Cost = $Cost;
    $saving = $Income - $Cost;

    if ($saving > $perMonth) {
        echo " You Are Eligable For Loan.";
    } else {
        echo " You Are not Eligable For Loan.";
    }
}
eligability(298534324, 2384923, paypermonth(23498234, 100));
$user = ["Mubashir Ifaz", 27, 'Web design', 'Web developer'];
echo "<pre>";
var_dump($user);
print_r($user);
echo "</pre>";