<?php include 'banner.php'; ?>
 <html>
	<head>
	<title>購物專區</title>
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
					<br><img src="img/banner-item.jpg"><br>
				</p>

					<font face="微軟正黑體">
					<?php
						$link=mysql_connect("localhost","root","12345678");
						mysql_query("SET NAMES 'UTF8'");
						mysql_select_db("main_SQL",$link);
					?>
					
					<form name="reg" method="POST" action="product_list.php">
					<p align="center">
					<table width="80%">
					<tr><td align="center">
					<?php
						$search= "SELECT * FROM `product` WHERE `sort` = '原味茶品'";
						$list=mysql_query($search,$link);
						echo '<font size="5" color="green">==原味茶品==</font>';
						echo '<br><table border="1"><tr>';
						echo '<td align="center">商品名稱</td><td align="center">價錢</td><td align="center">購買數量</td>';
						echo '</tr>';
						while(list($serial,$sort,$name,$price)=mysql_fetch_row($list)){
							echo '<tr>';
							echo '<td align="center" width="200">'.$name.'</td>';
							echo '<td align="center" width="30">'.$price.'</td>';
							echo '<td align="center" width="50"><select name="userN['.$serial.']" size="1">';
							for($i=0;$i<=10;$i++){echo "<option value=\"$i\">$i</option>";}
							echo "</select></td>";
							echo "</tr>";
						}
						echo '</table>';
					?>
					</td><td align="center">
					<?php
						$search= "SELECT * FROM `product` WHERE `sort` = '奶茶特調'";
						$list=mysql_query($search,$link);
						echo '<font size="5" color="green">==奶茶特調==</font>';
						echo '<br><table border="1"><tr>';
						echo '<td align="center">商品名稱</td><td align="center">價錢</td><td align="center">購買數量</td>';
						echo '</tr>';
						while(list($serial,$sort,$name,$price)=mysql_fetch_row($list)){
							echo '<tr>';
							echo '<td align="center" width="200">'.$name.'</td>';
							echo '<td align="center" width="30">'.$price.'</td>';
							echo '<td align="center" width="50"><select name="userN['.$serial.']" size="1">';
							for($i=0;$i<=10;$i++){echo "<option value=\"$i\">$i</option>";}
							echo "</select></td>";
							echo "</tr>";
						}
						echo '</table>';
					?>
					</td></tr>
					<tr><td align="center">
					<?php
						$search= "SELECT * FROM `product` WHERE `sort` = '冰沙系列'";
						$list=mysql_query($search,$link);
						echo '<font size="5" color="green">==冰沙系列==</font>';
						echo '<br><table border="1"><tr>';
						echo '<td align="center">商品名稱</td><td align="center">價錢</td><td align="center">購買數量</td>';
						echo '</tr>';
						while(list($serial,$sort,$name,$price)=mysql_fetch_row($list)){
							echo '<tr>';
							echo '<td align="center" width="200">'.$name.'</td>';
							echo '<td align="center" width="30">'.$price.'</td>';
							echo '<td align="center" width="50"><select name="userN['.$serial.']" size="1">';
							for($i=0;$i<=10;$i++){echo "<option value=\"$i\">$i</option>";}
							echo "</select></td>";
							echo "</tr>";
						}
						echo '</table>';
					?>
					</td><td align="center">
					<?php
						$search= "SELECT * FROM `product` WHERE `sort` = '鮮奶特調'";
						$list=mysql_query($search,$link);
						echo '<font size="5" color="green">==鮮奶特調==</font>';
						echo '<br><table border="1"><tr>';
						echo '<td align="center">商品名稱</td><td align="center">價錢</td><td align="center">購買數量</td>';
						echo '</tr>';
						while(list($serial,$sort,$name,$price)=mysql_fetch_row($list)){
							echo '<tr>';
							echo '<td align="center" width="200">'.$name.'</td>';
							echo '<td align="center" width="30">'.$price.'</td>';
							echo '<td align="center" width="50"><select name="userN['.$serial.']" size="1">';
							for($i=0;$i<=10;$i++){echo "<option value=\"$i\">$i</option>";}
							echo "</select></td>";
							echo "</tr>";
						}
						echo '</table>';
					?>
					</td></tr>
					</table>
					<p align="center"><input type="submit" value="購買商品"></p>
					</p></form>
					<?php
						$search= "SELECT stdID,name,passwd FROM `member` WHERE `stdID` = '$member_id'";
						$list=mysql_query($search,$link);
						list($stdID,$name,$passwd)=mysql_fetch_row($list);
						$stdID=$_SESSION['stdID'];
						$passwd=$_SESSION['passwd'];
						$name=$_SESSION['name'];
					?>
					<?php mysql_close($link); ?>
				</font>
			</td>
		</tr>
	</table>
	<?php include 'buttom-div.php'; ?>
	</p>
	</body>
</html>