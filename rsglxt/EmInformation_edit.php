<?php
header("content-type:text/html;charset=utf-8"); 
//连接数据库
include("common/conn.php"); 
error_reporting(E_ALL^E_NOTICE^E_WARNING);
  
$id = $_GET['id'];
$sql = "SELECT * FROM employeelist WHERE id={$id}";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);

    //接受表单的数据
    @$id=$_POST['idEm'];
    @$state =$_POST['stateEm'];
    @$name =$_POST['nameEm'];
    @$gender =$_POST['genderEm'];
    @$age =$_POST['ageEm'];
    @$department =$_POST['departmentEm'];
    @$hiredate =$_POST['hiredateEm'];
    @$leavedate=$_POST['leavedate'];

if(isset($_POST["revise"])){
    $sql ="update employeelist set name='$name',state='$state',gender='$gender',age='$age',department='$department',hiredate='$hiredate',leavedate='$leavedate' WHERE id='$id';";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('信息修改失败！');
        window.location.href = 'EmInformation_edit.php?id=".$id."';</script>";
        exit;
    }
    else{
        echo "<script>alert('信息修改成功!');
        window.location.href = 'Employee_nformation.php';</script>";
        exit;
    }
}

//没有提交表单时，载入登陆页面
require 'view/EmInformation_edit.html';
?>