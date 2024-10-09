
<?php

echo '<link href="./style.css" type="text/css" rel="stylesheet">';

function action() {

    require_once ('conecdb.php');
    $products = "SELECT movie_id, movie_name, movie_year, movie_genre,movie_cost,movie_picture FROM movies WHERE movie_genre = 'Action';";
    $result = mysqli_query($conex,$products);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        for ($i=0; $i <= 9 ; $i++) {             
        
            $row = mysqli_fetch_assoc($result);

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

function comedy() {

    require 'conecdb.php';
    $products = "SELECT movie_id, movie_name, movie_year, movie_genre,movie_cost,movie_picture FROM movies WHERE movie_genre = 'Comedy';";
    $result = mysqli_query($conex,$products);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        for ($i=0; $i <= 9 ; $i++) {             
        
            $row = mysqli_fetch_assoc($result);

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

function drama() {

    require 'conecdb.php';
    $products = "SELECT movie_id, movie_name, movie_year, movie_genre,movie_cost,movie_picture FROM movies WHERE movie_genre = 'Drama';";
    $result = mysqli_query($conex,$products);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
       for ($i=0; $i <= 9 ; $i++) {             
        
            $row = mysqli_fetch_assoc($result);

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

function documentary() {

    require 'conecdb.php';
    $products = "SELECT movie_id, movie_name, movie_year, movie_genre,movie_cost,movie_picture FROM movies WHERE movie_genre = 'Documentary';";
    $result = mysqli_query($conex,$products);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
       for ($i=0; $i <= 9 ; $i++) {             
        
            $row = mysqli_fetch_assoc($result);

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


function musical() {

    require 'conecdb.php';
    $products = "SELECT movie_id, movie_name, movie_year, movie_genre,movie_cost,movie_picture FROM movies WHERE movie_genre = 'Musical';";
    $result = mysqli_query($conex,$products);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        for ($i=0; $i <= 9 ; $i++) {             
        
            $row = mysqli_fetch_assoc($result);

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

function romance() {

    require 'conecdb.php';
    $products = "SELECT movie_id, movie_name, movie_year, movie_genre,movie_cost,movie_picture FROM movies WHERE movie_genre = 'Romance';";
    $result = mysqli_query($conex,$products);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
       for ($i=0; $i <= 9 ; $i++) {             
        
            $row = mysqli_fetch_assoc($result);

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

function horror() {

    require 'conecdb.php';
    $products = "SELECT movie_id, movie_name, movie_year, movie_genre,movie_cost,movie_picture FROM movies WHERE movie_genre = 'Horror';";
    $result = mysqli_query($conex,$products);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
       for ($i=0; $i <= 9 ; $i++) {             
        
            $row = mysqli_fetch_assoc($result);

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

?>
