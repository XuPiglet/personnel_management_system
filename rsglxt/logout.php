<?php
    header("content-type:text/html;charset=utf-8"); 
    session_start();
    unset($_SESSION['username']);
    echo "<script>alert('账户注销成功!');
    window.location.href = 'login.php';</script>";
    exit;
?>