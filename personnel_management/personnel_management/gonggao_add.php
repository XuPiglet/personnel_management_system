<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
// error_reporting(E_ALL^E_NOTICE^E_WARNING);
//接受表单的数据
@$title=$_POST['title'];
@$content=$_POST['content'];
@$time=$_POST['time'];
@$Publisher=$_POST['Publisher'];
@$state=暂未发布;
    if(isset($_POST["fabu"])){
        $sql = "insert into gonggao (title,content,time,Publisher,state) values ('$title','$content','$time','$Publisher','$state');";
        $result = mysql_query($sql);
        if(!$result){
            echo "<script>alert('添加失败!');
            window.location.href='gonggao_add.php';</script>";
            exit;
        }
        else{       
            $sql ="ALTER TABLE gonggao  ORDER BY ID DESC;";
        $result = mysql_query($sql);
            echo "<script>alert('新公告添加成功！');
            window.location.href='gonggao_add.php';</script>";
            exit;
        }
    }
    require 'view/gonggao_add.html';
?>