<?php include 'banner.php'; ?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" content="">
		<title>訂購清單</title>
	</head>
	
	<body bgcolor="#ECE0C8">
	<p align="center">
	<table bgcolor="white" width="80%">
		<tr>
			<td width="200">
				<?php include 'left-div.php'; ?>
			</td>
			<td  valign="top">
				<p align="center">
					<br><img src="img/banner-car.jpg"><br>
				</p>
					<font face="微軟正黑體">
					<?php
						if($member_id=="" or $member_passwd==""){
						echo '<p align="center">您尚未登入，請登入後繼續<br>';
						echo '<br><a href="login.php"><input type="button" value="登入"></a><br></p>';
					}else{
						$userID=$_POST['stdID'];
						$Date=$_POST['date'];
						
						$link=mysql_connect("localhost","root","12345678");
						mysql_query("SET NAMES 'UTF8'");
						mysql_select_db("main_SQL",$link);
						$search= "SELECT * FROM `sub_list` WHERE `stdID` = '$userID' AND `date` = '$Date'";
						$list=mysql_query($search,$link);
						list($stdID,$date,$total,$buyName,$buyPhone,$buyEmail,$buyAddress)=mysql_fetch_row($list);
						
						echo '<b>訂單成立時間：</b>'.$date;
						echo '  <b>訂單總金額：</b><font color="red">'.$total.'</font><b>元</b><br>';
						echo '買家姓名：'.$buyName.'<br>';
						echo '買家電話：'.$buyPhone.'<br>';
						echo '買家電子信箱：'.$buyEmail.'<br>';
						echo '買家地址：'.$buyAddress.'<br>';
						echo '<b>訂購項目：</b><br>';
						
						echo '<br><table border="1"><tr>';
						echo '<td align="center" width="200">商品名稱</td><td align="center" width="100">訂購數量</td>';
						$search= "SELECT itemID,amount FROM `buy_list` WHERE `stdID` = '$userID' AND `buyDate`= '$date'";
						$list=mysql_query($search,$link);
						$i=0;
						while(list($itemID,$amount)=mysql_fetch_row($list)){
							$Item[$i]=$itemID+1;
							$Amount[$i]=$amount;
							$i++;
						}
						for($k=0;$k<$i;$k++){
							$It=$Item[$k];
							$search= "SELECT name FROM `product` WHERE `serial` = '$It'";
							$list=mysql_query($search,$link);
							list($name)=mysql_fetch_row($list);
							echo '<tr>';
							echo '<td align="center">'.$name.'</td>';
							echo '<td align="center">'.$Amount[$k].'</td>';
							echo "</tr>";
						}
						echo '</table>';
						mysql_close($link);
					}
					
					?>
					<br><input type="submit" value="返回" onClick="parent.location='sub_list.php'">
				</font>
			</td>
		</tr>
	</table>
	<?php include 'buttom-div.php'; ?>
	</p>
	</body>
</html>