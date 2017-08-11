<?php include 'banner.php'; ?>
 <html>
	<head>
	<title>會員中心</title>
	</head>
	<SCRIPT type="text/javascript">
	function check(){
		if(reg.old_passwd.value == "") {alert("未輸入舊密碼");}
		else if(reg.new_passwd.value == "") {alert("未輸入新密碼");}
		else if(reg.re_passwd.value == "") {alert("請再次輸入密碼");}
		else if(document.reg.new_passwd.value.length <8) {alert("密碼太短(8-15字元)");}
		else if(document.reg.new_passwd.value.length >15) {alert("密碼太長(8-15字元)");}
		else if(reg.old_passwd.value != reg.ch_passwd.value) {alert("舊密碼錯誤");}
		else if(reg.old_passwd.value == reg.new_passwd.value) {alert("新密碼與舊密碼重複");}
		else if(reg.new_passwd.value != reg.re_passwd.value) {alert("新密碼不符");}
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
					<form name="reg" method="POST" action="user-password.php">
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
						echo '<tr><td>請輸入舊密碼：<input type="password" style="font-size:20px" name="old_passwd" size="20"></td></tr>';
						echo '<tr><td>請輸入新密碼：<input type="password" style="font-size:20px" name="new_passwd" size="20"></td></tr>';
						echo '<tr><td>請再次輸入新密碼：<input type="password" style="font-size:20px" name="re_passwd" size="20"></td></tr>';
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