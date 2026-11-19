<?php

$file = "guestbook.txt"; //檔案名稱

if(!file_exists($file) or filesize($file) == 0){
    echo "there are no messages yet!<hr/>";
} else {
    readfile($file);
}
?>

<br/>
| <a href="guestbook.php">新增留言</a> |
