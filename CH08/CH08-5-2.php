<?php 
include "about_me.php";
echo "W08-EX04<br/>";

if(isset($_COOKIE["ItemName"])) {
    $ItemName = $_COOKIE["ItemName"];
    $quantity = $_COOKIE["Quantity"];

    echo "取得ItemName的Cookie值: " . $ItemName . "<br/>";
    echo "取得Quantity的Cookie值: " . $quantity . "<br/>";

    setcookie("ItemName","", time() - 3600);
    setcookie("Quantity","", time() - 3600);
}else{
   $ItemName = "while iphone";
   $quantity = "10";

   $date = strtotime("+10 days" ,  time());

   setcookie("ItemName", $ItemName, $date);
   setcookie("Quantity", $quantity, $date);

   echo "新增名為ItemName的Cookie: " . $ItemName . "<br/>";
   echo "新增名為Quantity的Cookie: " . $quantity . "<br/>";
   echo "Cookie期限:" . date("1 f j Y h:i:s A", $date);
}

?>

<BR>
<a href ='CH08-5-1.php'>Receive Cookies</a>