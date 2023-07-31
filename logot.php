<?php
session_start();
session_destroy();
  if(isset($_cookie['email']) and isset($_cookie['pass']))
{
    $email =$_cookie['email'];
    $pass =$_cookie['pass'];
 
  setcookie('email',$email,time()-1);
   setcookie('pass',$pass,time()-1);
}
echo "you successfully logout. click here to  <a href='login1.php  '>login  again</a>";
              
?>