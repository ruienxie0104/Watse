<?php
include("connectsql.php");

$myTable = 'user'; //設定本程式所使用的資料表

$email = $_POST['email'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];

// 檢查是否已經註冊過
$search_sql = "SELECT * FROM `member` WHERE `使用者信箱`='$email'";
$search_result = mysqli_query($link, $search_sql);
if (mysqli_num_rows($search_result) > 0) {
    // 已註冊過，顯示訊息
    echo "<script>alert('錯誤：此帳號已被註冊過！')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
} else {
    // 未註冊過，新增會員資料
    $sql = "INSERT INTO `member` (`email`, `name	`, `password`) VALUES ('$email','$name', '$pwd')";
    if (mysqli_query($link, $sql)) {
        echo "<script>alert('新會員註冊成功！')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    } else {
        echo "錯誤：" . $sql . "<br>" . mysqli_error($link);
    }
}
?>