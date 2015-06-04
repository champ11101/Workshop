<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	session_start();
	if($_SESSION['UserID'] == "")
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
<table border="1" width="248">
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
<div align="center">
  <table width="1315" height="153" border="1">
        <tr>
          <th width="651" height="33" scope="col">ข้อความ</th>
          <th width="648" scope="col">ส่งข้อความ</th>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><form id="form1" name="form1" method="post" action="">
            <div align="center">
              <p>ส่งข้อความถึง : 
                <label for="textfield"></label>
                <input type="text" name="textfield" id="textfield" />
              </p>
              <p>ข้อความที่จะส่ง : 
                <label for="textarea"></label>
                <textarea name="textarea" id="textarea" cols="45" rows="10"></textarea>
              </p>
              <p>
                <input type="submit" name="button" id="button" value="ส่งข้อความ" />&nbsp;&nbsp;
                <input type="reset" name="button2" id="button2" value="รีเซ็ต" />
              </p>
            </div>
          </form></td>
        </tr>
      </table>
</div>
    <p>&nbsp;</p>
</body>
    </html>