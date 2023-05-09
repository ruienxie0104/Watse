<?php

include("connectsql.php");

$myTable = 'member'; //設定本程式所使用的資料表

if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM `member` WHERE `email	`='$email' and `	password`='$pwd'";
    $result = mysqli_query($_SESSION['link'], $sql);
    $row = mysqli_fetch_array($result);
    if ($row) {
        // 登入成功
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['type'] = $row['type'];
        header("Location:index.php");
        exit();
    } else {
        // 登入失敗
        echo "<script>alert('登入失敗，請檢查帳號和密碼是否正確。')</script>";
        echo '<meta http-equiv="refresh" content="0;url=login.php">';
    }
}
?>