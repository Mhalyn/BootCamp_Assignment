<?php 
session_start();
	$first_name = "";
	$last_name = "";
	$birthday = "";
	$gender = "";
	$email = "";
	$phone = "";
	$username = "";
	$photo = "";
	$errors = array();
		//db connection
	$db = mysqli_connect('localhost', 'root', '', 'booking') or die('error');

	// if button clicked
	if (isset($_POST['register'])) {
		$first_name = mysqli_real_escape_string($db,$_POST['first_name']);
		$last_name = mysqli_real_escape_string($db,$_POST['last_name']);
		$birthday = mysqli_real_escape_string($db,$_POST['birthday']);
		$gender = mysqli_real_escape_string($db,$_POST['gender']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$phone = mysqli_real_escape_string($db,$_POST['phone']);
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$photo = mysqli_real_escape_string($db,$_POST['photo']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$confirm_password = mysqli_real_escape_string($db,$_POST['confirm_password']);
		$photo = mysqli_real_escape_string($db,"dp_$first_name.jpg");

		
		// if no errors
		if (count($errors) == 0) {
			 //echo "<script> alert('".$_FILES["photo"]["tmp_name"]."');</script>";  for testing
			file_put_contents("images/upload/dp_$first_name.jpg", file_get_contents($_FILES["photo"]["tmp_name"]));
			$password = md5($password); // encryption
			$sql = "INSERT INTO user (first_name, last_name, birthday, gender, email, phone, username, password, photo) 
						VALUES ('$first_name','$last_name', '$birthday', '$gender', '$email', '$phone', '$username', '$password',  '$photo')";
			mysqli_query($db, $sql);
			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "You are now logged in";
			header('location: homepage.html');
		}
		}
// log user in
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				//log user in 
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				while ($row = mysqli_fetch_array($result)) {
					$_SESSION['photo']=$row['photo'];
				}
				header('location: homepage.html');// redirect to homepage
			} else {
			array_push($errors, "Invalid username and password");
			//header('location: login.php');
			}
		}
	}

	//log out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');	}
		
 ?>