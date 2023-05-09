<?php
session_start();

// 清除所有已設定的session變數
session_unset();

// 結束會話
session_destroy();

// 重新導向回首頁
header("Location:index.php");
exit;
?>