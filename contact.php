 
<?php 

include 'smtp/Send_Mail.php';

if(isset($_POST['submit'] )){

$to="imsurendra99@gmail.com";

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
   
   $body='<html><head>
   <title>Nika Soft inc.</title>
    <body>
 
 From     :<b>'.$name.'</b><br><br>
 Email    :<b>'.$email.'</b><br><br>
 Mobile   :<b>'.$phone.'</b><br><br>
 subject  :<b> Web Mail </b><br><br>
 Message  :<b>'.$message.'</b><br><br>

 <div class="copy-rights">
	 
			 <center><b><p>© 2016 Nika Soft inc. All Rights Reserved</p></b></center>

		</div>
	</div>
</div>
</body></html>' ;
   
    Send_Mail($to,$subject,$body);

  
	echo '<script>alert("Successfully Sent");window.location="./"; </script> ';

 
	 



}


?> 
<!DOCTYPE HTML>
<html>
<head>
<title>Nika Soft inc.</title>
<link rel="icon" type="img/png" src="images/favicon.png">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Allied  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="icon" type="img/png" href="images/favicon.png">
</head>
<body>
<!--header-top start here-->
<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-8 header-address">
				<ul>
					<li><span class="phone"> </span> <h6>(220) 280-31589</h6></li>
					<li><span class="email"> </span><h6><a href="mailto:info@nikasoft.com">contact@nikasoft.com</a></h6></li>
				</ul>
			</div>
			<div class="col-md-4 top-social">
			    <ul>
			    	<li><a href="#"><span class="fb"> </span></a></li>
			    	<li><a href="#"><span class="tw"> </span></a></li>
			    	<li><a href="#"><span class="in"> </span></a></li>
			    	<li><a href="#"><span class="gmail"> </span></a></li>
			    </ul>
			</div>
			
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-top end here-->
<!--header start here-->
	<!-- NAVBAR
		================================================== -->
<div class="header w3l">
	<div class="fixed-header">	

		    <div class="navbar-wrapper">
		      <div class="container">
		        <nav class="navbar navbar-inverse navbar-static-top">
		             <div class="navbar-header">
			              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			              <div class="logo">
			                   <h1><a class="navbar-brand" href="./">Nika Soft</a></h1>
			              </div>
			          </div>
		            <div id="navbar" class="navbar-collapse collapse">
		            <nav class="cl-effect-16" id="cl-effect-16">
		              <ul class="nav navbar-nav">
		               <li><a  href="./" data-hover="Home">Home</a></li>
		                <li><a href="about" data-hover="About">About</a></li>
						<li><a href="services" data-hover="Services">Services</a></li>
						 <li><a  class="active" href="contact" data-hover="Contact">Contact</a></li>						
		              </ul>
		            </nav>

		            </div>
		            <div class="clearfix"> </div>
		             </nav>
		          </div>
		           <div class="clearfix"> </div>
		    </div>
	 </div>
</div>
<!--header end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-agile">
			<div class="contact-top">
				<h2>Contact</h2>
				<p> </p>
			</div>
			<div class="contact-bottom">
				<div class="col-md-4 contact-left">
					<h3>Contact info</h3>
					<p class="con-para">If you have questions, feedback, or would simply like to get in touch with us, please take a moment to fill out our contact form by clicking the link below. We look forward to hearing from you. </p>
					<div class="contact-add">
							<p>Folsom</p>
							<p>California</p>
							<p>(586)769-9037</p>
						</div>
						<ul class="face">
							<li class="active"><a href="#">facebook </a><span>/</span></li>
							<li><a href="#">twitter </a><span>/</span></li>
							<li><a href="#">linkedin </a><span>/</span></li>
							<li><a href="#">dribbble</a></li>
						</ul>

				</div>
				<div class="col-md-8 contact-right">
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Name">
                        <input type="text" class="email" name="email" placeholder="Email">
                        <input type="text" class="in-phone" name="phone" placeholder="Phone">
                        <textarea name="message" placeholder="Message" ></textarea>
                        <input type="submit" name="submit" value="Send">
					</form>
				</div>
			    <div class="clearfix"> </div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99718.39331871175!2d-121.20975687521091!3d38.644286198994195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ae11b89d97a7f%3A0xd44e4c2e31e1ce2a!2sFolsom%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1477128518501" ></iframe> </iframe>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->
<?php include 'footer.php' ?>
</body>
</html>
