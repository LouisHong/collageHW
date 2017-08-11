<?php include 'banner.php'; ?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" content="">
		<title>購物專區</title>
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
					<br><img src="img/banner-item.jpg"><br>
					<font face="微軟正黑體">
					<?php
						if($member_id=="" or $member_passwd==""){
						echo '<p align="center">您尚未登入，請登入後繼續<br>';
						echo '<br><a href="login.php"><input type="button" value="登入"></a><br></p>';
					}else{
						$BuyName=$_POST['user_name'];
						$BuyPhone=$_POST['user_tel'];
						$BuyMail=$_POST['user_email'];
						$BuyAddress=$_POST['user_address'];
						$BuyDate=$_POST['date'];
						$BuyTot=$_POST['total'];
						$BuyNum=$_POST['buyNum'];
						
						echo "<br><h3>您的訂單已成立!!</h3>";
						$link=mysql_connect("localhost","root","12345678");
						mysql_query("SET NAMES 'UTF8'");
						mysql_select_db("3A417012",$link);
						
						echo '<b>訂單成立時間：</b>'.$BuyDate;
						echo '  <b>訂單總金額：</b><font color="red">'.$BuyTot.'</font><b>元</b><br>';
						echo '<b>訂購項目：</b><br>';
						echo '<br><table border="1"><tr>';
						echo '<td align="center" width="200">商品名稱</td><td align="center" width="100">訂購數量</td>';
						$insert_List= "INSERT INTO `sub_list` (`stdID`,`date`,`total`,`buyName`,`buyPhone`,`buyEmail`,`buyAddress`) VALUES ('$member_id','$BuyDate','$BuyTot','$BuyName','$BuyPhone','$BuyMail','$BuyAddress')";
						$list=mysql_query($insert_List,$link)or die("新增資料失敗");
						
						foreach ($BuyNum as $k => $v) {
							if($v>0){
								$kk=$k+1;
								$search= "SELECT name FROM `product` WHERE `serial` = '$kk'";
								$list=mysql_query($search,$link);
								list($name)=mysql_fetch_row($list);
								echo '<tr>';
								echo '<td align="center">'.$name.'</td>';
								echo '<td align="center">'.$v.'</td>';
								echo "</tr>";
								$insert_Data= "INSERT INTO `buy_list` (`itemID`,`amount`,`tot`,`stdID`,`buyDate`) VALUES ('$k','$v','$BuyTot','$member_id','$BuyDate')";
								$list=mysql_query($insert_Data,$link)or die("新增資料失敗");
							}
						}
						echo '</table><br>';
						echo '買家姓名：'.$BuyName.'<br>';
						echo '買家電話：'.$BuyPhone.'<br>';
						echo '買家電子信箱：'.$BuyMail.'<br>';
						echo '買家地址：'.$BuyAddress.'<br>';
						
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