<?php
header("content-type:text/html;charset=utf-8"); 
//连接数据库
include("common/conn.php"); 
$id = $_GET['id'];
//删除指定数据  
mysql_query("DELETE FROM emuser WHERE id='{$id}'") or die('删除数据出错:'.mysql_error()); 
// // 删除完跳转到
// header("Location:em-list.php"); 
echo "<script>
        window.location.href = 'em-list.php';</script>";
?>