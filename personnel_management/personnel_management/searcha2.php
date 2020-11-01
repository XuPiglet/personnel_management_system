<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
//接受表单的数据
if(isset($_POST["sousuo2"])){
    @$keywords =$_POST['keywords2'];
    if($keywords== ''){
        echo "<script>alert('输入不能为空！');
        window.location.href='Salary_management.php';</script>";
        die;
    }else{
    // @$keywords =$_POST['keywords'];
    $sql="select * from payroll where name like '%".$keywords."%' or num like '%".$keywords."%'";
    $result=mysql_query($sql);
    $rs = mysql_num_rows($result);
        if($rs==0){
            echo "<script>alert('没有查询结果！');
            window.location.href='Salary_management.php';</script>";
            die;
        }
        // else{
        //     $sql="select * from employeelist where name like '%".$keywords."%' or state like '%".$keywords."%' or id like '%".$keywords."%' or department like '%".$keywords."%'";
        //     $result=mysql_query($sql);
        // }
    }
}



//没有提交表单时，载入登陆页面
require 'view/search2.html';
?>