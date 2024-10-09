<?php
    require_once ('layout/superior.php');

    if($_GET['action'] == "movie") {
      $action = "movie";
      $id = $_GET['id'];
    }  
    
    if($_GET['action'] == "user") {
      $action = "user";
      $id = $_GET['id'];
    }

    if($_GET['action'] == "sale") {
      $action = "sale";
      $id = $_GET['id'];
    }
                
    if($action == "movie"){
      require_once ('../backend/conecdb.php');
        $query = "DELETE FROM `movies` WHERE movie_id = '$id';";
      $result = mysqli_query($conex,$query);

      if($result) {
        echo '<script> alert("Succesfully deleted!")</script>';
              echo '<script type="text/javascript">';
              echo 'window.location= "moviest.php";';
              echo '</script>';
      }
    }

    if($action == "user"){
      require_once ('../backend/conecdb.php');
        $query = "DELETE FROM users WHERE user_id = '$id';";
      $result = mysqli_query($conex,$query);

      if($result) {
        echo '<script> alert("Succesfully deleted!")</script>';
              echo '<script type="text/javascript">';
              echo 'window.location= "userst.php";';
              echo '</script>';
      }
    }

    if($action == "sale"){
      require_once ('../backend/conecdb.php');
        $query = "DELETE FROM sales WHERE sales_id = '$id';";
      $result = mysqli_query($conex,$query);

      if($result) {
        echo '<script> alert("Succesfully deleted!")</script>';
              echo '<script type="text/javascript">';
              echo 'window.location= "salest.php";';
              echo '</script>';
      }
    }
    require_once ('layout/inferior.php');
?>