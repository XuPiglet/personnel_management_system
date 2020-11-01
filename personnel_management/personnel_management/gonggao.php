<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
 // 每页显示数量
 $num_rec_per_page=7;  
 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
 $start_from = ($page-1) * $num_rec_per_page; 
 $sql = "SELECT * FROM gonggao LIMIT $start_from, $num_rec_per_page"; // 查询数据
 $rs_result = mysql_query ($sql); 



//载入页面
require 'view/gonggao.html';
?>