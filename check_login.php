<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("mydatabase");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['username']).
	"' and Password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "Username or Password Incorrect";
	}
	else
	{
		$_SESSION["UserID"] = $objResult["UserID"];
		$_SESSION["Status"] = $objResult["Status"];
		
		session_write_close();
		
		if($objResult["Status"] == "ADMIN")
		{
			header("location:admin_page.php");
		}
		else
		{
			header("location:user_page.php");
		}
	}
	mysql_close();
?>