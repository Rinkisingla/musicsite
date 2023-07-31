<?php
      $myemail="abc123@gmail.com";
      $mypass = "12345";

      if(isset($_POST['login']))
         {
               $email =$_POST['email'];
                $pass = $_POST['password'];
                $rem = $_POST['remember'];
                  
              if($email ==$myemail and $pass ==$mypass)
                 {
                          $rem = $_POST['remember'];
                          if(isset($_POST['remember']))
                               {
                                      setcookie('email',$email,time()+60*60*7);
                                      setcookie('pass',$pass,time()+60*60*7);
                               }
                                      session_start();
                                       $_SESSION['email'] = $email;
                                       header("Location: welcome.php");
                   }
              else
                {
                      echo"Email orPassword is Invalid.<br> click here to <a href='login1.php  '>try again</a>";
               }
   }
else
{
   header("Location :login1.php ");
}
?>
