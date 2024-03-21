<?php
$name =htmlspecialchars($_POST['my_name'], ENT_QUOTES);
echo "私の名前は".$name."です";
echo "<br>";

$set=htmlspecialchars($_POST['set'], ENT_QUOTES);
echo $set . "セットですね";
echo "<br>";


$order=htmlspecialchars($_POST['order'], ENT_QUOTES);
echo "ご注文数は".$order;
echo "<br>";
