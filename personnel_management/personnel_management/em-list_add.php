<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
// error_reporting(E_ALL^E_NOTICE^E_WARNING);
@$name=$_POST['name'];
@$number=$_POST['number'];
@$xingbie=$_POST['xingbie'];
@$password=$_POST['password'];
@$username=$_POST['username'];
if(isset($_POST["add"])){
    $sql = "insert into emuser (name,number,xingbie,username,password) values ('$name','$number','$xingbie','$username','$password');";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('添加失败！');
        window.location.href='em-list_add.php';</script>";
        exit;
    }
    else{  
        $sql = "update employeelist set username='$username' WHERE name='$name'";
        $result = mysql_query($sql);
        $sql = "update kaoqin set username='$username' WHERE name='$name'";
        $result = mysql_query($sql);
        $sql = "update payroll set username='$username' WHERE name='$name'";
        $result = mysql_query($sql);
        $sql = "ALTER TABLE emuser  ORDER BY id ASC;";
        $result = mysql_query($sql);    
        echo "<script>alert('员工账号添加成功！');
        window.location.href='em-list_add.php';</script>";
        exit;
    }
}
//加载页面
require 'view/em-list_add.html';
?>