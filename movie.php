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

		<main class="movie-container">

			<section class="movie-selected">
				<?php

					require_once ('backend/conecdb.php');
					echo '<link href="style.css" type="text/css" rel="stylesheet">';
					if($_GET['movie']) {
					$movie = $_GET['movie'];
					$products = "SELECT * FROM movies;";
    				$result = mysqli_query($conex,$products);
   	 				$resultCheck = mysqli_num_rows($result);
    				if ($resultCheck > 0){
        			while ($row = mysqli_fetch_assoc($result)) {
             
            		if( $row['movie_name'] == $movie) {
            
            
            $product_cont = <<< DELIMETER
            
            <div >
            	<form class="movie_container2" method="POST" action="buy_movie.php">
            	<div>
                <img class="movie_pic2" src="{$row['movie_picture']}">
                <iframe width="950" height="500" src="{$row['movie_trailer']}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h6 class="minfo2">Name: {$row['movie_name']}</h6>
            <textarea class="minfo2 txtminfo" readonly cols="100" rows="5" required>{$row['movie_description']}</textarea>
                <h6 class="minfo2">Release: {$row['movie_year']}</h6>
                <h6 class="minfo2">Genre: {$row['movie_genre']}</h6>
                <div class="buy_container">
                <h6 class="minfo2 cost">Price: $ {$row['movie_cost']}</h6>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>  
                </form>     
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        } 
    }
					}	
					
				?>
			</section>
			
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