<?php
	include ("connection.php");
	//$dc = $db;
	
	function registerUsers($firstName,$surname,$email,$password,$birthday,$sex){

			// Declare a global variable
			global $conn;
			// Create "userDetails" array
			$userDetails= array(
					'firstName' => $firstName,
					'surname' => $surname,
					'email' => $email,
					'password' => $password,
					'birthday' => $birthday,
					'sex' => $sex
				);
			

			
		$query = "INSERT INTO users (firstName, surname, email, password, birthday, sex ) VALUES ('$userDetails[firstName]','$userDetails[surname]', '$userDetails[email]','$userDetails[password]','$userDetails[birthday]', '$userDetails[sex]')";

		if ( mysqli_query($conn, $query) ) {
			echo "<div class='alert alert-success'><h3>Account Successfully Created. View details <a href='users.php'>here</h3></a></div>";
		} else { echo "Error: ". $query. "<br>". mysqli_error($conn);
		}
	}

?>