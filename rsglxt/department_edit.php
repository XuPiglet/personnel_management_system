<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
  
$id = $_GET['id'];
$sql = "SELECT * FROM department WHERE id={$id}";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);

    //接受表单的数据
    @$id=$_POST['id'];
    @$name=$_POST['company'];
    @$information=$_POST['xinxi'];
    @$Total=$_POST['Total'];

if(isset($_POST["revise"])){
    $sql ="update department set name='$name',information='$information',Total='$Total' WHERE id='$id';";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('信息修改失败！');
        window.location.href = 'department_edit.php?id=".$id."';</script>";
        exit;
    }
    else{
        echo "<script>alert('信息修改成功!');
        window.location.href = 'department.php';</script>";
        exit;
    }
}
//加载页面
require 'view/department_edit.html';
?>