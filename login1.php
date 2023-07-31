<html>
<head>
<style type="text/css">
th
{
   text-align: right;
}
h3
{
  text-align: center;
}
</style>
</head>
<body>
<table cellpadding="5" cellspacing="10" align="center">
 <h3>Login  Form using session and cookies with Remember Me</h3>
  <form method="POST" action="validation.php">
   <tr><th>Email</th><td><input type="text"  id="email"  name="email"></td></tr>
  <tr><th>Password</th><td><input type="password"   id="pass" name="password"></td></tr>
   <tr><td colspan ="2" align="center"><input type="checkbox" name="remember"  value="1">Remember Me</td></tr>
   <tr><td colspan ="2" align="right"><input type="submit" name="login"  value="login"></td></tr>
</form>
</table>
</body>
</html>



<?php
  if(isset($_cookie['email']) and isset($_cookie['pass']))
{
    $email =$_cookie['email'];
    $pass =$_cookie['pass'];
    echo "<script>

    document.getElementById('email').value = '$email';
    document.getElementById('pass').value = '$pass';

   </script>";
}
?>
  