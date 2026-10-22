<?php
include "about_me.php";
echo "EX03<br/>";
$arr = array(
    "color" => "Black",
    "name"=> "Daily",
    "Shape"=> "Triangle",
    100
);
$arr["type"] = "PHP";
unset($arr["type"]);

foreach ($arr as $key => $value) {
    echo "Key=>$value ";
}
echo "<br/>";
print_r($arr);