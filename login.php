<!DOCTYPE html>

<html>

	<head>

		<title>Online Movies</title>
		<meta charset="utf-8">
		<meta name="keywords" content="watch movies, stream movies, movies, movies online">
		<meta name="description" content="Buy movies online and watch anywhere.">
		<meta name="author" content="Jan Nieves">
		<link rel="icon" href="movies.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="normalize.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>

	</head>


	<body class="log-body">

		<?php
			session_start();
			
		?>
		<header class="header">
			<nav class="nav-container">
				<ul class="menu-container">
					<li class="menu-items m_submenu"><div class="bars fas fa-bars">

						<ul class="menu2-container">
							<li class="menu2-items"><div class="m_cat">Categories

								<ul class="menu3-container">
									<li class="menu3-items"><a href="category.php?genre=Action">Action</a></li>
									<li class="menu3-items"><a href="category.php?genre=Comedy">Comedy</a></li>
									<li class="menu3-items"><a href="category.php?genre=Drama">Drama</a></li>
									<li class="menu3-items"><a href="category.php?genre=Documentary">Documentary</a></li>
									<li class="menu3-items"><a href="category.php?genre=Musical">Musical</a></li>
									<li class="menu3-items"><a href="category.php?genre=Romance">Romance</a></li>
									<li class="menu3-items"><a href="category.php?genre=Horror">Horror</a></li>
								</ul>

							</div></li>
								<?php
									if(isset($_SESSION['username'])) {
										echo '<li class="menu2-items"><a href="library.php">Library</a></li>';										
									} else {
										echo '<li class="menu2-items"><a href="login.php">Library</a></li>';
									}
								?>
							
						</ul>

					</div></li>
					<li class="menu-items m_homepage"><a href="index.php" class="fas fa-home"></a></li>
					<li class="menu-items m_searchbox">
						<form action="buy.php" method="post">
						<input type="text" name="movien" required=""></li>
						<input type="submit" name="search" value="search">
						</form>
								<?php
									if(isset($_SESSION['username'])) {
										echo '<li class="menu-items m_userinfo"><a href="account.php" class="fas fa-user-circle"></a></li>';										
									} else {
										echo '<li class="menu-items m_userinfo"><a href="login.php" class="fas fa-user-circle"></a></li>';
									}
								?>
					
					<li class="menu-items m_log"><div class="log fas fa-sign-in-alt">
							
							<ul class="menu-login-out">
								<?php
									if(isset($_SESSION['username'])) {
										echo '<li><a class="m_logout" href="backend/logout.php">Logout</a></li>';										
									} else {
										echo '<li><a class="m_login" href="login.php">Login</a></li>';
										echo '<li><a class="m_login" href="register.php">Register</a></li>';
									}
								?>
								
							</ul>

					</div></li>
				</ul>
			</nav>
		</header>

			<main class="log-main-container">
				<form action="backend/validate.php" method="post" class="log-form">
					<div class="log-items-container">
						<input class="controls" type="text" name="username" value="" placeholder="Username" required="">
					</div>
					<div class="log-items-container">
						<input class="controls" type="password" name="password" value="" placeholder="Password" required="">
					</div>
					<div class="log-items-container">
						<input class="buttons" type="submit" name="login" value="Login">
					</div>
					<div class="log-items-container">
						<p><a class="ref" href="register.php">Register</a></p>
					</div>
				</form>  


		</main>
			
		<footer class="footer">
			<div class="footer-container">
				<ul class="links-list">
						
						<li><a href="aboutus.php" class="footer-links">About Us</a></li>
				</ul>
			</div>
			
		</footer>

	</body>

</html>
