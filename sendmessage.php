<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	mysql_connect("localhost","root","");
	mysql_select_db("mydatabase");
	mysql_query("SET NAMES UTF8");
	
	
	
	$ip = "SELECT * FROM send_message LEFT JOIN friends ON friends.username = send_message.send_to WHERE status = 'false'";
	$data = mysql_query($ip);//SELECTED, Ready to use data
	
	
	if(empty($data))
	{
		echo "ข้อความถูกส่งหมดแล้ว";
	}
	else
	{
		echo "มีข้อความยังไม่ได้ส่ง"."<br>";
		
		
		while($show = mysql_fetch_array($data)){
			
			$url = 'http://'.$show['IP_address'].'/Work/ReceiveMassage.php';
	$request = 'sender='.$show['sender'].'&message='.$show['message'];
	
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, $url); // กำหนดค่า URL
	curl_setopt($ch, CURLOPT_POST, 1); // กำหนดรูปแบบการส่งข้อมูลเป็นแบบ $_POST
	curl_setopt($ch, CURLOPT_POSTFIELDS, $request); // กำหนดค่า HTTP Request
	curl_setopt($ch, CURLOPT_HEADER, 0); // กำหนดให้ cURL ไม่มีการตั้งค่า Header
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;// กำหนดให้ cURL คืนค่าผลลัพธ์
	
	$respond = curl_exec($ch); //ประมวลผล cURL
	curl_close($ch); //ปิดการใช้งาน cURL
	
	echo $respond; //แสดงผลการทำงาน
		}
	}
	
		echo "ส่งข้อความหมดแล้ว";//แจ้งเตือนหลังส่งข้อความหมด (หลุดลูป if)
		
		
		
	
		
		
	
		
		
		
		/*if(empty($show))
	{
		echo "ข้อความถูกส่งหมดแล้ว";
	}
	else
	{
		echo "มีข้อความยังไม่ได้ส่ง"."<br>";
		while($show = mysql_fetch_array($data)){
		echo $show['send_to']." ".$show['message']." ".$show['IP_address']." ".$show['status']."<br>";}
	}*/
			
		
	
	
	
	
?>
</body>
</html>