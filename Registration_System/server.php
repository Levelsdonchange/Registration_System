<?php 
	session_start();

	// variable declaration
	$name = "";
    $phone= "";
    $pwd= "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
    $_SESSION['name']=$name;
    $query1="";
    $cat_name="";
    $results1="";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'quiz_oops');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
		$pwd = mysqli_real_escape_string($db, $_POST['pwd']);
		$pwdconfirm = mysqli_real_escape_string($db, $_POST['pwdconfirm']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Firstname is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($phone)) { array_push($errors, "Phone number is required"); }
		if (empty($pwd)) { array_push($errors, "Password is required"); }

		if ($pwd != $pwdconfirm) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO signup (name, email, phone, pwd) 
					  VALUES('$name', '$email','$phone', '$pwd')";
			mysqli_query($db, $query);

			$_SESSION['phone'] = $phone;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

		if (empty($phone)) {
			array_push($errors, "Username is required");
		}
		if (empty($pwd)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM signup WHERE phone='$phone' AND pwd='$pwd'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['phone'] = $phone;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
     if (count($errors) == 0) {
			$query1 = "SELECT * FROM category WHERE cat_name='$cat_name'";
			$results1 = mysqli_query($db, $query1);}

?>