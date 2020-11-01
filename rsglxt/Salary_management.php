<?php
    header("content-type:text/html;charset=utf-8"); 
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_WARNING);
    if(!$_SESSION["username"]){ 
        echo "<script>alert('请先登录！！！');
        top.location.href = 'login.php';</script>";
        exit;
    }else{  
        //连接数据库
        include("common/conn.php"); 
        // 每页显示数量
        $num_rec_per_page=7;  
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
        $start_from = ($page-1) * $num_rec_per_page; 
        $sql = "SELECT * FROM payroll LIMIT $start_from, $num_rec_per_page"; // 查询数据
        $rs_result = mysql_query ($sql);    
    }


//载入页面
require 'view/Salary_management.html';
?>