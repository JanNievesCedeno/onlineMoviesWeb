<?php  

    if($_GET['genre']=="Action") {
        echo '<link href="./style.css" type="text/css" rel="stylesheet">';
        require 'conecdb.php';
        $products = "SELECT * FROM movies;";
        $result = mysqli_query($conex,$products);
        $resultCheck = mysqli_num_rows($result);

     if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            
            if( $row['movie_genre'] == "Action") {
                
           
            $product_cont = <<< DELIMETER
            
            <div class="movie_container">
                <img class="movie_pic" src="{$row['movie_picture']}">
                <h6 class="minfo">Name: {$row['movie_name']}</h6>
                <h6 class="minfo">Realease: {$row['movie_year']}</h6>
                <h6 class="minfo">Genre: {$row['movie_genre']}</h6>
                <h6 class="minfo">Price: $ {$row['movie_cost']}</h6>
                <div>
                <a class="mbutton" href="movie.php?movie={$row['movie_name']}">See More</a>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        }
     }
    }elseif ($_GET['genre']=="Comedy") {
        require 'conecdb.php';
        $products = "SELECT * FROM movies;";
        $result = mysqli_query($conex,$products);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            
            if( $row['movie_genre'] == "Comedy") {
    
            $product_cont = <<< DELIMETER
        
            <div class="movie_container">
                <img class="movie_pic" src="{$row['movie_picture']}">
                <h6 class="minfo">Name: {$row['movie_name']}</h6>
                <h6 class="minfo">Realease: {$row['movie_year']}</h6>
                <h6 class="minfo">Genre: {$row['movie_genre']}</h6>
                <h6 class="minfo">Price: $ {$row['movie_cost']}</h6>
                <div>
                <a class="mbutton" href="movie.php?movie={$row['movie_name']}">See More</a>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        }
    }
    }elseif ($_GET['genre']=="Drama") {
        require 'conecdb.php';
        $products = "SELECT * FROM movies;";
        $result = mysqli_query($conex,$products);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            
            if( $row['movie_genre'] == "Drama") {
    
            $product_cont = <<< DELIMETER
        
            <div class="movie_container">
                <img class="movie_pic" src="{$row['movie_picture']}">
                <h6 class="minfo">Name: {$row['movie_name']}</h6>
                <h6 class="minfo">Realease: {$row['movie_year']}</h6>
                <h6 class="minfo">Genre: {$row['movie_genre']}</h6>
                <h6 class="minfo">Price: $ {$row['movie_cost']}</h6>
                <div>
                <a class="mbutton" href="movie.php?movie={$row['movie_name']}">See More</a>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        }
    }
    }elseif ($_GET['genre']=="Documentary") {
        require 'conecdb.php';
        $products = "SELECT * FROM movies;";
        $result = mysqli_query($conex,$products);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            
            if( $row['movie_genre'] == "Documentary") {
    
            $product_cont = <<< DELIMETER
        
            <div class="movie_container">
                <img class="movie_pic" src="{$row['movie_picture']}">
                <h6 class="minfo">Name: {$row['movie_name']}</h6>
                <h6 class="minfo">Realease: {$row['movie_year']}</h6>
                <h6 class="minfo">Genre: {$row['movie_genre']}</h6>
                <h6 class="minfo">Price: $ {$row['movie_cost']}</h6>
                <div>
                <a class="mbutton" href="movie.php?movie={$row['movie_name']}">See More</a>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        }
    }
    }elseif ($_GET['genre']=="Musical") {
        require 'conecdb.php';
        $products = "SELECT * FROM movies;";
        $result = mysqli_query($conex,$products);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            
            if( $row['movie_genre'] == "Musical") {
    
            $product_cont = <<< DELIMETER
        
            <div class="movie_container">
                <img class="movie_pic" src="{$row['movie_picture']}">
                <h6 class="minfo">Name: {$row['movie_name']}</h6>
                <h6 class="minfo">Realease: {$row['movie_year']}</h6>
                <h6 class="minfo">Genre: {$row['movie_genre']}</h6>
                <h6 class="minfo">Price: $ {$row['movie_cost']}</h6>
                <div>
                <a class="mbutton" href="movie.php?movie={$row['movie_name']}">See More</a>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        }
    }
    }elseif ($_GET['genre']=="Romance") {
        require 'conecdb.php';
        $products = "SELECT * FROM movies;";
        $result = mysqli_query($conex,$products);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            
            if( $row['movie_genre'] == "Romance") {
    
            $product_cont = <<< DELIMETER
        
            <div class="movie_container">
                <img class="movie_pic" src="{$row['movie_picture']}">
                <h6 class="minfo">Name: {$row['movie_name']}</h6>
                <h6 class="minfo">Realease: {$row['movie_year']}</h6>
                <h6 class="minfo">Genre: {$row['movie_genre']}</h6>
                <h6 class="minfo">Price: $ {$row['movie_cost']}</h6>
                <div>
                <a class="mbutton" href="movie.php?movie={$row['movie_name']}">See More</a>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        }
    }
    }elseif ($_GET['genre']=="Horror") {
        require 'conecdb.php';
        $products = "SELECT * FROM movies;";
        $result = mysqli_query($conex,$products);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            
            if( $row['movie_genre'] == "Horror") {
    
            $product_cont = <<< DELIMETER
        
            <div class="movie_container">
                <img class="movie_pic" src="{$row['movie_picture']}">
                <h6 class="minfo">Name: {$row['movie_name']}</h6>
                <h6 class="minfo">Realease: {$row['movie_year']}</h6>
                <h6 class="minfo">Genre: {$row['movie_genre']}</h6>
                <h6 class="minfo">Price: $ {$row['movie_cost']}</h6>
                <div>
                <a class="mbutton" href="movie.php?movie={$row['movie_name']}">See More</a>
                <a class="mbutton" href="buy.php?movie={$row['movie_name']}">Buy Now</a>
                </div>
            </div>
            
            DELIMETER;
            
           echo $product_cont;
            }
        }
    }
    }

?>