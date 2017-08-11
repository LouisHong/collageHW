<?php
	session_start();
	$member_id=$_SESSION['stdID'];
	$member_passwd=$_SESSION['passwd'];
	$member_name=$_SESSION['name'];
	
	$Name=$_POST['name'];
	$Tel=$_POST['tel'];
	$Email=$_POST['email'];
	$Address=$_POST['address'];

	$link=mysql_connect("localhost","root","12345678");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db("main_SQL",$link);
	
	$upload_user="UPDATE `member` SET `name`='$Name',`phone`='$Tel',`mail`='$Email',`address`='$Address' WHERE `stdID`='$member_id'";
	mysql_query($upload_user,$link) or die("更新資料失敗");
	mysql_close($link);
?>
<?php
	header("location:user-center.php");
?>