<?php
    require_once ('layout/superior.php');
	
?>
     
<main>

     <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Users Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <a href="add.php?action=user">Add User</a>
                                        <thead>
                                            <tr>
                                                <th>User_id</th>
                                                <th>User_firstname</th>
                                                <th>User_lastname</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Money_spent</th>
                                                <th>Movies_owned</th>
                                                <th>Actions</th>                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>User_id</th>
                                                <th>User_firstname</th>
                                                <th>User_lastname</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Money_spent</th>
                                                <th>Movies_owned</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>

                    <?php
                        require_once ('../backend/conecdb.php');
                        

                        $query = "SELECT * FROM users;";
                        $result = mysqli_query($conex,$query);
                        $resultCheck = mysqli_num_rows($result); 

                        if($resultCheck > 0){
                            while ($row = mysqli_fetch_assoc($result)) {

                                $product = <<< DELIMETER
                                <tbody id="trows">
                                <tr>
                                <td>{$row['user_id']}</td>
                                <td>{$row['user_firstname']}</td>
                                <td>{$row['user_lastname']}</td>
                                <td>{$row['username']}</td>
                                <td><textarea class="txa" name="" id="" cols="20" rows="4" readonly>{$row['password']}</textarea></td>
                                <td>$ {$row['money_spent']}</td>
                                <td>{$row['movies_owned']}</td>
                                <td><a href="interedit.php?action=user&id={$row['user_id']}">edit</a>&nbsp&nbsp&nbsp<a href="delete.php?action=user&id={$row['user_id']}" onclick="return confirm('Are you sure you want to delete this user?');">delete</a></td>
                                
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

                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Movies Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <a href="add.php?action=movie">Add Movie</a>
                                        <thead>
                                            <tr>
                                                <th>Movie_id</th>
                                                <th>Movie_Amount</th>
                                                <th>Movie_name</th>
                                                <th>Movie_year</th>
                                                <th>Movie_genre</th>
                                                <th>Movie_description</th>
                                                <th>Movie_cost</th>
                                                <th>Movie_trailer</th>
                                                <th>Movie_picture</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Movie_id</th>
                                                <th>Movie_Amount</th>
                                                <th>Movie_name</th>
                                                <th>Movie_year</th>
                                                <th>Movie_genre</th>
                                                <th>Movie_description</th>
                                                <th>Movie_cost</th>
                                                <th>Movie_trailer</th>
                                                <th>Movie_picture</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        

                    <?php
                        require_once ('../backend/conecdb.php');
                        

                        $query = "SELECT * FROM movies;";
                        $result = mysqli_query($conex,$query);
                        $resultCheck = mysqli_num_rows($result); 

                        if($resultCheck > 0){
                            while ($row = mysqli_fetch_assoc($result)) {

                                $product = <<< DELIMETER
                                <tbody id="trows">
                                <tr>
                                <td>{$row['movie_id']}</td>
                                <td>{$row['movie_amount']}</td>
                                <td>{$row['movie_name']}</td>
                                <td>{$row['movie_year']}</td>
                                <td>{$row['movie_genre']}</td>
                                <td><textarea class="txa" name="" id="" cols="25" rows="5">{$row['movie_description']}</textarea></td>
                                <td>$ {$row['movie_cost']}</td>
                                <td><textarea class="txa" name="" id="" cols="18" rows="5">{$row['movie_trailer']}</textarea></td>
                                <td><textarea class="txa" name="" id="" cols="18" rows="5">{$row['movie_picture']}</textarea></td>
                                <td><a href="interedit.php?action=movie&id={$row['movie_id']}">edit</a>&nbsp&nbsp&nbsp<a href="delete.php?action=movie&id={$row['movie_id']}" onclick="return confirm('Are you sure you want to delete this movie?');">delete</a></td>
                                
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
                    
</main>
                
<?php
    require_once ('layout/inferior.php');
?>