<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['uname'])
    && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['password']) && isset($_POST['confirmpass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['confirmpass']);
	$name = validate($_POST['name']);

    $email = validate($_POST['email']);
	$contact = validate($_POST['contact']);
	$address = validate($_POST['address']);
	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Confirm Password is required &$user_data");
	    exit();
	}
    
	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
    else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($contact)){
        header("Location: signup.php?error=Contact Information is required&$user_data");
	    exit();
	}
	else if(empty($address)){
        header("Location: signup.php?error=Address is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		echo "reached here"; 
	    $sql = "SELECT * FROM `client` WHERE `user_name`='$uname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO `client`(`name`, `user_name`, `email_add`, `contact`, `address`, `password`) VALUES ('$name','$uname','$email','$contact','$address','$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	echo "reached here"; 
	
	
}