<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
</body>
</html>
<?php
	mysql_connect("localhost","root","") or die ("Unable connect database");
	mysql_query("SET NAMES UTF8");
	mysql_select_db("mydatabase") or die ("Unable select database");
	
	$keyword = $_POST['textfield'];
	$check = mysql_query("SELECT username FROM friends WHERE (username = '$keyword') ");
	$data = mysql_fetch_array($check);
	if(empty($data)){
		echo "คุณไม่มีเพื่อนชื่อ ".$_POST['textfield'];}
		else
		{
			mysql_query("INSERT INTO send_message (send_to, message) values ('$_POST[textfield]','$_POST[textarea]')");
			echo "บันทึกข้อความลงฐานข้อมูลรอส่งเรียบร้อย";
			}
	mysql_close();
?>
