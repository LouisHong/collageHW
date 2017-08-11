<form name="reg" method="POST" action="buying_list.php">
<?php
	$search= "SELECT * FROM `member` WHERE `stdID` = '$member_id'";
	$list=mysql_query($search,$link);
	
	list($stdID,$name,$sex,$birthday,$passwd,$depart,$mail,$phone,$address,$reg_time,$log_time)=mysql_fetch_row($list);

	echo '<input type="hidden" name="SQL_name" value="'.$name.'">';
	echo '<input type="hidden" name="SQL_mail" value="'.$mail.'">';
	echo '<input type="hidden" name="SQL_phone" value="'.$phone.'">';
	echo '<input type="hidden" name="SQL_address" value="'.$address.'">';
	echo '<input type="hidden" name="total" value="'.$totPrice.'">';
	
	foreach ($_POST['userN'] as $k => $v) {echo '<input type="hidden" name="buyNum[]" value="'.$v.'">';}
?>
<p align="center">
	<table>
		<p align="center"><input type="button" value="使用會員資料" onClick="defData()"></p>
		<p align="center"><table border="1">
			<tr>
				<td width="100">尊姓大名：</td>
				<td width="300"><input type="text" name="user_name" size="20"></td>
			</tr>
			<tr>
				<td>連絡電話：</td>
				<td><input type="text" name="user_tel" size="20"></td>
			</tr>
			<tr>
				<td>電子郵件：</td>
				<td><input type="text" name="user_email" size="40"></td>
			</tr>
			<tr>
				<td>收貨地址：</td>
				<td><input type="text" name="user_address" size="40"></td>
			</tr>
	 	</table></p>
	 	<input type="hidden" name="date" value=" ">
	 	<p align="center"><input type="button" value="確認送出" onClick="check()"></p>
	</table>
</p>
</form>
