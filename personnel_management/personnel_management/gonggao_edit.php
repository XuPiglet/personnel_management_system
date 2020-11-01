<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
  
$id = $_GET['id'];
$sql = "SELECT * FROM gonggao WHERE id={$id}";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);

    //接受表单的数据
    @$id=$_POST['id'];
    @$title=$_POST['title'];
@$content=$_POST['content'];
@$time=$_POST['time'];
@$Publisher=$_POST['Publisher'];

if(isset($_POST["xiugai"])){
    $sql ="update gonggao set title='$title',content='$content',time='$time',Publisher='$Publisher' WHERE ID='$id';";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('信息修改失败！');
                // 获得frame索引
                var index = parent.layer.getFrameIndex(window.title);
                //关闭当前frame
                parent.layer.close(index);
        </script>";
        exit;
    }
    else{
        echo "<script>alert('信息修改成功!');
        var index = parent.layer.getFrameIndex(window.name);
                        parent.layer.close(index);
                        parent.location.reload();
       </script>";
        exit;
    }
}
//加载页面
require 'view/gonggao_edit.html';
?>