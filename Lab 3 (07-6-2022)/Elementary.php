<?php
// Problem Set //



// Problem 1  // 
echo "<h1>Problem 1:</h1>";

$length = 10;
$width = 5;
$rectangle = $length * $width;

echo "Rectangle = $rectangle <br>";
$perimeter = 2 * ($length + $width);
echo "Perimeter = $perimeter <br><br>";


// Problem 2 //
echo "<h1>Problem 2:</h1>";


$amount = 100;
$VAT = $amount * .15;

echo "VAT is: $VAT";

// Problem 3 //
echo "<h1>Problem 3:</h1>";

$number = 99;
if (($number % 2) == 0)
{
    echo "Number is Even.";
}
else
{
    echo "Number is Odd.";
}


// Problem 4 //
echo "<h1>Problem 4:</h1>";

$numbers = [10, 40, 30];
$temp = 0;
$i = 0;


foreach ($numbers as $number)
{
    if ($number > $temp)
    {
        $temp = $number;
    }
}

echo "Largest number is: $temp";

// Problem 5 //
echo "<h1>Problem 5:</h1>";

for ($i = 10; $i<100; $i++)
{
    if ($i % 2 != 0)
    {
        echo "$i<br>";
    }
}

// Problem 6 //
echo "<h1>Problem 6:</h1>";

$seachValue = 2;
$numbers = [1, 2, 3];
$flag = false;

foreach($numbers as $number)
{
    if ($number == $seachValue)
    {
        echo "Found! Value is: ".$seachValue;
        $flag = true;
    }
}

if ($flag != true)
{
    echo "Value Not Found!";
}

// Problem 7 //
echo "<h1>Problem 7:</h1>";


$x = 3;
$y = 3;

for ($i = 0; $i < $x; $i++)
{
    for ($j = 0; $j < $y; $j++)
    {
        echo " * ";
    }
    $y -= 1;
    echo "<br>";
}

echo "<br><br>";

$x = 3;
$y = 3;
$z = 0;

for ($i = 0; $i < $x; $i++)
{
    for ($j = 0; $j < $y; $j++)
    {
        $z = $j + 1;
        echo " $z ";
    }
    $y -= 1;
    echo "<br>";
}

echo "<br><br>";

$x = 3;
$y = 3;
$z = 'A';

for ($i = 0; $i < $x; $i++)
{
    for ($j = 0; $j <= $i; $j++)
    {
        echo " $z ";
        $z++;
    }
    $y -= 1;
    echo "<br>";
}





// Problem 8//
echo "<h1>Problem 8:</h1>";

$x = 3;
$y = 4;

$a = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

$z = 3;

for ($i = 0; $i < $x; $i++)
{
    for ($j = 0; $j < $y; $j++)
    {
        if ($z == $j)
        {
            echo " .  . ";
            $z--;
        }
        echo " ".$a[$i][$j]." ";

    }

    echo "<br>";
} 



?>