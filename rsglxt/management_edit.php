<?php
header("content-type:text/html;charset=utf-8"); 
//连接数据库
include("common/conn.php"); 
error_reporting(E_ALL^E_NOTICE^E_WARNING);
  
$id = $_GET['id'];
$sql = "SELECT * FROM payroll WHERE id={$id}";
$rs_result =mysql_query($sql); 
$row = mysql_fetch_assoc($rs_result);

    //接受表单的数据
    @$id=$_POST['idGZ'];
    @$name =$_POST['nameGZ'];    
    @$title =$_POST['titleGZ'];
    @$monthlysalary =$_POST['monthlysalaryGZ'];
    @$hourlywage =$_POST['hourlywageGZ'];
    @$Absencedays =$_POST['AbsencedaysGZ'];
    @$Overtimehours =$_POST['OvertimehoursGZ'];
    @$ZhengBan=$_POST['ZhengBanGZ'];
    @$JiaBan=$_POST['JiaBanGZ'];
    @$allowance=$_POST['allowanceGZ'];
    @$PA=$_POST['PAGZ'];
    @$DFAFW=$_POST['DFAFWGZ'];
    @$SSF=$_POST['SSFGZ'];
    @$DueToPay=$_POST['DueToPayGZ'];
    @$PersonalTax=$_POST['PersonalTaxGZ'];
    @$RHS=$_POST['RHSGZ'];

if(isset($_POST["revise"])){
    $sql ="update payroll set name='$name',title='$title',monthlysalary='$monthlysalary',hourlywage='$hourlywage',Absencedays='$Absencedays',Overtimehours='$Overtimehours',ZhengBan='$ZhengBan',JiaBan='$JiaBan',
            allowance='$allowance',PA='$PA',DFAFW='$DFAFW',SSF='$SSF',DueToPay='$DueToPay',PersonalTax='$PersonalTax',RHS='$RHS' WHERE id='$id';";
    $result = mysql_query($sql);
    if(!$result){
        echo "<script>alert('信息修改失败！');
        window.location.href = 'management_edit?id=".$id."';</script>";
        exit;
    }
    else{
        echo "<script>alert('信息修改成功!');
        window.location.href = 'Salary_management.php';</script>";
        exit;
    }
}

//没有提交表单时，载入登陆页面
require 'view/management_edit.html';




?>