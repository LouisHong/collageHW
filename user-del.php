<?php include 'banner.php'; ?>
<html>
	<head>
	<title>會員中心</title>
	</head>
	<SCRIPT type="text/javascript">
	function check(){
		if(reg.password.value == "") {alert("未輸入密碼");}
		else if(reg.password.value != reg.ch_passwd.value) {alert("輸入密碼錯誤");}
		else {reg.submit();}
	}
	function cancel(){
		location.href="user-center.php";
	}
	</SCRIPT>
	<body bgcolor="#ECE0C8">
	
	<p align="center">
	<table bgcolor="white" width="80%">
		<tr>
			<td width="200">
				<?php include 'left-div.php'; ?>
			</td>
			<td  valign="top">
				
					<p align="center"><br><img src="img/banner-center.jpg"><br></p>
					
					<font face="微軟正黑體">
					<form name="reg" method="POST" action="user-delete.php">
					<p align="center">
					<?php
						if($member_id=="" or $member_passwd==""){
						echo '<p align="center">您尚未登入，請登入後繼續<br>';
						echo '<br><a href="login.php"><input type="button" value="登入"></a><br></p>';
					}else{
						$link=mysql_connect("localhost","root","12345678");
						mysql_query("SET NAMES 'UTF8'");
						mysql_select_db("main_SQL",$link);
						$search= "SELECT `passwd` FROM `member` WHERE `stdID` = '$member_id'";
						$list=mysql_query($search,$link);
						list($passwd)=mysql_fetch_row($list);
						echo '<table>';
						echo '<input type="hidden" name="ch_passwd" value='.$passwd.'>';
						echo '<tr><td>請輸入密碼：<input type="password" style="font-size:20px" name="password" size="20"></td></tr>';
					}
					?>
					<tr><td align="center"><br>
						<input type="button" value="送出" onClick="check()">
						<input type="button" value="取消" onClick="cancel()">
					</td></tr>
					</table><br>
				</p></form></font>
			</td>
		</tr>
	</table>
	<?php include 'buttom-div.php'; ?>
	</p>
	</body>
</html>