<html>
	<head>
		<meta content="text/html; charset=UTF-8" content="">
		<title>會員註冊</title>
	</head>
	<SCRIPT type="text/javascript">
	var t = new Date();
	var YY = t.getFullYear();	var MM = t.getMonth()+1;	var DD = t.getDate();
	var hh = t.getHours();	var mm = t.getMinutes();	var ss = t.getSeconds();
	var dataOk=0;
	function check(){
		if(reg.studentID.value == "") {alert("未輸入學號");}
		else if(reg.password.value == "") {alert("未輸入密碼");}
		else if(document.reg.password.value.length <8) {alert("密碼太短");}
		else if(document.reg.password.value.length >15) {alert("密碼太長");}
		else if(reg.tel.value == "") {alert("未輸入電話");}
		else if(reg.email.value == "") {alert("未輸入電子郵件");}
		else if(reg.address.value == "") {alert("未輸入地址");}
		else {
			if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reg.email.value)){dataOk+=1;}else{alert("電子郵件輸入不正確");}
			if(/^\(?[0-9]{2}(\-|\)) ?[0-9]{4}-[0-9]{4}$/.test(reg.tel.value)){dataOk+=1;}else{alert("連絡電話輸入不正確，輸入格式(XX)XXXX-XXXX");}
			if(dataOk == 2 ){reg.date.value=(YY+"-"+MM+"-"+DD+" "+hh+":"+mm+":"+ss); dataOk=0; reg.submit();}
			dataOk=0;
		}
	}
	function cancel(){
		location.href="login.php";
	}
	</SCRIPT>
	<body bgcolor="#ECE0C8">
	<form name="reg" method="POST" action="reg_check.php">
	<p align="center">
		<a href="index.php"><image src="img/chin-yi.jpg" width="350"></a>
	</p>
	<p align="center"><table width="450" bgcolor="#cccccc">
		<tr><td align="center"><font size="5" face="微軟正黑體">會 員 註 冊 系 統</font></td></tr>
		<tr><td align="left"><br>
			學號：<input type="text" name="studentID" size="20">
			<font color="blue" size="1">(無法修改)</font>
			<font color="red" size="1">學號即為會員帳號</font>
		</td></tr>
		<tr><td align="left">
			密碼：<input type="password" name="password" size="20">
			<font color="red" size="1">請輸入8-15字元的密碼</font>
		</td></tr>
		<tr><td align="left">
			姓名：<input type="text" name="name" size="20">
		</td></tr>
		<tr><td align="left">
			性別：<input type="radio" name="sex" value="男">男</input>
			<input type="radio" name="sex" value="女">女</input>
			<font color="blue" size="1">(無法修改)</font>
		</td></tr>
		<tr><td align="left">
			生日：<select name="B_year" size="1">
			<?php for($year=1980;$year<=2017;$year++){echo "<option value=\"$year\">$year</option>";} ?>
			</select>年<select name="B_month" size="1">
			<?php for($month=1;$month<=12;$month++){echo "<option value=\"$month\">$month</option>";} ?>
			</select>月<select name="B_day" size="1">
			<?php for($day=1;$day<=31;$day++){echo "<option value=\"$day\">$day</option>";} ?>
			</select>日
			<font color="blue" size="1">(無法修改)</font><br>
		</td></tr>
		<tr><td align="left">
			就讀系所：<select name="depart" size="1">
			<option value="化材系">化材系</option><option value="機械系">機械系</option>
			<option value="冷凍系">冷凍系</option><option value="文創系">文創系</option>
			<option value="景觀系">景觀系</option><option value="應英系">應英系</option>
			<option value="電機系">電機系</option><option value="電子系">電子系</option>
			<option value="資工系">資工系</option><option value="工管系">工管系</option>
			<option value="企管系">企管系</option><option value="資管系">資管系</option>
			<option value="流管系">流管系</option><option value="休管系">休管系</option>
			</select>
			<font color="blue" size="1">(無法修改)</font>
		</td></tr>
		<tr><td align="left">
			連絡電話：<input type="text" name="tel" size="20">
		</td></tr>
		<tr><td align="left">
			電子郵件：<input type="text" name="email" size="30">
		</td></tr>
		<tr><td align="left">
			通訊地址：<input type="text" name="address" size="45">
		</td></tr>
		<input type="hidden" name="date" value=" ">
		<input type="hidden" name="birthday" value=<?php "$B_year" ?>>
		<tr><td align="center">
			<input type="button" value="註冊" onClick="check()">
			<input type="button" value="取消" onClick="cancel()">
		</td></tr>
	</table></p>
	</body>
</html>