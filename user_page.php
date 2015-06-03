<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	session_start();
	if($_SESSION['UserID']=="")
	{
		echo "Please Login !!!";
		exit();
	}
	if($_SESSION['Status'] != "USER")
	{
		echo "This page for User only";
		exit();
	}
	mysql_connect("localhost","root","");
	mysql_select_db("mydatabase");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
<html>
<head>
<title>Message</title>
</head>
<body>
	&nbsp;Welcome!!!
<table border="1" width="200">
    <tbody>
    	<tr>
        	<td width="90">&nbsp;Username</td>
            <td width="200">&nbsp;<?php echo $objResult["Username"];?>
			</td>
        </tr>
        <tr>
        	<td> &nbsp;Name</td>
            <td>&nbsp;<?php echo $objResult["Name"];?></td>
        </tr>
    </tbody>
    </table>
    <p><br>
      <a href="logout.php">Logout</a><br>
    </p>
    <p>&nbsp;</p>
    <table width="1315" height="153" border="1">
      <tr>
        <th width="651" height="33" scope="col">ข้อความ</th>
        <th width="648" scope="col">ส่งข้อความ</th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
</body>
    </html>
    