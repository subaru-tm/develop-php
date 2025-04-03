<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo "<br />";
echo "<br />";

echo $people[0] . '<br />';
echo $people[1] . '<br />';
echo $people[2] . '<br />';

echo "<br />";
echo "<br />";

$peoplep = [
    'person1' => 'taro',
    'person2' => 'jiro',
    'person3' => 'saburo',
];
echo $peoplep;
echo "<br />";
var_dump($peoplep);
echo "<br />";
echo $peoplep['person1'];

echo "<br />";
echo "<br />";

foreach ($peoplep as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
}
echo "<br />";
echo "<br />";

$peoplepp = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'women']
];

foreach($peoplepp as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}