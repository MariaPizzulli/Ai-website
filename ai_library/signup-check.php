<?php 
session_start(); 
include "db_util.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	$email = validate($_POST['email']);
	$name = validate($_POST['name']);
    $surname = validate($_POST['surname']);
	$user_data = 'uname='. $username. '&name='. $name;


	if (empty($username)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
    else if(empty($surname)){
        header("Location: signup.php?error=Name is required&$user_data");
        exit();
    }



	else{

		// cifro la password
        $pass = md5($pass);

	    $sql = "SELECT * FROM Utenti WHERE username='$username'";
		$result = mysqli_query($connect, $sql); //output

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO Utenti(nome, cognome, mail, username, password) VALUES('$name', '$surname','$email', '$username', '$pass')";
           $result2 = mysqli_query($connect, $sql2);

           if ($result2) {
               $_SESSION['logged'] = true;
           	 header("Location: signup.php?success=Your account has been created successfully");

	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}