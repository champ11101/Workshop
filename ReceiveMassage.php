<?php
$rname = $_POST["rname"];
$message = $_POST["message"];
$sender = $_POST["sender"];


	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("mydatabase");
	mysql_query("SET NAMES UTF8");
	$strSQL = "INSERT INTO message ";
	$strSQL .="(recipients,message,sender)";
	$strSQL .=" VALUES ";
	$strSQL .="('$rname','$message','$sender') ";
	mysql_query($strSQL);
	if($objQuery)
	{	
		echo "Insert complete";
	}
	else
	{
		echo "Error  [".$strSQL."]";
		
	}
	
	mysql_close();

?>