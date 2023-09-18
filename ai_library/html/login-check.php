<?php 
session_start();
include "db_util.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        return $data;
    }


    $pass = validate($_POST['password']);

    $email = validate($_POST['email']);

    $user_data = 'uname='. $email;

    if(empty($pass)){
        header("Location: signup.php?error=Non è stata inserita la password&$user_data");
        exit();
    }
    else if(empty($email)){
        header("Location: signup.php?error=Non è stata inserita la mail&$user_data");
        exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM Utenti WHERE mail='$email' AND password='$pass'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['mail'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['mail'];
            	$_SESSION['id'] = $row['ID'];
                $_SESSION['logged'] = true;
            	header("Location: ../index.php");
		        exit();
            }else{
				header("Location: login.php?error=Mail o password errati");
		        exit();
			}
		}else{
			header("Location: login.php?error=Mail o password errati");
	        exit();
		}
	}
	
}else{
	header("Location: ../index.php");
	exit();
}