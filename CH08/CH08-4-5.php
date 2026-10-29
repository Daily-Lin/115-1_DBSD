<?php
$error = "";
$msg = "";
$name = "";
$username = "";
$showform = true; // 預設顯示表單
if (isset($_GET["Reg"])) { // 檢查是否按下表單
    $name = $_GET["Name"];
    $username = $_GET["UserName"];
    $pass1 = $_GET["Pass1"];
    $pass2 = $_GET["Pass2"];
    if (empty($username)){
        $error .= "Your Usernameis empty.<br/>";
    } else {
        if (empty($pass1)){
            $error .= "Your Password is empty.<br/>";
        } else {
            if ($pass1 != $pass2) {
                $error .= "Your Passwords are not the same.<br/>";
            }else {
                $showform = false; // 不顯示表單
                $msg = "Your Name: " . $name . "<br/>";
                $msg .= "Your Username: " . $username . "<br/>";
                $msg .= "Your Password: " . $pass1 . "<br/>";
                $msg .= "Your Password: " . $pass2 . "<br/>";
            }
        }
        } 
}
?>


<?php if ($showform) { // 顯示網頁表單
        require("about_me.php");
        echo "W08-EX03" . "<br/>";
        ?>
    <form action="ch08-4-5.php" method="get">
        Name: <input type=text name="Name" /><br />
        ID: <input type=text name="UserName" /><br />
        Password: <input type=password name="Pass1" /><br />
        Password-again: <input type=password name="Pass2" /><br />
        <input type="submit" name="Reg" value="Register User" />
    </form>
    <?php
    } else
        require("about_me.php");
    echo "W08-EX03" . "<br/>";
    echo $msg;  // 顯示表單處理結果
    ?>