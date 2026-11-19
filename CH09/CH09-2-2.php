<?php

require "about_me.php";
echo "W11 Ex02<br/>";
echo "";

$file = 'mybooks.txt';
$content = "PHP與MySQL網頁設計範例教本\r\n";

$fp = fopen($file,"w")
or exit("檔案 $file 開啟錯誤<br/>");

if (fwrite($fp, $content) ){
    echo "寫入檔案 $file 成功<br/>";
}else{
    echo "寫入檔案 $file 錯誤<br/>";
}
fclose($fp);