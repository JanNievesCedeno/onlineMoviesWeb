<?php
    require_once ('layout/superior.php');

    if($_GET['action'] == "movie") {
        $action = "movie";
    }

    if($_GET['action'] == "user") {
        $action = "user";
    }

    if($_GET['action'] == "movieamount") {
        $action = "movieamount";
    }

   
    if($action == "movie"){
        ?>
     <form method="POST"> 
        <label for="mname">Movie name:</label><br>
        <input type="text" name="mname"required><br>

        <label for="myear">Movie year:</label><br>
        <input type="text" name="myear" required><br>

        <label for="mgenre">Movie genre:</label><br>
        <input type="text" name="mgenre"required><br>

        <label for="mdesc">Movie description:</label><br>
        <textarea name="mdesc" id="" cols="100" rows="5" required></textarea><br>

        <label for="mcost">Movie cost:</label><br> 
        <input type="text" name="mcost"required><br>

        <label for="mtrailer">Movie trailer:</label><br>
        <input type="text" name="mtrailer"required><br>

        <label for="mpic">Movie picture:</label><br> 
        <input type="text" name="mpic"required> 
        
        <input type="submit" name="movie" value="add movie">
     </form> 
        <?php
     
        require_once ('../backend/conecdb.php');
        if(isset($_POST['movie'])) {
            $mname = '"'.$_POST['mname'].'"';
            $myear = $_POST['myear'];
            $mgenre = $_POST['mgenre'];
            $mdesc = '"'.$_POST['mdesc'].'"';
            $mcost = $_POST['mcost'];
            $mtrailer = $_POST['mtrailer'];
            $mpic = $_POST['mpic'];

            $query = "INSERT INTO movies (movie_id, movie_name, movie_year, movie_genre, movie_description, movie_cost, movie_trailer, movie_picture) VALUES ('',$mname,'$myear','$mgenre',$mdesc,'$mcost','$mtrailer','$mpic');";
            $result = mysqli_query($conex,$query);
            if($result){
                echo '<script> alert("Succesfully added!")</script>';
                echo '<script type="text/javascript">';
                echo 'window.location= "moviest.php";';
                echo '</script>';
            } else {
                echo '<script> alert("Dont accept double quotes!")</script>';
                echo '<script type="text/javascript">';
                echo 'window.location.history.back();';
                echo '</script>';
            }

        }
        
    }



    if($action == "user"){
        ?>
     <form method="POST"> 
        <label for="fname">First Name:</label><br>
        <input type="text" name="fname"required minlength="2"><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" name="lname" required minlength="2"><br>

        <label for="uname">Username:</label><br>
        <input type="text" name="uname"required minlength="2"><br>

        <label for="upass">Password:</label><br>
        <input type="password" name="upass" required minlength="5">
        
        <input type="submit" name="user" value="add user">
     </form> 
        <?php
     
        require_once ('../backend/conecdb.php');
        if(isset($_POST['user'])) {
        $fname = '"'.$_POST['fname'].'"';
        $lname = '"'.$_POST['lname'].'"';
        $uname = '"'.$_POST['uname'].'"';
            $query = "SELECT username FROM users;";
            $result = mysqli_query($conex,$query);
            $resultCheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
            
            if ($row['username'] == $uname) {
                echo '<script> alert("Username taken!")</script>';
                echo '<script type="text/javascript">';
                echo 'window.history.back();';
                echo '</script>';
                die();
                }
            }
        $upass = $_POST['upass'];

        $encrypted = password_hash($upass, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (user_id, user_firstname, user_lastname, username, password, money_spent, movies_owned) VALUES ('',$fname,$lname,$uname,'$encrypted','','');";
        $result = mysqli_query($conex,$query);
        if($result){
            echo '<script> alert("Succesfully added!")</script>';
            echo '<script type="text/javascript">';
            echo 'window.location= "userst.php";';
            echo '</script>';
        }
        }
    }

    if($action == "movieamount"){
        ?>
     <form method="POST" name="mamount"> 
        <label for="num">New Amount for all movies:</label><br>
        <input type="number" name="num"required><br>
        
        <input type="submit" name="amount" value="add amount">
     </form> 
        <?php
     
        require_once ('../backend/conecdb.php');
        if(isset($_POST['amount'])) {

            $namount = $_POST['num'];
        
            $query = "SELECT movie_id, movie_amount FROM movies WHERE movie_id;";
            $result = mysqli_query($conex,$query);
            $resultCheck = mysqli_num_rows($result);
            
            while ($row = mysqli_fetch_assoc($result)) {
                $mid = $row['movie_id'];
                $oamount = $row['movie_amount'];
                $tamount = $namount + $oamount;

                $squery = "UPDATE movies SET movie_amount = '$tamount' WHERE movie_id = '$mid';";
                $results = mysqli_query($conex,$squery);            
            }

            echo '<script> alert("Succesfully added!")</script>';
            echo '<script type="text/javascript">';
            echo 'window.location= "moviest.php";';
            echo '</script>';

        }
       
    }

    require_once ('layout/inferior.php');
?>