<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
@$name=$_POST['name'];
@$number=$_POST['number'];
@$time=$_POST['time'];
@$username=$_SESSION['username'];
$sql="select * from emuser where username = '$username'";
$result=mysql_query($sql);
$row = mysql_fetch_assoc($result);
if(isset($_POST["add"])){
    $checkDayStr = date('Y-m-d ',time());
    $startTime = strtotime($checkDayStr."08:30".":00");
    if(time()<$startTime ){
        $sql = "insert into kaoqin (name,number,time,state,username) values ('$name','$number','$time','正常','$username');";
        $result = mysql_query($sql);
        if(!$result){
            echo "<script>alert('添加失败！');
            window.location.href='daka.php';</script>";
            exit;
        }
        else{  
            $sql = "ALTER TABLE kaoqin  ORDER BY id ASC;";
            $result = mysql_query($sql);    
            echo "<script>alert('考勤信息添加成功！');
            window.location.href='daka.php';</script>";
            exit;
        }
    }else{
        $sql = "insert into kaoqin (name,number,time,state,username) values ('$name','$number','$time','迟到','$username');";
        $result = mysql_query($sql);
        if(!$result){
            echo "<script>alert('添加失败！');
            window.location.href='daka.php';</script>";
            exit;
        }
        else{  
            $sql = "ALTER TABLE kaoqin  ORDER BY id ASC;";
            $result = mysql_query($sql);    
            echo "<script>alert('考勤信息添加成功！');
            window.location.href='daka.php';</script>";
            exit;
        }
    }
}
    
//加载页面
require 'view/daka.html';
?>