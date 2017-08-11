<?php include 'banner.php'; ?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" content="">
		<title>購物專區</title>
	</head>
	<SCRIPT type="text/javascript">
	var t = new Date();
	var YY = t.getFullYear();	var MM = t.getMonth()+1;	var DD = t.getDate();
	var hh = t.getHours();	var mm = t.getMinutes();	var ss = t.getSeconds();
	var dataOk=0;
	function check(){
		if(reg.user_name.value == "") {alert("未輸入姓名");}
		else if(reg.user_tel.value == "") {alert("未輸入連絡電話");}
		else if(reg.user_email.value == "") {alert("未輸入電子郵件");}
		else if(reg.user_address.value == "") {alert("未輸入收貨地址");}
		else {
			reg.date.value=(YY+"-"+MM+"-"+DD+" "+hh+":"+mm+":"+ss);
			reg.submit();
		}
	}
	function defData(){
		reg.user_name.value=reg.SQL_name.value;
		reg.user_tel.value=reg.SQL_phone.value;
		reg.user_email.value=reg.SQL_mail.value;
		reg.user_address.value=reg.SQL_address.value;
	}
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
					<br><img src="img/banner-item.jpg"><br>
					<font face="微軟正黑體">
					<?php
						if($member_id=="" or $member_passwd==""){
						echo '<p align="center">您尚未登入，請登入後繼續<br>';
						echo '<br><a href="login.php"><input type="button" value="登入"></a><br></p>';
					}else{
						echo "<br>您訂購的資料如下：";
						$link=mysql_connect("localhost","root","12345678");
						mysql_query("SET NAMES 'UTF8'");
						mysql_select_db("main_SQL",$link);
						echo '<br><table border="1"><tr>';
						echo '<td align="center" width="200">商品名稱</td><td align="center" width="50">價錢</td>';
						echo '<td align="center" width="70">購買數量</td><td align="center" width="80">總價</td>';
						echo '</tr>';
						$totPrice=0;
						foreach ($_POST['userN'] as $k => $v) {
							if($v>0){
								$search= "SELECT * FROM `product` WHERE `serial` = '$k'";
								$list=mysql_query($search,$link);
								list($serial,$sort,$name,$price)=mysql_fetch_row($list);
								$tot=$price*$v;
								echo '<tr>';
								echo '<td align="center">'.$name.'</td>';
								echo '<td align="center">'.$price.'</td>';
								echo '<td align="center">'.$v.'</td>';
								echo '<td align="center">'.$tot.'</td>';
								echo "</tr>";
								$totPrice+=$tot;
							}	
						}
						echo '<tr><th align="right" colspan="4">訂購總金額'.$totPrice.'元</th></tr>';
						echo '</table>';
						
						include "user_info.php";
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