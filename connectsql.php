<?php
session_start();
// 建立MySQL的資料庫連接 
$link = mysqli_connect(
    'localhost',
    // MySQL主機名稱 
    'root',
    // 使用者名稱 
    '',
    // 密碼 
    'iwaste'
);
// 預設使用的資料庫名稱 
if (!$link) {
    echo "MySQL資料庫連接錯誤!<br/>";
    exit();
} else {
    // echo "MySQL資料庫test連接成功!<br/>";

}
$_SESSION['link'] = $link;
// mysqli_close($link); // 關閉資料庫連接
?>