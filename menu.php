<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">Digifarm</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index1.php"><span class="glyphicon glyphicon-home"></span> About</a></li>
                        <li><a href="account.php"><span class="glyphicon glyphicon-plus"> CreateAccount</span></a></li>
                            <li><a href="login1.php"><span class="glyphicon glyphicon-home"></span> Login</a></li>
                        <li><a href="project.php"><span class="glyphicon glyphicon-grain"> Projects</span></a></li>
                        <li><a href="FAQ.php"><span class="glyphicon glyphicon-comment"> FAQ</span></a></li>
					</ul>
				</nav>
			</header>

<!--
	</body>
</html>
-->
