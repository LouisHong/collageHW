<?php include 'banner.php'; ?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" content="">
		<title>訂購清單</title>
	</head>
	<SCRIPT type="text/javascript">
	
	</SCRIPT>
	<body bgcolor="#ECE0C8">
	<p align="center">
	<table bgcolor="white" width="80%">
		<tr>
			<td width="200" valign="top">
				<?php include 'left-div.php'; ?>
			</td>
			<td  valign="top">
				<p align="center">
					<br><img src="img/banner-car.jpg"><br>
					<font face="微軟正黑體">
					<?php
						if($member_id=="" or $member_passwd==""){
						echo '<p align="center">您尚未登入，請登入後繼續<br>';
						echo '<br><a href="login.php"><input type="button" value="登入"></a><br></p>';
					}else{
						$link=mysql_connect("localhost","root","12345678");
						mysql_query("SET NAMES 'UTF8'");
						mysql_select_db("main_SQL",$link);
						$count_Data= "SELECT COUNT(stdID) FROM `sub_list` WHERE `stdID` = '$member_id'";
						$list=mysql_query($count_Data,$link);
						list($COUNT)=mysql_fetch_row($list);
						if($COUNT==0){
							echo '<h3><p align="center">本用戶並未有任何訂購清單!!</p></h3>';
						}else{
							echo '<h3>本用戶共有'.$COUNT.'筆訂單</h3><br>';
							$i=1;
							$search= "SELECT * FROM `sub_list` WHERE `stdID` = '$member_id'";
							$list=mysql_query($search,$link);
							echo '<table border="1">';
							echo '<tr><td align="center">項次</td><td align="center">購買日期</td>';
							echo '<td align="center">總金額</td><td align="center">聯絡資訊</td><td align="center">詳細資料</td>';
							while(list($stdID,$date,$total,$buyName,$buyPhone,$buyEamil,$buyAddress)=mysql_fetch_row($list)){
								echo '<tr>';
								echo '<td align="center" width="10">'.$i.'</td>';
								echo '<td align="center" width="200">'.$date.'</td>';
								echo '<td align="center" width="70">'.$total.'</td>';
								echo '<td align="left" width="400">';
								echo '<b>訂購人姓名：</b>'.$buyName.'<br>';
								echo '<b>連絡電話：</b>'.$buyPhone.'<br>';
								echo '<b>電子郵件：</b>'.$buyEamil.'<br>';
								echo '<b>通訊地址：</b>'.$buyAddress.'<br>';
								echo '</td>';
								echo '<td align="center" width="70">';
								echo '<form method="POST" action="sub_info.php">';
								echo '<input type="hidden" name="stdID" value="'.$stdID.'">';
								echo '<input type="hidden" name="date" value="'.$date.'">';
								echo '<input type="submit" value="詳細資料" onClick="">';
								echo '</form>';
								echo '</td>';
								echo '</tr>';
								$i++;
							}
							echo '</table>';
						}
						
						$search= "SELECT stdID,name,passwd FROM `member` WHERE `stdID` = '$member_id'";
						$list=mysql_query($search,$link);
						list($stdID,$name,$passwd)=mysql_fetch_row($list);
						$stdID=$_SESSION['stdID'];
						$passwd=$_SESSION['passwd'];
						$name=$_SESSION['name'];
						
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