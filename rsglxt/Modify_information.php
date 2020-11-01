<?php
header("content-type:text/html;charset=utf-8"); 
session_start();
//连接数据库
include("common/conn.php"); 
$sql = "SELECT * FROM admindata";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);
@$name =$_POST['name'];
@$gender =$_POST['gender'];
@$age =$_POST['age'];
@$briday=$_POST['briday'];
@$ihpone=$_POST['ihpone'];
@$emil=$_POST['emil'];
@$content=$_POST['content'];
@$user=$_POST['user'];

if(isset($_POST["button"])){  
    $sql ="update admindata set name='$name',gender='$gender',age='$age',briday='$briday',ihpone='$ihpone',emil='$emil',content='$content' WHERE user='$user';";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('信息修改失败!');
        window.location.href = 'Modify_information.php';
        </script>";
        exit;
    }
    else{
        echo "<script>alert('信息修改成功!');
        window.location.href = 'Modify_information.php';</script>";
        exit;
    }
}

//加载页面
require 'view/Modify_information.html';
?>