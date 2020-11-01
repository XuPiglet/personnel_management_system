<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
  
$id = $_GET['id'];
$sql = "SELECT * FROM kaoqin WHERE id={$id}";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);

    //接受表单的数据
    @$id=$_POST['id'];
    @$name=$_POST['name'];
    @$number=$_POST['number'];
    @$time=$_POST['time'];
    @$state=$_POST['state'];

if(isset($_POST["xiugai"])){
    $sql ="update kaoqin set name='$name',number='$number',time='$time',state='$state' WHERE id='$id';";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('信息修改失败！');
        function() {
                            // 获得frame索引
                            var index = parent.layer.getFrameIndex(window.name);
                            //关闭当前frame
                            parent.layer.close(index);
                        });
        </script>";
        exit;
    }
    else{
        echo "<script>alert('信息修改成功!');
         var index = parent.layer.getFrameIndex(window.name);
        //                 //关闭当前frame
                        parent.layer.close(index);
                        parent.location.reload();
       </script>";
        exit;
    }
}
//加载页面
require 'view/kaoqin_edit.html';
?>