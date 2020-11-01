<?php



header("content-type:text/html;charset=utf-8"); 
session_start();
//连接数据库
include("common/conn.php"); 
$sql = "SELECT * FROM admindata";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);
require 'view/administrator_information.html';
?>