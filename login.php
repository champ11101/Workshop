<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="check_login.php">
  <p align="center">Login</p>
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td>Username</td>
        <td><label for="textfield"></label>
        <input type="text" name="username" id="username" placeholder="Enter Username" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label for="textfield2"></label>
        <input type="password" name="password" id="password" placeholder="Enter Password" /></td>
      </tr>
    </table>
  </div>
  <p align="center">
    <input type="submit" name="button" id="button" value="Login" />
  </p>
</form>
</body>
</html>