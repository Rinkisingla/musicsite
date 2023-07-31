<?php
include_once 'projectconnect.php';
		if(isset($_POST['display']))
		{
			$rem= $_POST['remember'];

			$result = mysqli_query($conn, "SELECT * from stdinfo where Email='$_POST[Email]' and password ='$_POST[Password]' ");
				$num_rows = mysqli_num_rows($result);
				if($num_rows > 0)
				{
					while($rowval = mysqli_fetch_array($result))
					{
						$fname= $rowval['Firstname'];
						$lname= $rowval['Lastname'];
						$Email= $rowval['Email'];
						$Password= $rowval['Password'];
						$Phnno = $rowval['Phnno'];
						$course =$rowval['course'];
					}
					 mysqli_close($conn);
				 }
				 else
				 {
					session_start();
					$_SESSION["Emailid"]=$_POST['Email'];
echo <<<'EOT'
					<html>
					<head>
						<link rel="stylesheet" type="text/css" href="css/st.css">
						<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Flamenco:wght@300&display=swap">
     						<meta name="viewport" content="width = device-width, initial-scale=1.0">
     						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
     						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					</head>
					<body>
						<header> 
							<nav>	
								<div class="row clearfix">
								<img src="images/logo.jpg" class ="logo1" alt="this image is not avilable" >
								<ul class= "main-nav1 animate__animated animate__slideInRight" id="check-class">
									<li>Call Us:9306655812</li> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
									<li> Email Us:musicacademy13@.com </li>&nbsp;
									<li><a href="https://www.instagram.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>&nbsp;&nbsp;

								</ul>
								<ul class= "main-nav animate__animated animate__slideInDown" id="check-class">
									<b>
									<li><a href="first_website.html">about us</a></li>
									<li><a href="img2.html">team members</a></li>
									<li><a href="gallery (2).html">interst</a></li>
									<li><a href="course.html">courses</a></li>
									<li><a href="next student.html">contactus</a></li>
									</b>
									<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
								</ul>
								<a href="#" class="mobile-icon"  onclick="slideshow()"><i class="fa fa-bars"> </i></a>
							</div>
						</nav>
					</header>
				<section>
				<div class="signin"><br><br><br><br><br><br><br> 
EOT;
						echo'PLZ REGISTER YOURSELF FIRST<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$_SESSION["Emailid"].'<br><br>';
echo<<<'EOT'
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="singin.html">SIGN UP</a>
				</div>
				</section>
				<footer id ="footer">
					<div class="container">
						<div class="box">
							<div class="adjust">
								<h2><img src="images\logo.jpg" alt =" the event "> ABOUT US</h2>
								<p>
									 Music Academy is designed specifically to train you in all the professional activities as a music director, Music Producer,Music Programmer, Music Arranger or Record Producer. Music Academy has created Sound Engineering courses for all the budding Engineers and Musicians who wish to make a mark in the music industry.
								</p>
							</div>		
						</div>
						<div class="box">
								<h2>COURSES</h2>
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="keyboard.html">keyboard classes</a></li>  
									<li><i class="fa fa-angle-right"> </i> <a href="harmony.html">harmonium classes</a> </li>
									<li><i class="fa fa-angle-right"></i><a href="guitar.html">guitar classes</a></li>
									<li><i class="fa fa-angle-right"></i><a href="info.html">vocal classes</a></li>
									<li><i class="fa fa-angle-right"></i><a href="piano class.html">piano classes</a></li>
								</ul>
						</div>	
						<div class="box">
								<h2>Any Query</h2>
								<div class="login-box">
								  <div class="textbox">
								   <input type="text" placeholder="Name" name="" size="10"></div>
								   <div class="textbox">
								   <input type="text" placeholder="phone" name="" size="10"></div>
								   <div class="textbox">
								   <input type="text" placeholder="Email" name="" size="10">
								  </div>
								 <div class="textbox">
								   <input type="Query" placeholder="Query" name="" size="10">
								  </div>
								  
								 <input class="btn1 btn1-nav" type="button" value="SEND  MESSAGE">
								</div>
						</div>
						<div class="box">
								<h2>CONTACT US</h2>
								<p>
									<a href="next student.html"><i class="fa fa-map-marker" aria-hidden="true"></a></i>24 BLOCK D</br>
                  					ANAJ MANDI SAFIDON </br>
                  					India</br>
									<i class="fa fa-phone" aria-hidden="true"></i><strong>Phone: </strong>+91-9306584415</br>
									<i class="fa fa-envelope" aria-hidden="true"></i><strong>Email: </strong>musicacademy13@gmail.com</br>
								</p>
								<div class="social">
									<a href="#"class="twitter"><i class="fa fa-youtube-play"></i></a>
									<a href="#"class="twitter"><i class="fa fa-facebook"></i></a>
									<a href="#"class="twitter"><i class="fa fa-instagram"></i></a>
								</div>	
						</div>
					</div>	
					<div class="container1">
						<div class="copyright">
							&copy; Copyright <strong>music academy</strong> ALL Right Reserved
						</div>
						<div class="credits">
							Designed  by <a href="first_website.html">music acadmey</a>
						</div>
					</div>
			</footer>
		</div>
		</body>
EOT;
exit;			
 }
}
if(isset($_POST['ins']))
	{
		{
			$fname= $_POST['fname'];
			$lname= $_POST['lname'];
			$Email= $_POST['Email'];
			$Password= $_POST['Password'];
			$Phnno = $_POST['Phnno'];
			foreach( $_POST['course'] as $c)
			{
				$course = $c;
			}
			
		$sql ="INSERT INTO `stdinfo` (`Firstname`, `Lastname`, `Email`, `Password`, `Phnno`,`course`) VALUES ('$fname','$lname','$Email','$Password','$Phnno','$course') ";
		 
		}
		$result = mysqli_query($conn, "SELECT * from stdinfo where Email='$_POST[Email]' and password ='$_POST[Password]' ");
			{
						 	while($rowval = mysqli_fetch_array($result))
							{
							$fname= $rowval['Firstname'];
							$lname= $rowval['Lastname'];
							$Email= $rowval['Email'];
							$Password= $rowval['Password'];
							$Phnno = $rowval['Phnno'];
							$course =$rowval['course'];
							}
			}	
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/siign.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Flamenco:wght@300&display=swap">
     <meta name="viewport" content="width = device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<header> 
			<nav>	
				<div class="row clearfix">
					<img src="images/logo.jpg" class ="logo1" alt="this image is not avilable" >
					<ul class= "main-nav1 animate__animated animate__slideInRight" id="check-class">
					<li>Call Us:9306655812</li>
					&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<li> Email Us:musicacademy13@.com </li>&nbsp;
					<li><a href="https://www.instagram.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>&nbsp;&nbsp;

					</ul>
					<ul class= "main-nav animate__animated animate__slideInDown" id="check-class">
					<b>
					<li><a href="first_website.html">about us</a></li>
					<li><a href="img2.html">team members</a></li>
					<li><a href="gallery (2).html">interst</a></li>
					<li><a href="course.html">courses</a></li>
					<li><a href="next student.html">contactus</a></li>
					</b>
					<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
					</ul>
					<a href="#" class="mobile-icon"  onclick="slideshow()"><i class="fa fa-bars"> </i></a>
				</div>
			</nav>
		</header>
		<section>
		<div class="signin">
			<form method="Post">
				<h2 style="color: #fff">LogIn</h2><br>

				<h2 style="color: #fff ; font-size: 12px"> Congrats!! You have been login sucessfully.</h2>
				<input class="tess" type="text" name="fname" value='<?php echo  $fname; ?>'><br><br>
				<input class="tess" type="text" name="lname" value='<?php echo  $lname; ?>'><br><br>
				<input class="tess" type="text" name="Email" value='<?php echo  $Email; ?>'><br><br>
				<input  class="tess" type="password" name="Password" value='<?php echo  $Password; ?>'><br><br>
				<input  class="tess" type="text" name="Password" value='<?php echo  $Phnno; ?>'><br><br>
				<input  class="tess" type="text" name="Phnno" value='<?php echo  $course; ?>'><br><br>
  				
			</form>
		</div>
		</section>
	<footer id ="footer">
					<div class="container">
						<div class="box">
							<div class="adjust">
								<h2><img src="images\logo.jpg" alt =" the event "> ABOUT US</h2>
								<p>
									 Music Academy is designed specifically to train you in all the professional activities as a music director, Music Producer,Music Programmer, Music Arranger or Record Producer. Music Academy has created Sound Engineering courses for all the budding Engineers and Musicians who wish to make a mark in the music industry.
								</p>
							</div>		
						</div>
						<div class="box">
								<h2>COURSES</h2>
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="keyboard.html">keyboard classes</a></li>  
									<li><i class="fa fa-angle-right"> </i> <a href="harmony.html">harmonium classes</a> </li>
									<li><i class="fa fa-angle-right"></i><a href="guitar.html">guitar classes</a></li>
									<li><i class="fa fa-angle-right"></i><a href="info.html">vocal classes</a></li>
									<li><i class="fa fa-angle-right"></i><a href="piano class.html">piano classes</a></li>
								</ul>
						</div>	
						<div class="box">
								<h2>Any Query</h2>
								<div class="login-box">
								  <div class="textbox">
								   <input type="text" placeholder="Name" name="" size="10"></div>
								   <div class="textbox">
								   <input type="text" placeholder="phone" name="" size="10"></div>
								   <div class="textbox">
								   <input type="text" placeholder="Email" name="" size="10">
								  </div>
								 <div class="textbox">
								   <input type="Query" placeholder="Query" name="" size="10">
								  </div>
								  
								 <input class="btn1 btn1-nav" type="button" value="SEND  MESSAGE">
								</div>
						</div>
						<div class="box">
								<h2>CONTACT US</h2>
								<p>
									<a href="next student.html"><i class="fa fa-map-marker" aria-hidden="true"></a></i>24 BLOCK D</br>
                  					ANAJ MANDI SAFIDON </br>
                  					India</br>
									<i class="fa fa-phone" aria-hidden="true"></i><strong>Phone: </strong>+91-9306584415</br>
									<i class="fa fa-envelope" aria-hidden="true"></i><strong>Email: </strong>musicacademy13@gmail.com</br>
								</p>
								<div class="social">
									<a href="#"class="twitter"><i class="fa fa-youtube-play"></i></a>
									<a href="#"class="twitter"><i class="fa fa-facebook"></i></a>
									<a href="#"class="twitter"><i class="fa fa-instagram"></i></a>
								</div>	
						</div>
					</div>	
					<div class="container1">
						<div class="copyright">
							&copy; Copyright <strong>music academy</strong> ALL Right Reserved
						</div>
						<div class="credits">
							Designed  by <a href="first_website.html">music acadmey</a>
						</div>
					</div>
			</footer>
		</div>
		<script>
		function slideshow()
		{
			var x = document.getElementById('check-class');
			if(x.style.display==="none")
			{
				x.style.display="block";
			}
			else
			{
			x.style.display="none";
			}
		}
		</script>
</body>
</html>