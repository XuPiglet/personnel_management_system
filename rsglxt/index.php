<?php
 header("content-type:text/html;charset=utf-8"); 
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
if(!$_SESSION["username"]){ 
    echo "<script>alert('请先登录！！！');
    window.location.href = 'login.php';</script>";
    exit;
}
//载入页面
require 'view/index.html';
?>