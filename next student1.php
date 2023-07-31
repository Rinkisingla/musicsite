
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="css/mystylecopy.css"> 
		  <meta name="viewport" content="width = device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Flamenco:wght@300&display=swap" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
 </head>
<body>
	<header> 
			<nav>	
				<div class="row clearfix">
					<img src="images/logo.jpg" class ="logo" alt="this image is not avilable" >
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

 <div class ="text">Hey! 
<?php
	if(isset($_POST['SEND MESSAGE']))
	{
	session_start();
	$_SESSION["name"]=$_POST['Name'];	
	echo 'rinki'.$_SESSION["name"];
}
?>
<?php
	if(isset($_GET['Explore']))
	{
		session_start();
		$_SESSION["name"]=$_GET['nm'];
		$_SESSION["favcl"]=$_GET['favcolour'];
		echo 'Session created '.$_SESSION["name"].'  '.$_SESSION["favcl"];
	}
?> 

your mail id is 
 We have recorded your response.We will be happy to assist you.</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1738.044905436981!2d76.65543111885839!3d29.396928669340802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390de37459b9a275%3A0xaa9af61312c06268!2sGOPI%20RAM%20FRESH%20FRUITS%20SAFIDON!5e0!3m2!1sen!2sin!4v1603028644960!5m2!1sen!2sin" width="600" height="650" frameborder="2" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
								<div class="login1-box1">
								  <div class="textbox1">
								   <input type="text" placeholder="Name" name="" size="10"></div>
								   <div class="textbox1">
								   <input type="text" placeholder="phone" name="" size="10"></div>
								   <div class="textbox1">
								   <input type="text1" placeholder="Email" name="" size="10">
								  </div>
								 <div class="textbox1">
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
