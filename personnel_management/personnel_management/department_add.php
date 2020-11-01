<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
//接受表单的数据
@$company=$_POST['company'];
@$xinxi=$_POST['xinxi'];
@$Total=$_POST['Total'];
if(!$_SESSION["username"]){ 
    echo "<script>alert('请先登录！！！');
    top.locat0ion.href = 'login.php';</script>";
    exit;
}else{ 
    if(isset($_POST["Submitx"])){
        $sql = "insert into department (name,information,Total) values ('$company','$xinxi','$Total');";
        $result = mysql_query($sql);
        if(!$result){
            echo "<script>alert('添加失败！');
            window.location.href='department_add.php';</script>";
            exit;
        }
        else{       
            echo "<script>alert('新部门添加成功！');
            window.location.href='department.php';</script>";
            exit;
        }
    }
}




//加载页面
require 'view/department_add.html';
?>