<?php
header("content-type:text/html;charset=utf-8");    
//连接数据库
$conn= mysql_connect("www.myphp.com","root","123456")or die("链接数据库失败");
mysql_select_db('mydb');
//设置编码
mysql_query("set names 'utf8'");


?>