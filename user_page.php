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
	mysql_query("SET NAMES UTF8");
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
<a href="logout.php">Logout</a>
<div align="right">
  <table width="150" height="150" border="1">
    <tr>
      <th scope="col">รายชื่อเพื่อน</th>
    </tr>
    <tr>
      <td>
	    <div align="center" style="width: 150px; height: 130px; overflow-y: scroll; scrollbar-arrow-color:blue; scrollbar-face-color: #e7e7e7; 
              scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:#888888">
	      <?php
	  $friend = mysql_query("SELECT username FROM friends ORDER BY username ASC") or die(mysql_error());
	  while($show = mysql_fetch_array($friend)){
		  echo $show["username"]."<br><br>";
		  }
      ?></div></td>
    </tr>
  </table>
  <br>
</div>
<div align="center">
  <table width="981" height="363" border="1">
        <tr>
          <th width="560" height="33" scope="col">ข้อความ</th>
          <th width="405" scope="col">ส่งข้อความ</th>
        </tr>
        <tr>
          <td height="322"><div align="center" style="width: 560px; height: 300px; overflow-y: scroll; scrollbar-arrow-color:blue; scrollbar-face-color: #e7e7e7; 
              scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:#888888">
			  <?php
		  mysql_select_db("mydatabase");
		  $data = mysql_query("SELECT sender, message FROM message ORDER BY ID DESC") or die(mysql_error());
		  ?>
		  <?php
		  while($info = mysql_fetch_array($data)){?>
			  
              จาก : <?php echo $info["sender"];?><br />
              ข้อความ : <?php echo $info["message"];?><br /><br />
			  
		  <?php
          }
          ?></div>
          
          <?php
		  mysql_close();
		  ?>
          </td>
          <td><form id="form1" name="form1" method="post" action="savemessage.php">
            <div align="center">
              <p>ส่งข้อความถึง : 
                <label for="textfield"></label>
                <input type="text" name="textfield" id="textfield" />
              </p>
              <p align="center">ข้อความที่จะส่ง : 
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
    