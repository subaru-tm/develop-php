<?php

for ($i = 2; $i <= 10; $i += 2) {
    echo $i;
    echo "<br />";
}
echo "<br />";

$count = 0;

while ($count < 20) {
    ++$count;
    echo $count."<br />"; 
}
echo "<br />";


$count = 0;

while ($count <= 100) {
    if ($count == 20){
        break;
    } elseif (($count % 3) == 0) {
        ++$count;
        continue;
    }
    echo $count."<br />";
    ++$count;
}
echo "<br />";

$num = 0;
do {
    echo "num = ".$num."<br />";
    $num++;
} while ($num < 3);
echo "<br />";


for ($number = 1; $number <= 50; $number++) {
    if ($number % 3 === 0) {
        echo "Fizz";
    }
    if ($number % 5 === 0) {
        echo "Buzz";
    }
    if (($number % 3 <> 0) && ($number % 5) <> 0) {
        echo $number;
    }
    echo "<br />";
}
echo "<br />";


for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "●";
    }
    echo "<br />";
}
