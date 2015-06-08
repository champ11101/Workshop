<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	mysql_connect("localhost","root","");
	mysql_query("SET NAMES UTF8");
	mysql_select_db("mydatabase");
	
	
	
	
	$ip = mysql_query("SELECT message, sender FROM send_message WHERE status = 'false' ");
	$info = mysql_fetch_array($ip);
		
	 //while($info = mysql_fetch_array($ip)){
		//echo $info['message']."&nbsp;".$info['sender']."<br>";
	 //}
	
	if(empty($info))
	{
		echo "ข้อความถูกส่งหมดแล้ว";
	}
	else
	{
		echo "มีข้อความยังไม่ได้ส่ง";
	}
	
	
?>
</body>
</html>