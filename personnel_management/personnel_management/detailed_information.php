<?php
header("content-type:text/html;charset=utf-8"); 
//连接数据库
include("common/conn.php"); 
$id = $_REQUEST['id'];
$sql = "SELECT * FROM employeelist WHERE id={$id}";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);
//接受表单的数据
@$name =$_POST['CKname'];
@$gender =$_POST['CKgender'];
@$nation =$_POST['CKnation'];
@$birthplace =$_POST['CKbirthplace'];
@$heigh =$_POST['CKheigh'];
@$weight =$_POST['CKweight'];
@$education =$_POST['CKeducation'];
@$major =$_POST['CKmajor'];
@$birthday =$_POST['CKbirthday'];
@$School =$_POST['CKSchool'];
@$phone =$_POST['CKphone'];
@$email =$_POST['CKemail'];
@$address =$_POST['CKaddress'];
@$explain =$_POST['CKexplain'];
@$experience =$_POST['CKexperience'];
@$id=$_POST['CKid'];
if(isset($_POST["button"])){  
    $sql ="update employeelist set name='$name',gender='$gender',nation='$nation',birthplace='$birthplace',heigh='$heigh',weight='$weight',education='$education',major='$major',birthday='$birthday',School='$School',
    phone='$phone',email='$email',address='$address',experience ='$experience',`explain`='$explain' WHERE id='$id';";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('信息修改失败!');
        window.location.href = 'detailed_information.php?id=".$id." ';
        </script>";
        exit;
    }
    else{
        echo "<script>alert('信息修改成功!');
        window.location.href = 'Employee_nformation.php';</script>";
        exit;
    }
}

//加载页面
require 'view/detailed_information.html';
?>