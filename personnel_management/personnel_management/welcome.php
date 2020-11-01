<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
//载入页面
require 'view/welcome.html';
?>