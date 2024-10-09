<?php 
    echo '<link href="../rec.css" type="text/css" rel="stylesheet">';
    echo '<link href="../style.css" type="text/css" rel="stylesheet">';
session_start();
if(isset($_SESSION['username'])) {
    require_once 'conecdb.php';

    $user = $_SESSION['username'];
    $users = "SELECT * FROM users WHERE username = '$user';";
    $result = mysqli_query($conex,$users);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        $row = mysqli_fetch_assoc($result);
        $userid = $row['user_id'];
        
    }
}else {
   header('Location: ../login.php');
}

    if (isset($_POST['buy'])) {
             
        $movie = $_POST['movieid'];     
        $movies = "SELECT * FROM movies WHERE movie_id = '$movie';";
        $result = mysqli_query($conex,$movies);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0){
            $row = mysqli_fetch_assoc($result);
            $movieid = $row['movie_id'];
           } 

            
            date_default_timezone_set('America/Puerto_Rico');
            $date = date("Y-m-d");
            $method = $_POST['method'];
            $cardnumber = $_POST['cnumber'];
            $expdate = $_POST['edate'];
            $cardname = $_POST['ncard'];
            $amount = $row['movie_cost'];
             
            $sales =  "SELECT * FROM sales WHERE user_id = '$userid' and movie_id = '$movieid';"; 
            $result = mysqli_query($conex,$sales);
            $resultCheck = mysqli_num_rows($result);
    
            if ($resultCheck > 0){
                     
                    
                    echo '<script> alert("You already have this movie! Check your Library.")</script>';
                    echo '<script type="text/javascript">';
                    echo 'window.location= "../index.php";';
                    echo '</script>';

            
            }else {

                    $query = "INSERT INTO sales(user_id, movie_id, sales_date, payment_method, card_number, card_expiration, card_name, amount) VALUES ('$userid','$movieid','$date','$method','$cardnumber','$expdate','$cardname','$amount');";
                    $execute = mysqli_query($conex, $query);


                    if ($execute) {

                        $mminus = "SELECT movie_amount FROM movies WHERE movie_id = '$movieid';";
                        $result = mysqli_query($conex,$mminus);
                        $resultCheck = mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        $mamount = $row['movie_amount'] - 1;

                        $run = "UPDATE movies SET movie_amount='$mamount' WHERE movie_id = '$movieid';";
                        $result = mysqli_query($conex,$run);
                        

                        $movie = "SELECT SUM(amount) as moneys FROM sales WHERE user_id = '$userid';";
                        $result = mysqli_query($conex,$movie);
                        $resultCheck = mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        $money = $row['moneys'];

                        $count = "SELECT * FROM sales WHERE user_id = '$userid';";
                        $result = mysqli_query($conex,$count);
                        $resultCheck = mysqli_num_rows($result);  

                        $up = " UPDATE users SET money_spent = '$money', movies_owned ='$resultCheck' WHERE user_id = '$userid';";
                        $run = mysqli_query($conex,$up); 

                        $mquery = "SELECT movie_name FROM movies WHERE movie_id = '$movieid';";
                        $mresult = mysqli_query($conex,$mquery);
                        $mrow = mysqli_fetch_assoc($mresult);
                        $mname = $mrow['movie_name'];
    
                        $uquery = "SELECT username FROM users WHERE user_id = '$userid';";
                        $uresult = mysqli_query($conex,$uquery);
                        $urow = mysqli_fetch_assoc($uresult);
                        $user = $urow['username'];
        ?>                
    <table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-block">
                                        <h2 style="text-align: center;">Thanks for buying!</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td>User: <?php echo $user; ?><br>Date: <?php echo $date; ?> <br>Account Number: <?php echo $cardnumber; ?> <br>Name on Card: <?php echo $cardname; ?> <br>Payment Method: <?php echo $method; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                            <td> <?php echo $mname; ?></td>
                                                            <td class="alignright">$ <?php echo $amount; ?></td>
                                                        </tr>
                                                        
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total</td>
                                                            <td class="alignright">$ <?php echo $amount; ?></td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td class="content-block">
                                        Online Movies
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
                <div class="footer">
                    <table width="100%">
                        <tbody><tr>
                            <td class="aligncenter content-block"><a href="../library.php">Library</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../index.php">Home</a></td>
                        </tr>
                    </tbody></table>
                </div></div>
        </td>
        <td></td>
    </tr>
    </tbody></table>
    <?php
                
                        
                    } else {
                        echo '<script> alert("Error")</script>';
                    }


                }
    
}

?>