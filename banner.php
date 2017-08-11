<?php
	session_start();
	$member_id=$_SESSION['stdID'];
	$member_passwd=$_SESSION['passwd'];
	$member_name=$_SESSION['name'];
?>
<html>
	<head>
	</head>
	<SCRIPT type="text/javascript">
	function login(){
		location.href="login.php";
	}
	function logout(){
		location.href="logout.php";
	}
	</SCRIPT>
	<body>
	<p align="center">
	<table width="80%" bgcolor="#ffffff">
	<tr>
		<td width="10%">
			<image src="img/shop-icon.gif" height="40">
		</td >
		<td width="45%">
		</td>
		<td align="right" width="20%">
			<?php
				if($member_id=="" or $member_passwd==""){
					echo '您尚未登入。 ';
					echo '<input type="button" value="登入" onClick="login()">';
				}else{
					echo $member_id.'，您好!! ';
					echo '<input type="button" value="登出" onClick="logout()">';
				}
			?>
		</td>
	</tr>
	</table>
	</p>
	</body>
</html>