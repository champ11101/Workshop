<?php
	//Connect Database "mydatabase"
	mysql_connect("localhost","root","");
	mysql_select_db("mydatabase");
	mysql_query("SET NAMES UTF8");
	
	
	$join = "SELECT * FROM send_message LEFT JOIN friends ON friends.username = send_message.send_to WHERE status = 'false'"; //เลือกข้อความที่ยังไม่ได้ส่ง (false)
	$data = mysql_query($join); //SELECTED, Data is now ready to use.
	
	
	function checkserver($ip){//Check destination status server
		
		$stringGet = "GET / HTTP/1.1\r\nHost: ".$ip."\r\nConnection: Close\r\n\r\n";
		$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		$bool = socket_connect ( $socket , $ip , 80);
		$byteSend = socket_send ( $socket , $stringGet , strlen($stringGet) , 0 );
		$byteReceive = socket_recv($socket, $buffer, 1024, MSG_WAITALL);
		socket_close($socket);
		return $bool;
		
	}
		
	while($show = mysql_fetch_array($data)){
			
				$name = $show['send_to'];
				$message = $show['message'];
				$sender = $show['sender'];
				$ip = $show['IP_address'];
				
				
				checkserver($ip);
				
				if(checkserver($ip)){
					echo "online"." ".$ip." "."return : ".checkserver($ip)."<br>";
				}
				else{
					echo "offline"." ".$ip." "."return : ".checkserver($ip)."<br>";
				}
				
				/*if($bool)//if destination server is online
				{
				
			
						$url = 'http://'.$show['IP_address'].'/Work/ReceiveMassage.php';
						$request = "rname=".$name."&message=".$message."&sender=".$sender;
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, $url); // กำหนดค่า URL
						curl_setopt($ch, CURLOPT_POST, 1); // กำหนดรูปแบบการส่งข้อมูลเป็นแบบ $_POST
						curl_setopt($ch, CURLOPT_POSTFIELDS, $request); // กำหนดค่า HTTP Request
						curl_setopt($ch, CURLOPT_HEADER, 0); // กำหนดให้ cURL ไม่มีการตั้งค่า Header
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;// กำหนดให้ cURL คืนค่าผลลัพธ์
						$respond = curl_exec($ch); //ประมวลผล cURL
						curl_close($ch); //ปิดการใช้งาน cURL
						
						
				}
				else //if destination server is offline
				{
						echo "Can't update : ".$ip." "."offline";
	    		}*/
	}
	
?>