<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
//接受表单的数据
if(isset($_POST["sousuo"])){
    @$keywords =$_POST['keywords'];
    if($keywords== ''){
        echo "<script>alert('输入不能为空！');
        window.location.href='department.php';</script>";
        die;
    }else{
        $sql="select * from department where name like '%".$keywords."%'";
        $result=mysql_query($sql);
        $rs = mysql_num_rows($result);
            if($rs==0){
                echo "<script>alert('没有查询结果！');
                window.location.href='department.php';</script>";
                die;
            }
    }
}
//加载页面
require 'view/department_search.html';
?>