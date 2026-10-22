<?php
include "about_me.php";
echo "EX04<br/>";
$ip = $_SERVER["REMOTE_ADDR"];
echo "IP Address: " . $ip . "<br/>";
$path = $_SERVER["SCRIPT_NAME"];
echo "PATH: " . $path . "";
?>
<table border="1">
    <tr>
        <td>Key</td>
        <td>Value</td>
    </tr>
    <?php 
    foreach ($_SERVER as $key => $value) {
        echo "<TR><TD>" . $key . "</TD>" ;
        echo "<TD>" . $value . "</TD></TR>";
    }
    ?>
</table>
