<?php
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
//接受表单的数据
@$id =$_POST['idEm'];
@$state =$_POST['stateEm'];
@$num =$_POST['numEm'];
@$name =$_POST['nameEm'];
@$gender =$_POST['genderEm'];
@$age =$_POST['ageEm'];
@$department =$_POST['departmentEm'];
@$hiredate =$_POST['hiredateEm'];
if(isset($_POST["add"])){
    $sql = "insert into employeelist (id,state,num,name,gender,age,department,hiredate) values ('$id','$state','$num','$name','$gender','$age','$department','$hiredate');";
    $result = mysql_query($sql);

    if(!$result){
        echo "<script>alert('添加失败！');
        window.location.href='Addempl.php';</script>";
        exit;
    }
    else{       
        $sql = "insert into payroll (id,name) values ('$id','$name');";
        $result = mysql_query($sql);
        echo "<script>alert('新员工添加成功！');
        window.location.href='Employee_nformation.php';</script>";
        $sql ="ALTER TABLE employeelist  ORDER BY id ASC;";
        $result = mysql_query($sql);
        $sql ="ALTER TABLE payroll  ORDER BY id ASC;";
        $result = mysql_query($sql);
        exit;
    }
}

//没有提交表单时，载入登陆页面
require 'view/Addempl.html';
?>