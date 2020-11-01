<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
    // error_reporting(E_ALL^E_NOTICE^E_WARNING);
if(!$_SESSION["username"]){ 
    echo "<script>alert('请先登录！！！');
    top.location.href = 'login.php';</script>";
    exit;
}else{    
    // 每页显示数量
    $num_rec_per_page=7;  
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
    $start_from = ($page-1) * $num_rec_per_page; 
    $sql = "SELECT * FROM department LIMIT $start_from, $num_rec_per_page"; // 查询数据
    $rs_result = mysql_query ($sql);
    if(isset($_POST["shuaxin"])){  
        echo "<script>
        window.location.href = 'department.php';
        </script>";
        exit;
    } 
}

//加载页面
require 'view/department.html';
?>