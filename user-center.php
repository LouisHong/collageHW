<?php include 'banner.php'; ?>
<html>
	<head>
	<title>會員中心</title>
	</head>
	<body bgcolor="#ECE0C8">
	
	<p align="center">
	<table bgcolor="white" width="80%">
		<tr>
			<td width="200" valign="top">
				<?php include 'left-div.php'; ?>
			</td>
			<td  valign="top">
				<p align="center">
					<br><img src="img/banner-center.jpg"><br>
					<font face="微軟正黑體">
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
						list($stdID,$name,$sex,$birthday,$passwd,$depart,$mail,$phone,$address,$reg_time,$log_time)=mysql_fetch_row($list);
						
						echo '<br><img src="img/user-icon.jpg" width="200"><br><br>';
						echo '<table>';
						echo '<tr><td>會員編號：</td><td>'.$stdID.'</td>';
						echo '<tr><td>會員姓名：</td><td>'.$name.'</td>';
						echo '<tr><td>性別：</td><td>'.$sex.'</td>';
						echo '<tr><td>生日：</td><td>'.$birthday.'</td>';
						echo '<tr><td>就讀系所：</td><td>'.$depart.'</td>';
						echo '<tr><td>電子郵件：</td><td>'.$mail.'</td>';
						echo '<tr><td>連絡電話：</td><td>'.$phone.'</td>';
						echo '<tr><td>通訊地址：</td><td>'.$address.'</td>';
						echo '<tr><td>註冊時間：</td><td>'.$reg_time.'</td>';
						echo '<tr><td>最後登入時間：</td><td>'.$log_time.'</td>';
						echo '</table><br>';
						echo '<a href="user-edit.php"><image src="img/btm-edit.jpg"></a>';
						echo '<a href="user-passwd.php"><image src="img/btm-passwd.jpg"></a>';
						echo '<a href="user-del.php"><image src="img/btm-del.jpg"></a>';
						mysql_close($link);
					}
					?>
					
				</font></p>
			</td>
		</tr>
	</table>
	<?php include 'buttom-div.php'; ?>
	</p>
	</body>
</html>