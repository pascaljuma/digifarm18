
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Digifarm</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<?php
		require 'menu.php';
	?>

<!--		 Banner -->
			<section id="banner" class="wrapper">
				<div class="container">
				<h2>Digifarm</h2>
				<p>We Value Your Productivity</p>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
	<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">login</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">register</button>
						</div>
					</div>
                    </center></div>


			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2>Digifarm</h2>
						<p>Explore the new way of farming...</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-sun-o"></i>
							<p>VISION</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-flag"></i>
							<p>MISSION</p>
						</section>\
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-trophy"></i>
                            <p>VALUES</p>
						</section>
					</div>
				</div>
			</section>


		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:grey" id="About">
		<center>
			<h1 style="font: 35px calibri;">About </h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;color:blue">Digifarm &copy; </h3>

			<br />
			<p style="font-size:20px;color:blue">We value your productivity!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px;color:blue">@ Digifarm<span>kwetufarm</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px;color:blue">0743229542</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="https://mail.google.com/mail/u/1/?pc=topnav-about-n-en#inbox" style="color:blue">Digifarm18@gmail.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:blue">
				<span style="font-size:20px"><b>About Digifarm</b></span>
				Digifarm is e-commerce trading platform for grains , grocerries and others...
			</p>
			<div class="footer-icons" style="color:blue">
				<a  href="https://en-gb.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjEzMjg2OTQ2LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="https://www.youtube.com/results?search_query=digifarm"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
			</div>
			</div>

	</footer>


			<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <h3>Login</h3><style>
        margin-left : 20%; margin-right: 20%; text-align : justify; background:cadetblue;</style>
							<form method="post" action="Login/login.php">
								<div class="row uniform 30%">
									<div class="7u$">
										<input type="text" name="username" id="username" value="" placeholder="UserName" style="width:60%" required/>
									</div>
									<div class="7u$">
										<input type="password" name="password" id="password" value="" placeholder="Password" style="width:60%" required/>
									</div>
								</div>
									<div class="row uniform">
										<p>
				                            <b>Category : </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="farmer" name="category" value="1" checked>
				                            <label for="farmer">Farmer</label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="buyer" name="category" value="0">
				                            <label for="buyer">Buyer</label>
				                        </div>
									</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Login" />
										</div>
									</div>
                                </center></form>
								</div>
                </form></div>

<div id="id02" class="modal">

  <form class="modal-content animate" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

<section>
							<h3>SignUp</h3>
							<form method="post" action="Login/signUp.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password" required/>
			                        </div>0
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
									</div>
								</div>
								<div class="row uniform">
									<p>
			                            <b>Category : </b>
			                        </p>
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="farmer" name="category" value="1" checked>
			                            <label for="farmer">Farmer</label>
			                        </div>
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="buyer" name="category" value="0">
			                            <label for="buyer">Buyer</label>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
                                        <input type="submit" value="Submit" name="submit" class="special" ></div>
									</div>
									<div class="3u 12u$(small)">
                                        <input type="reset" value="Reset" name="reset"/></div></center></form></section>
									</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


    </form></div></html>
