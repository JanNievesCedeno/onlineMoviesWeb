<?php
    require_once ('layout/superior.php');
    require_once ('../backend/conecdb.php');
?>
    <main>
    <?php
        if($_GET['sid']) {
            require_once ('../backend/conecdb.php');
                        
            $sid = $_GET['sid'];
            $query = "SELECT * FROM sales WHERE sales_id = '$sid';";
            $result = mysqli_query($conex,$query);
            $resultCheck = mysqli_num_rows($result); 

            if($resultCheck > 0){
               $row = mysqli_fetch_assoc($result);
                    $mid = $row['movie_id'];
                    $uid = $row['user_id'];

                    $mquery = "SELECT movie_name FROM movies WHERE movie_id = '$mid';";
                    $mresult = mysqli_query($conex,$mquery);
                    $mrow = mysqli_fetch_assoc($mresult);
                    $mname = $mrow['movie_name'];

                    $uquery = "SELECT username FROM users WHERE user_id = '$uid';";
                    $uresult = mysqli_query($conex,$uquery);
                    $urow = mysqli_fetch_assoc($uresult);
                    $user = $urow['username'];
            }

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
                                        <h2>Sale <?php echo $sid; ?></h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td>User: <?php echo $user; ?><br>Date: <?php echo $row['sales_date']; ?> <br>Account Number: <?php echo $row['card_number']; ?> <br>Name on Card: <?php echo $row['card_name']; ?> <br>Payment Method: <?php echo $row['payment_method']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                            <td> <?php echo $mname; ?></td>
                                                            <td class="alignright">$ <?php echo $row['amount']; ?></td>
                                                        </tr>
                                                        
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total</td>
                                                            <td class="alignright">$ <?php echo $row['amount']; ?></td>
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
                </table>
                </div></div>
        </td>
        <td></td>
    </tr>
    </tbody></table>
    <?php

}
?>
   

    </main>                
                
<?php
    require_once ('layout/inferior.php');
?>