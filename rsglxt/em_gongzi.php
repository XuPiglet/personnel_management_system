<?php
    header("content-type:text/html;charset=utf-8"); 
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_WARNING);
        //连接数据库
        include("common/conn.php"); 
        $username=$_SESSION['username'];
        $sql = "SELECT * FROM payroll where username='$username'"; // 查询数据
        $rs_result = mysql_query ($sql);    


//载入页面
require 'view/em_gongzi.html';
?>