<?php
function outputnumber($a)
{
    echo "引数の値は" . $a . "です";

}

outputnumber(2);
echo "<br />";
echo "<br />";

function text($number1, $number2)
{
    $value = $number1 + $number2 ;
    return $value;
}

$total = text(2,3);
echo $total;
echo "<br />";
echo "<br />";


function gouhihantei($score1,$score2,$score3)
{
    $tscore = $score1 + $score2 + $score3;
    if ($tscore > 210) {
        $hantei = "合計点は" . $tscore . "なので合格です";
    } else {
        $hantei = "合計点は" . $tscore . "なので不合格です";
    }
    return $hantei;
}

$result = gouhihantei(75, 80, 90);
echo $result . "<br />";

$result = gouhihantei(70, 70, 70);
echo $result . "<br />";

echo "<br />";


function square($shape,$under_width,$height,$top_width)
{
    if($shape == "triangle") {
        $result = $under_width * $height / 2 ;
    } elseif($shape == "rectangle") {
        $result = $under_width * $height ;
    } elseif($shape == "daikei") {
        $result = ($under_width + $top_width) * $height /2 ;
    }
    return $result;
}

echo square("triangle" ,10,10,0) . '<br />' ;
echo square("rectangle",10,15,10) . '<br />' ;
echo square("daikei"  , 10,10,5) . '<br />' ;
