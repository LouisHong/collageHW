<?php include 'banner.php'; ?>
<html>
	<head>
	<title>會員中心</title>
	</head>
	<SCRIPT type="text/javascript">
	var dataOk=0;
	function check(){
		if(reg.name.value == "") {alert("未輸入姓名");}
		else if(reg.tel.value == "") {alert("未輸入電話");}
		else if(reg.email.value == "") {alert("未輸入電子郵件");}
		else if(reg.address.value == "") {alert("未輸入地址");}
		else {
			if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(reg.email.value)){dataOk+=1;}else{alert("電子郵件輸入不正確");}
			if(/^\(?[0-9]{2}(\-|\)) ?[0-9]{4}-[0-9]{4}$/.test(reg.tel.value)){dataOk+=1;}else{alert("連絡電話輸入不正確，輸入格式(XX)XXXX-XXXX");}
			if(dataOk == 2 ){dataOk=0; reg.submit();}
			dataOk=0;
		}
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
					<form name="reg" method="POST" action="user-update.php">
					<p align="center">
					<?php
						if($member_id=="" or $member_passwd==""){
						echo '<p align="center">您尚未登入，請登入後繼續<br>';
						echo '<br><a href="login.php"><input type="button" value="登入"></a><br></p>';
					}else{
						$link=mysql_connect("localhost","root","12345678");
						mysql_query("SET NAMES 'UTF8'");
						mysql_select_db("main_SQL",$link);
						$search= "SELECT * FROM `member` WHERE `stdID` = '$member_id'";
						$list=mysql_query($search,$link);
						list($stdID,$name,$sex,$birthday,$passwd,$depart,$mail,$phone,$address)=mysql_fetch_row($list);

						echo '<br><img src="img/user-icon.jpg" width="200"><br><br>';
						echo '<table>';
						echo '<tr><td>會員編號：</td><td>'.$stdID.'</td>';
						echo '<tr><td>會員姓名：</td><td><input type="text" name="name" size="20" value='.$name.'></td>';
						echo '<tr><td>性別：</td><td>'.$sex.'</td>';
						echo '<tr><td>生日：</td><td>'.$birthday.'</td>';
						echo '<tr><td>就讀系所：</td><td>'.$depart.'</td>';
						echo '<tr><td>電子郵件：</td><td><input type="text" name="email" size="20" value='.$mail.'></td>';
						echo '<tr><td>連絡電話：</td><td><input type="text" name="tel" size="20" value='.$phone.'></td>';
						echo '<tr><td>通訊地址：</td><td><input type="text" name="address" size="40" value='.$address.'></td>';
						mysql_close($link);
					}
					?>
					<tr><td align="center"><br>
						<input type="button" value="修改" onClick="check()">
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