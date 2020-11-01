
<?php 
header("content-type:text/html;charset=utf-8"); 
include("common/conn.php");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
//接受表单的数据
 @$username =$_POST['username'];
 @$password =$_POST['password'];
 @$identity=$_POST['identity'];
//准备sql语句--通过用户名取当前用户的所有信息
//验证不能为空
if(isset($_POST["button"])){
    if($username == '' || $password == ''){
    echo "<script>alert('用户名或密码不能为空！');
    window.location.href='login.php';</script>";
    die;
    }else if($identity == ''){
        echo "<script>alert('请选者您的身份！');
        window.location.href='login.php';</script>";
        die;
    }else{
        if($identity == em){
            $sql = "select * from emuser where username = '{$username}' and password = '{$password}'";
            $res = mysql_query($sql);
            $row = mysql_num_rows($res);
            if($row==0){
                echo "<script>alert('用户名或密码错误或身份选择错误!');
                window.location.href='login.php';</script>";
                die;
            }else{
                session_start();
                $_SESSION["username"] = $username;
                echo "<script>alert('欢迎登录x人事系统!');
                window.location.href='index2.php';</script>";
                exit;
            }
        }else if($identity == admin){
            $sql = "select * from username where username = '{$username}' and password = '{$password}'";
            $res = mysql_query($sql);
            $row = mysql_num_rows($res);
            if($row==0){
                echo "<script>alert('用户名或密码错误或身份选择错误!');
                window.location.href='login.php';</script>";
                die;
            }else{
                session_start();
                $_SESSION["username"] = $username;
                echo "<script>alert('欢迎登录x人事系统!');
                window.location.href='index.php';</script>";
                exit;
            }
        }
       
    }
}
//验证是否正确，要到数据库验证


 
//没有提交表单时，载入登陆页面
    require 'view/login.html';
?>
