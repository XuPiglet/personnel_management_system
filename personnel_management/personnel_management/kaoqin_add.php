<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
// error_reporting(E_ALL^E_NOTICE^E_WARNING);
@$name=$_POST['name'];
@$number=$_POST['number'];
@$time=$_POST['time'];
@$state=$_POST['state'];
if(isset($_POST["add"])){
    $sql = "insert into kaoqin (name,number,time,state) values ('$name','$number','$time','$state');";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('添加失败！');
        window.location.href='kaoqin_add.php';</script>";
        exit;
    }
    else{  
        $sql = "ALTER TABLE kaoqin  ORDER BY id ASC;";
        $result = mysql_query($sql);    
        echo "<script>alert('考勤信息添加成功！');
        var index = parent.layer.getFrameIndex(window.name);
        //关闭当前frame
                  parent.layer.close(index);
                  parent.location.reload();
        //window.location.href='kaiqin_add.php';
        </script>";
        exit;
    }
}
//加载页面
require 'view/kaoqin_add.html';

?>