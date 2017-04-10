<?php
//	连接选择数据库
	$mysqli = new mysqli('localhost','root','','testmj');
//	connect_error()返回上一次连接错误的错误描述
//	connect_errno()返回上一次连接错误的错误代码
//	die()类似于exit(), 输出一个消息并且退出当前脚本
	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}
//	echo 'Success... ' . $mysqli->host_info . "\n";
	
	
	
	
	
	
	
	
	
?>