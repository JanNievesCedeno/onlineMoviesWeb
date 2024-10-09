<?php
    require_once ('layout/superior.php');
    require_once ('../backend/conecdb.php');

    echo '<link href="css/receipt.css" rel="stylesheet"/>';
     
        $uid = $_GET['user'];
        $query = "SELECT * FROM users WHERE user_id = '$uid';";
        $result = mysqli_query($conex,$query);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck >0){
            $row = mysqli_fetch_assoc($result);
            $id = $row['user_id'];
            $fname = $row['user_firstname'];
            $lname = $row['user_lastname'];
            $uname = $row['username'];
            $mspent = $row['money_spent'];
            $mowned =$row['movies_owned'];
            ?>
                <div>
                <h4>User id:</h4>
                <input type="text" readonly value='<?php echo $id; ?>'><br><br>

                <h4>Firstname:</h4>
                <input type="text" readonly value='<?php echo $fname; ?>'><br><br>

                <h4>Lastname:</h4>
                <input type="text" readonly value='<?php echo $lname; ?>'><br><br>

                <h4>Username:</h4>
                <input type="text" readonly value='<?php echo $uname; ?>'><br><br>

                <h4>Purchased movies:</h4>
                <input type="text" readonly value='<?php echo $mowned; ?>'><br><br>

                <h4>Money Spent:</h4>
                <input type="text" readonly value='<?php echo $mspent; ?>'>&nbsp&nbsp&nbsp <a href="javascript:history.back()">Back</a>


                </div>
            <?php
        }
      

    require_once ('layout/inferior.php');
?>