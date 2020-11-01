<?php
header("content-type:text/html;charset=utf-8"); 
//连接数据库
include("common/conn.php"); 
$id = $_GET['id'];
//发布指定数据  
mysql_query("update gonggao set state = '已发布' WHERE id={$id}")or die('发布数据出错：'.mysql_error()); 
// 发布完跳转到
header("Location:gonggao.php"); 
?>