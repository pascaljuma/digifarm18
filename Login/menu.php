<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "profile.php";
		}
		else {
				$link = "../profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../index1.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index1.php">Digifarm</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="..index1.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="About.php"><span class="glyphicon glyphicon-shopping-"> About</span></a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
<!--						<li><a href="../market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>-->
						<li><a href="feedback.php"><span class="glyphicon glyphicon-comment"> Feedback</a></li>
					</ul>
				</nav>
</header>
