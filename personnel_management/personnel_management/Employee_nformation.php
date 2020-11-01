<?php
    header("content-type:text/html;charset=utf-8"); 
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_WARNING);
    if(!$_SESSION["username"]){ 
        echo "<script>alert('请先登录！！！');
        top.location.href = 'login.php';</script>";
        exit;
    }else{    
        //连接数据库
        include("common/conn.php"); 
        // 每页显示数量
        $num_rec_per_page=7;  
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
        $start_from = ($page-1) * $num_rec_per_page; 
        $sql = "SELECT * FROM employeelist LIMIT $start_from, $num_rec_per_page"; // 查询数据
        $rs_result = mysql_query ($sql); 


        // $sql = "SELECT * FROM employeelist "; 
        // $rs_result = mysql_query($sql); //查询数据
        // $total_records = mysql_num_rows($rs_result);  // 统计总共的记录条数
        // $total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数

        // echo "<a href='ceshi.php?page=1'>".'|<'."</a> "; // 第一页

        // for ($i=1; $i<=$total_pages; $i++) { 
        //             echo "<a href='ceshi.php?page=".$i."'>".$i."</a> "; 
        // }; 
        // echo "<a href=ceshi.php?page=$total_pages'>".'>|'."</a> "; // 最后一页

        //搜索
        if(isset($_POST["sousuo"])){
            @$keywords =$_POST['keywords'];
            if($keywords== ''){
                echo "<script>alert('输入不能为空！');</script>";
                exit;
            }else{
                // $sql="select * from employeelist where name like '%".$keywords."%' or state like '%".$keywords."%' or id like '%".$keywords."%' or department like '%".$keywords."%'";
                // $result=mysql_query($sql);
                Header("Location: searcha.php");
                exit;
            }
            // $sql="select * from employeelist where name like '%".$keywords."%' or state like '%".$keywords."%' or id like '%".$keywords."%' or department like '%".$keywords."%'";
            // $$rs_result=mysql_query($sql);
            // $row = mysql_fetch_assoc($rs_resul);
            

        } 
    //没有提交表单时，载入登陆页面
    require 'view/Employee_nformation.html';  
    }
?>