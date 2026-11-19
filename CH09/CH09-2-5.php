<?php
$file = 'mybooks.txt';
if (file_exists($file)) {
    $lines = file($file);
    foreach ($lines as $line_num => $line) {
        echo "$line_num : ". $line . "<br>";
    }
} else 
    print "檔案 $file 不存在<br/>";
    ?>