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


	<body class="body">
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

		<main class="main-container">

			<div class="movie-all-container">
				<h2 class="movie_header">Action</h2>						
			<section class="movies m_action">
				<div class="movie_flex_container">
					<?php
						require_once 'backend/show_products.php';
						action();
					?>
				</div>
			</section>
				<h2 class="movie_footer"><a class="seeall" href="category.php?genre=Action">See All</a></h2>
			</div>
				
				
			<div class="movie-all-container">
				<h2 class="movie_header">Comedy</h2>						
			<section class="movies m_comedy">
				<div class="movie_flex_container">
					<?php
						require_once 'backend/show_products.php';
						comedy();
					?>
				</div>
			</section>
				<h2 class="movie_footer"><a class="seeall" href="category.php?genre=Comedy">See All</a></h2>
			</div>

			<div class="movie-all-container">
				<h2 class="movie_header">Drama</h2>						
			<section class="movies m_drama">
				<div class="movie_flex_container">
					<?php
						require_once 'backend/show_products.php';
						drama();
					?>
				</div>
			</section>
				<h2 class="movie_footer"><a class="seeall" href="category.php?genre=Drama">See All</a></h2>
			</div>

			<div class="movie-all-container"> 
				<h2 class="movie_header">Documentary</h2>						
			<section class="movies m_documentary">
				<div class="movie_flex_container">
					<?php
						require_once 'backend/show_products.php';
						documentary();
					?>
				</div>
			</section>
				<h2 class="movie_footer"><a class="seeall" href="category.php?genre=Documentary">See All</a></h2>
			</div>

			<div class="movie-all-container">
				<h2 class="movie_header">Musical</h2>						
			<section class="movies m_musical">
				<div class="movie_flex_container">
					<?php
						require_once 'backend/show_products.php';
						musical();
					?>
				</div>
			</section>
				<h2 class="movie_footer"><a class="seeall" href="category.php?genre=Musical">See All</a></h2>
			</div>

			<div class="movie-all-container">
				<h2 class="movie_header">Romance</h2>						
			<section class="movies m_romance">
				<div class="movie_flex_container">
					<?php
						require_once 'backend/show_products.php';
						romance();
					?>
				</div>
			</section>
				<h2 class="movie_footer"><a class="seeall" href="category.php?genre=Romance">See All</a></h2>
			</div>

			<div class="movie-all-container">
				<h2 class="movie_header">Horror</h2>						
			<section class="movies m_horror">
				<div class="movie_flex_container">
					<?php
						require_once 'backend/show_products.php';
						horror();
					?>
				</div>
			</section>
				<h2 class="movie_footer"><a class="seeall" href="category.php?genre=Horror">See All</a></h2>
			</div>
			

		</main>
			
		<footer class="footer">
			<div class="footer-container">
				<ul class="links-list">
						<?php 
							if(isset($_SESSION['username'])) {
								if ($_SESSION['username'] == 'admin') {
									echo '<li><a href="admin/adindex.php" class="footer-links">Admin</a></li>';
								}
																		
							}
						?>
						<li><a href="aboutus.php" class="footer-links">About Us</a></li>
				</ul>
			</div>
			
		</footer>

	</body>

</html>
