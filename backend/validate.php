<?php



if (isset($_POST['login'])) {

	require_once 'conecdb.php';
	  
	if (strlen($_POST['username']) >=1 && strlen($_POST['password']) >=1) {
		
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		$consulta = " SELECT * FROM users WHERE username = '$username';";
		$resultado = mysqli_query($conex,$consulta);
		$resultCheck = mysqli_num_rows($resultado);
		
		if ($resultCheck > 0) {
			$rows = mysqli_fetch_assoc($resultado);
			$encrypted = $rows['password'];
			if (password_verify($password, $encrypted)) {
				session_start();
				$_SESSION['username'] = $username;
				header('Location: ../index.php');
				exit;
			}else {
				
			echo '<script> alert("Username or Password incorrect")</script>';
			echo '<script type="text/javascript">';
            echo 'window.location= "../login.php";';
            echo '</script>';
		}
			
		} else {
			echo '<script> alert("Username or Password incorrect")</script>';
			echo '<script type="text/javascript">';
            echo 'window.location= "../login.php";';
            echo '</script>';
		}
	}
	
	
	
}


?>