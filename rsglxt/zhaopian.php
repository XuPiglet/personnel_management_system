<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
session_start();
error_reporting(E_ALL^E_NOTICE^E_WARNING);
 $id= $_POST["CKid"];
$file = $_FILES["file"]["tmp_name"];
$filename = $_FILES["file"]["name"];
$path="img/touxiang/";
$res=move_uploaded_file($file,$path.$filename);
if($res){
    $sql = "update employeelist set zhaopian='$path$filename' WHERE id='$id';";
    $result = mysql_query($sql); 
    echo"<script>alert('头像上传成功！');
    window.location.href = 'detailed_information.php?id=".$id."';</script>";
    exit;
}else{
    echo"<script>alert('头像上传失败！');
    window.location.href = 'detailed_information.php?id=".$id."';</script>";
}
   

?>