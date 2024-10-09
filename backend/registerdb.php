<?php



if (isset($_POST['register'])) {

	require_once 'conecdb.php';
	
	if (strlen($_POST['first-name']) >= 2 && strlen($_POST['last-name']) >= 2 && strlen($_POST['username']) >=2 && strlen($_POST['password']) >=5 ) {

		$user_firstname = trim($_POST['first-name']);
		$user_lastname = trim($_POST['last-name']);
		$username = ($_POST['username']);
			$query = "SELECT username FROM users;";
			$result = mysqli_query($conex,$query);
			$resultCheck = mysqli_num_rows($result);
			while ($row = mysqli_fetch_assoc($result)) {
			
			if ($row['username'] == $username) {
				echo '<script> alert("Username taken!")</script>';
				echo '<script type="text/javascript">';
        		echo 'window.history.back();';
        		echo '</script>';
        		die();
				}
			}

		$password = trim($_POST['password']);
		$encrypted = password_hash($password, PASSWORD_DEFAULT);
		$consulta = "INSERT INTO users(user_firstname, user_lastname, username, password) VALUES ('$user_firstname','$user_lastname','$username','$encrypted')";
		$resultado = mysqli_query($conex,$consulta);

		if ($resultado) {
			echo '<script> alert("Successfully registered!")</script>';
			echo '<script type="text/javascript">';
        	echo 'window.location= "../login.php";';
        	echo '</script>';
		} 
	} else {
		echo '<script> alert("Need at least 2 caracters for each field except the password that are 5.")</script>';
		echo '<script type="text/javascript">';
        echo 'window.history.back();';
        echo '</script>';
	}
}

?>