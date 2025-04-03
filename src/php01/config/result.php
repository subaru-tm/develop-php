<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$req_item = htmlspecialchars($_POST['req_item'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $name . '<br />';
print "ご希望商品は、" . $req_item  . '<br />';
print "注文数は、" . $number . '<br />';