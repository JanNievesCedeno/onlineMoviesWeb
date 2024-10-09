<?php
    require_once ('layout/superior.php');
    require_once ('../backend/conecdb.php');
?>
    <main>
    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Sales Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <a href="salereports.php">Sale View Pdf</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <a href="payreport.php">Payment info Pdf</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <a href="totalreports.php">Total Pdf</a>
                                        <thead>                                        
                                            <tr>
                                                <th>Sales Number</th>
                                                <th>Sales Date</th>
                                                <th>Username</th>
                                                <th>Payment Method</th>
                                                <th>Card Number</th>
                                                <th>Card Expiration</th>
                                                <th>Card Name</th>
                                                <th>Purchased Movie</th>
                                                <th>Amount</th>
                                                <th>Actions</th>                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sales Number</th>
                                                <th>Sales Date</th>
                                                <th>Username</th>
                                                <th>Payment Method</th>
                                                <th>Card Number</th>
                                                <th>Card Expiration</th>
                                                <th>Card Name</th>
                                                <th>Purchased Movie</th>
                                                <th>Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>

                    <?php
                        require_once ('../backend/conecdb.php');                        

                        $query = "SELECT * FROM sales;";
                        $result = mysqli_query($conex,$query);
                        $resultCheck = mysqli_num_rows($result); 

                        if($resultCheck > 0){
                            while ($row = mysqli_fetch_assoc($result)) {
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


                                $product = <<< DELIMETER
                                <tbody id="trows">
                                <tr>
                                <td>{$row['sales_id']}</td>
                                <td>{$row['sales_date']}</td>
                                <td><a href="userinfo.php?user={$uid}">{$user}</a></td>
                                <td>{$row['payment_method']}</td>
                                <td>{$row['card_number']}</td>
                                <td>{$row['card_expiration']}</td>
                                <td>{$row['card_name']}</td>
                                <td>{$mname}</td>
                                <td>$ {$row['amount']}</td>
                                <td><a href="receipts.php?sid={$row['sales_id']}">Receipt</a></td>
                                
                                </tr>                                        
                                </tbody>
                                DELIMETER;
                                echo $product;
                            }


                        }

                    ?> 
                                        
                                    </table>
                                    
                                </div>
                            </div>
   

    </main>                
                
<?php
    require_once ('layout/inferior.php');
?>