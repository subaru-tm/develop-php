<?php
$a = 7;

if ($a === 5) {
    echo "\$aは5です";
} elseif ($a === 7) {
    echo "\$aは7です";
}
echo "<br />";
echo "<br />";


$people = "Saburo";
switch ($people) {
    case "Ichiro":
        echo "一郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
}

echo "<br />";
echo "<br />";

$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;
echo "<br />";