<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
// error_reporting(E_ALL^E_NOTICE^E_WARNING);
//接受表单的数据
if(isset($_POST["sousuo"])){
    @$keywords =$_POST['keywords'];
    @$time =$_POST['time'];
    if($keywords== '' && $time==''){
        echo "<script>alert('输入不能为空！');
        window.location.href='kaoqin.php';</script>";
        die;
    }else if($time==''){
        // $sql="select * from kaoqin  where time like '$time'";
        $sql="select * from kaoqin where name like '%".$keywords."%'";
        $result=mysql_query($sql);
        $rs = mysql_num_rows($result);
            if($rs==0){
                echo "<script>alert('没有查询结果！');
                window.location.href='kaoqin.php';</script>";
                exit;
            }
        }else{
        $sql="select * from kaoqin where name like '%".$keywords."%' and Date(time) = '$time'";
        $result=mysql_query($sql);
        $rs = mysql_num_rows($result);
            if($rs==0){
                echo "<script>alert('没有查询结果！');
                window.location.href='kaoqin.php';</script>";
                exit;
            }
    }
}
//加载页面
require 'view/kaoqin_search.html';
?>