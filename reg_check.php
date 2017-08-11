<?php
	$ID=$_POST['studentID'];
	$Pwd=$_POST['password'];
	$Name=$_POST['name'];
	$Sex=$_POST['sex'];
	$Depart=$_POST['depart'];
	$Tel=$_POST['tel'];
	$Email=$_POST['email'];
	$Address=$_POST['address'];
	$Date=$_POST['date'];
	$Year=(string)$_POST['B_year'];
	$Month=(string)$_POST['B_month'];
	$Day=(string)$_POST['B_day'];
	$Birthday="$Year-$Month-$Day";
	
	$link=mysql_connect("localhost","root","12345678");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db("main_SQL",$link);
	$search= "SELECT * FROM `member` WHERE `stdID` = '$ID'";
	$list=mysql_query($search,$link);
	list($stdID,$name)=mysql_fetch_row($list);
	if($stdID == $_POST['studentID']){
		header("Refresh:1; url=login.php");
		echo '<h2><p align="center">此學號已註冊過!!請重新登入~~</p></h2><br>';
		exit;
	}
	if (isset($_SESSION['stdID'])) {
    	echo "username exist";
    	exit;
	}
	$add_member="INSERT INTO `member` (`stdID`,`name`,`sex`,`birthday`,`passwd`,`depart`,`phone`,`mail`,`address`,`reg_time`,`log_time`) VALUES ('$ID','$Name','$Sex','$Birthday','$Pwd','$Depart','$Tel','$Email','$Address','$Date','$Date');";
	mysql_query($add_member,$link) or die("新增會員資料失敗");
	mysql_close($link);
	header("location:login.php");
	
?>