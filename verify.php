<?php
	$email = $_POST['inputEmail'];
	$pswd = $_POST['inputPasswd'];

	$conn = mysqli_connect("localhost", "root", "", "obs_db");
	if(!$conn){
		echo "Cannot connecto to database " . mysqli_connect_error($conn);
		exit;
	}

	$query = "SELECT username, password FROM admin";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty!";
		exit;
	}

	while ($row = mysqli_fetch_assoc($result)){
		if($email == $row['username'] && $pswd == $row['password']){
			echo "Welcome admin! Long time no see";
			break;
		}
	}

		// Create connection
		$conn = new mysqli($servername, $username, $password, "obs_db");
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
?>