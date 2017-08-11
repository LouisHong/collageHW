<?php
	include 'banner.php';
	
	$link=mysql_connect("localhost","root","12345678");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db("main_SQL",$link);
	
	$del_user="DELETE FROM `member` WHERE stdID='$member_id'";
	mysql_query($del_user,$link) or die("更新資料失敗");
	mysql_close($link);
	session_start();
 	session_destroy();
	header("location:user-center.php");
	
?>