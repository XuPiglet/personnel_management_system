<?php
    header("content-type:text/html;charset=utf-8"); 
    session_start();
    if(!$_SESSION["username"]){ 
        echo "<script>alert('请先登录！！！');
        top.location.href = 'login.php';</script>";
        exit;
    }else{    
        include("common/conn.php");
        @$username = $_REQUEST ["username"]; 
        @$oldpassword = $_REQUEST ["oldPwd"]; 
        @$newpassword = $_REQUEST ["newPwd"];
        @$newpassword2 = $_REQUEST ["newPwd2"];         
        $sql = "select * from username where username ='$username';";
        $result1 = mysql_query($sql);
        $row = mysql_fetch_array($result1);
        if(isset($_POST["revise"])){
            // $sql ="update employeelist set password='$newpassword' WHERE username='$username';";
            // $result = mysql_query($sql);
            // if(!$result){
            //     echo "<script>alert('信息修改失败！');
            //     window.location.href = 'EmInformation_edit.php?id=".$id."';</script>";
            //     exit;
            // }
            // else{
            //     echo "<script>alert('信息修改成功!');
            //     window.location.href = 'Employee_nformation.php';</script>";
            //     exit;
            // }

            if($oldpassword == $row ["password"]){
                if($newpassword == $newpassword2){
                    if(!preg_match('/^(?![^a-zA-Z]+$)(?!\D+$).{6,}$/',$newpassword)){
                        echo "<script>alert('新密码不符合要求！');
                        window.location.href = 'Password.php';</script>";
                        exit;
                    }else{
                        $sql ="update username set password='$newpassword' WHERE username='$username';";
                        $result2 = mysql_query($sql);
                        if(!$result2){
                            echo "<script>alert('密码修改失败！');
                            window.location.href = 'Password.php';</script>";
                            exit;
                        }else{
                            unset($_SESSION['username']);
                            echo "<script>alert('密码修改成功！请重新登录！！！');
                            top.location.href = 'login.php';</script>";
                            exit; 
                        }
                    }
                }else{
                    echo "<script>alert('两次密码不一致!');
                    window.location.href = 'Password.php';</script>";
                    exit;
                }
            }else{
                echo "<script>alert('密码为空或原密码不对!');
                window.location.href = 'Password.php';</script>";
                exit;
            }
        }
        //载入页面
        require 'view/Password.html';
    }

?>