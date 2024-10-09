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
            <a href="userreport.php">User View Pdf</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="expreport.php">User Expenses Pdf</a>
                                        <thead>
                                            <tr>
                                                <th>User id</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Username</th>
                                                <th>Movies owned</th>
                                                <th>Money spent</th>                                                                                              
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>User id</th>
                                                <th>Firstname</th>
                                                <th>Lastname</th>
                                                <th>Username</th>
                                                <th>Movies owned</th>
                                                <th>Money spent</th>
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
                                <td>{$row['movies_owned']}</td>
                                <td>$ {$row['money_spent']}</td>                                                        
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