
<html>
	 <head>
		 <title>my first website</title>
		 <link rel ="stylesheet" type="text/css" href="css/csss1.css"> 
		<link rel="stylesheet" type="text/css" href="css/style6.css">
		<link rel="stylesheet" type="text/css" href="css/mystyle7.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		 <meta name="viewport" content="width = device-width, initial-scale=1.0">
		 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Flamenco:wght@300&display=swap" >
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 </head>
	 <body>
		<header> 
		<?php
		if (!isset($_COOKIE['count'])) { 
  $cookie = 1;
 setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count']; 
   setcookie("count", $cookie);
  echo "Visits:".$_COOKIE['count']; 
  }
  ?>

      	<nav>
	        <div class="row clearfix">
	          <img src="images/logo.jpg" class ="logo" alt="this image is not avilable" >
	          <ul class= "main-nav1 animate__animated animate__slideInRight" id="check-class">
		          <li>Call Us:9306655812</li>
		          &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
		          <li> Email Us:musicacademy13@.com </li>&nbsp;
		          <li><a href="https://touch.facebook.com/MUSIC-Classes-106831961389270/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
		          
				  <li><a href=https://www.instagram.com/music_classes12/><i class="fa fa-instagram" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
		          <li><a href="https://www.youtube.com/channel/UCDKayYHTO56C3qzouIpvELw"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
	          </ul>
	          <ul class= "main-nav animate__animated animate__slideInDown" id="check-class">
		          <li><a href="first_website.php">about us</a></li>
		          <li><a href="img2.html">team members</a></li>
		          <li><a href="gallery (2).html">interst</a></li>
		          <li><a href="course.html">courses</a></li>
		          <li><a href="next student.html">contactus</a></li>
		         
		      </ul>
		     
	          	<a href="#" class="mobile-icon"  onclick="slideshow()"><i class="fa fa-bars"> </i></a>
	        </div>
      </nav>
			<div class= "main-content-header">
				<h1> welcome to <span class="colorchange">music academy</span>.<br>
					fell and learn music </h1>
				<a href="singin.html" class="btn btn-full">enroll u now</a>
				<a href="start.html" class="btn btn-nav">login</a>
			</div>
		</header>
		
			<div class="rev-section">
		<h2 class ="title">our Guests Love Us</h2>
		<p class="note">Thanks  four your review. we will definitely work on your feedback.</p>
			<div class="reviews main-nav ">
		<div class="review">
					<div class="head-review">
						<img src="images/18.jpg" width="250px" class="img1">
					</div>
					<div class="body-review">
						<div class="name-review"> Rinki.</div>
						<div class="place-review">Panipat</div>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="desc-review">Thanks  four your review. we will definitely work on your feedback.</div>
					</div>
				</div>
				<div class="review">
					<div class="head-review">
						<img src="images/w11.jpg" width="250px"class="img1">
					</div>
					<div class="body-review">
						<div class="name-review">Master Rafi.</div>
						<div class="place-review">Kernal</div>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="desc-review">Thanks  four your review. we will definitely work on your feedback.</div>
					</div>
				</div>
				
				
				<div class="review">
					<div class="head-review">
						<img src="images/w9.jpg" width="250px" class="img1">
					</div>
					<div class="body-review">
						<div class="name-review">Sourav.</div>
						<div class="place-review">Kernal</div>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="desc-review">Thanks  four your review. we will definitely work on your feedback.</div>
					</div>
				</div>
			</div>
		</div>
		<video  id="slider" src="images/1.mp4" autoplay muted loop ></video>
		
		<ul class="navigation">
			 <li Onclick="videoUrl('images/1.mp4')"><img src="images/w1.jpg"></li>
			 <li Onclick="videoUrl('images/2.mp4')"><img src="images/w2.jpg"></li>
			 <li Onclick="videoUrl('images/3.mp4')"><img src="images/w3.jpg"></li>
			 <li Onclick="videoUrl('images/4.mp4')"><img src="images/w4.jpg"></li>
		</ul><script type="text/javascript">
	function videoUrl(hmmmmmm)
				{
		  			document.getElementById("slider").src= hmmmmmm;
				}'

				
</script>

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
									<a href="https://www.youtube.com/channel/UCDKayYHTO56C3qzouIpvELw"class="twitter"><i class="fa fa-youtube-play"></i></a>
									<a href="https://touch.facebook.com/MUSIC-Classes-106831961389270/" class="twitter"><i class="fa fa-facebook"></i></a>
									<a href="https://www.youtube.com/channel/UCDKayYHTO56C3qzouIpvELww"class="twitter"><i class="fa fa-instagram"></i></a>
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


