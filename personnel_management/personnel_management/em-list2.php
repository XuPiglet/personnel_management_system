<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
$username = $_SESSION['username'];
 $sql = "SELECT * FROM emuser where username = '$username'"; // 查询数据
 $rs_result = mysql_query ($sql); 


 
//载入页面
require 'view/em-list2.html';
?>