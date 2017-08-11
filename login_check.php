<?php
	session_start();
	$ID=$_POST['studentID'];
	$Log=$_POST['date'];
	$link=mysql_connect("localhost","root","12345678");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db("main_SQL",$link);
	$search= "SELECT stdID,name,passwd FROM `member` WHERE `stdID` = '$ID'";
	$list=mysql_query($search,$link);
	list($stdID,$name,$passwd)=mysql_fetch_row($list);
	
	if($stdID != $_POST['studentID']){
		header("Refresh:1; url=login.php");
		echo '<h2><p align="center">查無此帳號，請重新輸入!!</p></h2><br>';
		
		exit;
	}
	if($passwd != $_POST['password']) {
		header("Refresh:1; url=login.php");
		echo '<h2><p align="center">您輸入的密碼錯誤喔，請重新輸入!!</p></h2><br>';
		exit;
	}
	if (isset($_SESSION['stdID'])) {
    	echo "username exist";
    	exit;
	}
	$up_log= "UPDATE `member` SET `log_time`='$Log' WHERE `stdID` = '$ID'";
	$list=mysql_query($up_log,$link)or die("新增失敗");
	mysql_close($link);
	$_SESSION['stdID']=$_POST['studentID'];
	$_SESSION['passwd']=$_POST['password'];
	$_SESSION['name']=$name;
	header("location:index.php");
?>