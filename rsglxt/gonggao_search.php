<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
// error_reporting(E_ALL^E_NOTICE^E_WARNING);
//接受表单的数据
if(isset($_POST["sousuo"])){
    $time =$_POST['time'];
     if($time==''){
            echo "<script>alert('查询的时间不能为空！');
            window.location.href='gonggao.php';</script>";
            die;
        }else{
            $sql="select * from gonggao where time='$time'";
            $result=mysql_query($sql); 
            $rs = mysql_num_rows($result);
                if($rs==0){
                    echo "<script>alert('没有查询结果！');
                    window.location.href='gonggao.php';</script>";
                    exit;
                    }
            }
        }
//加载页面
require 'view/gonggao_search.html';
?>