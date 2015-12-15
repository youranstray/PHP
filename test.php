<?php
	$con=mysql_connect('127.0.0.1','root','admin'); //连接数据库
	if(!$con){
		echo "fail";
	}else{
		echo "success";
	}
?>