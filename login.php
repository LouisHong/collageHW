<html>
	<head>
		<meta content="text/html; charset=UTF-8" content="">
		<title>會員登入</title>
	</head>
	<SCRIPT type="text/javascript">
	var t = new Date();
	var YY = t.getFullYear();	var MM = t.getMonth()+1;	var DD = t.getDate();
	var hh = t.getHours();	var mm = t.getMinutes();	var ss = t.getSeconds();
	function check(){
		if(reg.studentID.value == "") {alert("未輸入帳號");}
		else if(reg.password.value == "") {alert("未輸入密碼");}
		else {reg.date.value=(YY+"-"+MM+"-"+DD+" "+hh+":"+mm+":"+ss); reg.submit();}
	}
	function register(){
		location.href="reg-member.php";
	}
	</SCRIPT>
	<body bgcolor="#ECE0C8"> 
	<form name="reg" method="POST" action="login_check.php">
	<p align="center">
		<a href="index.php"><image src="img/chin-yi.jpg" width="350"></a><br>	
	</p>
	<p align="center"><table width="350" bgcolor="#cccccc">
		<tr><td align="center"><font size="5" face="微軟正黑體">會 員 登 入 系 統</font></td></tr>
		<tr><td align="center"><br>帳號：<input type="text" name="studentID" size="20"></td></tr>
		<tr><td align="center">密碼：<input type="password" name="password" size="20"></td></tr>
		<input type="hidden" name="date" value=" ">
		<tr><td align="center">
			<input type="button" value="註冊" onClick="register()">
			<input type="button" value="登入" onClick="check()">
		</td></tr>
	</table></p>
	</body>
</html>