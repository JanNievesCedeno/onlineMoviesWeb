<?php
    require_once ('layout/superior.php');
    require_once ('../backend/conecdb.php');
?>
    <main>
    
    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Movies Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <a href="add.php?action=movie">Add Movie</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <a href="add.php?action=movieamount">Add Movie amount</a>
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

    </main>                
                
<?php
    require_once ('layout/inferior.php');
?>