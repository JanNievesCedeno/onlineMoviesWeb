<?php
    require_once ('layout/superior.php');
    require_once ('../backend/conecdb.php');

            if(isset($_POST['movie'])) {
                $id = $_POST['mid'];
                $mname = '"'.$_POST['mname'].'"';
                $myear = $_POST['myear'];
                $mgenre = $_POST['mgenre'];
                $mdesc = '"'.$_POST['mdesc'].'"';
                $mcost = $_POST['mcost'];
                $mtrailer = $_POST['mtrailer'];
                $mpic = $_POST['mpic'];

                
                $query = "UPDATE movies SET movie_name=$mname,movie_year='$myear',movie_genre='$mgenre',movie_description=$mdesc,movie_cost='$mcost',movie_trailer='$mtrailer',movie_picture='$mpic' WHERE movie_id='$id';";
                $result = mysqli_query($conex,$query);
                
                if($result > 0) {

                    echo '<script> alert("Succesfully updated!")</script>';
                    echo '<script type="text/javascript">';
                    echo 'window.location= "moviest.php";';
                    echo '</script>';
                } else {
                    echo '<script> alert("Dont accept double quotes!")</script>';
                    echo '<script type="text/javascript">';
                    echo 'window.history.back();';
                    echo '</script>';   
                }
                
            }  
            
            if(isset($_POST['user'])) {
                $id = $_POST['uid'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $uname = $_POST['uname'];
                $upass = $_POST['upass'];
                $encrypted = password_hash($upass, PASSWORD_DEFAULT);
                $mspent = $_POST['mspent'];
                $mowned = $_POST['mowned'];
                
                $query = "UPDATE users SET user_id='$id',user_firstname='$fname',user_lastname='$lname',username='$uname',password='$encrypted',money_spent='$mspent',movies_owned='$mowned' WHERE user_id = '$id';";
                $result = mysqli_query($conex,$query);
                
                if($result > 0) {

                    echo '<script> alert("Succesfully updated!")</script>';
                    echo '<script type="text/javascript">';
                    echo 'window.location= "userst.php";';
                    echo '</script>';
                }
                
            }

            if(isset($_POST['sale'])) {
                $id = $_POST['sid'];
                $uid = $_POST['uid'];
                $mid = $_POST['mid'];
                $payment = $_POST['payment'];
                $cnum = $_POST['cnum'];
                $cexp = $_POST['cexp'];
                $cname = $_POST['cname'];
                $amount = $_POST['amount'];
                
                $query = "UPDATE sales SET sales_id='$id',user_id='$uid',movie_id='$mid',sales_date= '$_POST[salesd]',payment_method='$payment',card_number='$cnum',card_expiration='$cexp',card_name='$cname',amount='$amount' WHERE sales_id = '$id';";
                $result = mysqli_query($conex,$query);
                
                if($result > 0) {

                    echo '<script> alert("Succesfully updated!")</script>';
                    echo '<script type="text/javascript">';
                    echo 'window.location= "salest.php";';
                    echo '</script>';
                }
                
            }

    require_once ('layout/inferior.php');
?>