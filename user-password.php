<?php
	session_start();
	$member_id=$_SESSION['stdID'];
	$member_passwd=$_SESSION['passwd'];
	$member_name=$_SESSION['name'];

	$New_passwd=$_POST['new_passwd'];

	$link=mysql_connect("localhost","root","12345678");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db("main_SQL",$link);
	
	$upload_passwd="UPDATE `member` SET `passwd`='$New_passwd' WHERE `stdID`='$member_id'";
	mysql_query($upload_passwd,$link) or die("更新密碼失敗");
	mysql_close($link);	
	session_destroy();
	header("location:index.php");
?>