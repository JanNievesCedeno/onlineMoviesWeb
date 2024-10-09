<?php
    require_once ('layout/superior.php');
    require_once ('../backend/conecdb.php');
        
      if($_GET['action'] == "movie") {
        $action = $_GET['action'];
        $id = $_GET['id'];
      } 

      if($_GET['action'] == "user") {
        $action = $_GET['action'];
        $id = $_GET['id'];
      }

      if($_GET['action'] == "sale") {
        $action = $_GET['action'];
        $id = $_GET['id'];
      }
      
      if($action == "movie") {
        $query = "SELECT * FROM movies WHERE movie_id = '$id';";
        $result = mysqli_query($conex,$query);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck >0){
            $row = mysqli_fetch_assoc($result);
            $id = $row['movie_id'];
            $name = $row['movie_name'];
            $year = $row['movie_year'];
            $genre = $row['movie_genre'];
            $desc = $row['movie_description'];
            $cost = $row['movie_cost'];
            $trailer = $row['movie_trailer'];
            $pic =$row['movie_picture'];
            ?>
            <form action="edit.php" method="POST"> 
                <input type="hidden" name="mid" value="<?php echo $id ?>">
                <label for="mname">Movie name:</label><br>
                <input type="text" name="mname" value="<?php echo $name ?>" required><br><br>

                <label for="myear">Movie year:</label><br>
                <input type="text" name="myear" value="<?php echo $year ?>" required><br><br>

                <label for="mgenre">Movie genre:</label><br>
                <input type="text" name="mgenre" value="<?php echo $genre ?>" required><br><br>

                <label for="mdesc">Movie description:</label><br>
                <textarea name="mdesc" id="" cols="100" rows="5" required><?php echo $desc ?></textarea><br><br>

                <label for="mcost">Movie cost:</label><br> 
                <input type="text" name="mcost" value="<?php echo $cost ?>" required><br><br>

                <label for="mtrailer">Movie trailer:</label><br>
                <input type="text" name="mtrailer" value="<?php echo $trailer ?>" required><br><br>

                <label for="mpic">Movie picture:</label><br> 
                <input type="text" name="mpic" value="<?php echo $pic ?>" required> 
                
                <input type="submit" name="movie" value="submit">
                
            </form>
            <?php
        }
      }

      if($action == "user") {
        $query = "SELECT * FROM users WHERE user_id = '$id';";
        $result = mysqli_query($conex,$query);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck >0){
            $row = mysqli_fetch_assoc($result);
            $id = $row['user_id'];
            $fname = $row['user_firstname'];
            $lname = $row['user_lastname'];
            $uname = $row['username'];
            $upass = $row['password'];
            $mspent = $row['money_spent'];
            $mowned =$row['movies_owned'];
            ?>
            <form action="edit.php" method="POST"> 
                
                <label for="id">User id:</label><br>
                <input type="text" name="uid" value="<?php echo $id ?>" required ><br><br>

                <label for="fname">User Firstname:</label><br>
                <input type="text" name="fname" value="<?php echo $fname ?>" required minlength="2"><br><br>

                <label for="lname">User lastname:</label><br>
                <input type="text" name="lname" value="<?php echo $lname ?>" required minlength="2"><br><br>

                <label for="uname">Username:</label><br>
                <input type="text" name="uname" value="<?php echo $uname ?>" required minlength="2"><br><br>

                <label for="upass">Password</label><br> 
                <input type="text" name="upass" value="<?php echo $upass ?>" required minlength="5"><br><br>

                <label for="mspent">Money Spent:</label><br>
                <input type="text" name="mspent" value="<?php echo $mspent ?>" required><br><br>

                <label for="mowned">Movies owned</label><br> 
                <input type="text" name="mowned" value="<?php echo $mowned ?>" required> 
                
                <input type="submit" name="user" value="submit">
                
            </form>
            <?php
        }
      }


      if($action == "sale") {
        $query = "SELECT * FROM sales WHERE sales_id = '$id';";
        $result = mysqli_query($conex,$query);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck >0){
            $row = mysqli_fetch_assoc($result);
            $id = $row['sales_id'];
            $uid = $row['user_id'];
            $mid = $row['movie_id'];
            $salesd = $row['sales_date'];
            $payment = $row['payment_method'];
            $cnum = $row['card_number'];
            $cexp =$row['card_expiration'];
            $cname =$row['card_name'];
            $amount =$row['amount'];
            ?>
            <form action="edit.php" method="POST"> 
                
                <label for="id">Sales id:</label><br>
                <input type="text" name="sid" value="<?php echo $id ?>" required ><br><br>

                <label for="uid">User id:</label><br>
                <input type="text" name="uid" value="<?php echo $uid ?>" required minlength="2"><br><br>

                <label for="mid">Movie id:</label><br>
                <input type="text" name="mid" value="<?php echo $mid ?>" required minlength="2"><br><br>

                <label for="salesd">Sales date:</label><br>
                <input type="date" name="salesd" value="<?php echo $salesd ?>" required ><br><br>

                <label for="payment">Payment method</label><br> 
                <input type="text" name="payment" value="<?php echo $payment ?>" required minlength="5"><br><br>

                <label for="cnum">Card number:</label><br>
                <input type="text" name="cnum" value="<?php echo $cnum ?>" required><br><br>

                <label for="cexp">Card expiration</label><br> 
                <input type="text" name="cexp" value="<?php echo $cexp ?>" required><br><br>

                <label for="cname">Card name</label><br> 
                <input type="text" name="cname" value="<?php echo $cname ?>" required><br><br>

                <label for="amount">Amount</label><br> 
                <input type="text" name="amount" value="<?php echo $amount ?>" required> 
                
                <input type="submit" name="sale" value="submit">
                
            </form>
            <?php
        }
      }

    require_once ('layout/inferior.php');
?>