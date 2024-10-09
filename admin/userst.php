<?php
    require_once ('layout/superior.php');
    require_once ('../backend/conecdb.php');
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
                                <td><textarea class="txa" name="" id="" cols="20" rows="4">{$row['password']}</textarea></td>
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

</main>                
                
<?php
    require_once ('layout/inferior.php');
?>