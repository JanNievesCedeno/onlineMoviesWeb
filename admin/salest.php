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
                                        
                                        <thead>
                                            <tr>
                                                <th>Sales_id</th>
                                                <th>User_id</th>
                                                <th>Movie_id</th>
                                                <th>Sales_date</th>
                                                <th>Payment_method</th>
                                                <th>Card_number</th>
                                                <th>Card_expiration</th>
                                                <th>Card_name</th>
                                                <th>Amount</th>
                                                <th>Actions</th>                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sales_id</th>
                                                <th>User_id</th>
                                                <th>Movie_id</th>
                                                <th>Sales_date</th>
                                                <th>Payment_method</th>
                                                <th>Card_number</th>
                                                <th>Card_expiration</th>
                                                <th>Card_name</th>
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

                                $product = <<< DELIMETER
                                <tbody id="trows">
                                <tr>
                                <td>{$row['sales_id']}</td>
                                <td>{$row['user_id']}</td>
                                <td>{$row['movie_id']}</td>
                                <td>{$row['sales_date']}</td>
                                <td>{$row['payment_method']}</td>
                                <td>{$row['card_number']}</td>
                                <td>{$row['card_expiration']}</td>
                                <td>{$row['card_name']}</td>
                                <td>$ {$row['amount']}</td>
                                <td><a href="interedit.php?action=sale&id={$row['sales_id']}">edit</a>&nbsp&nbsp&nbsp<a href="delete.php?action=sale&id={$row['sales_id']}" onclick="return confirm('Are you sure you want to delete this user?');">delete</a></td>
                                
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