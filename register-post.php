<?php
	session_start();
	require_once'db.php';

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		
		if (empty(!$name)) {
			$len=strlen($name);
			if ($len>4) {
				$_SESSION['name']=$name;
				$valid_name=$name;
			}else{
				$_SESSION['invalidname']='Please Inter your valid name';
				header('location:register.php');
			}
		}else{
			$_SESSION['invalidname']='Please Inter Your Name';
			header('location:register.php');
		}


		if (empty(!$email)) {
			$regex='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if (preg_match($regex, $email)) {
				$_SESSION['email']=$email;
				$select="SELECT COUNT(*) as total FROM php WHERE email='$email' ";
				$users=mysqli_query($db, $select);
				$count=mysqli_fetch_assoc($users);
				if ($count['total']>0) {
					$_SESSION['invalidemail']='Email Already Exists';
					header('location:register.php');						
				}else{
					$valid_email=$email;
				}
			}else{
				$_SESSION['invalidemail']='Please Inter your valid email';
				header('location:register.php');				
			}
		}else{
			$_SESSION['invalidemail']='Please Inter Your Email';
			header('location:register.php');			
		}


		if (empty(!$password)) {
			$len=strlen($password);
			if ($len>7) {
				$number = preg_match('@[0-9]@', $password);
				$uppercase = preg_match('@[A-Z]@', $password);
				$lowercase = preg_match('@[a-z]@', $password);
				$specialChars = preg_match('@[^\w]@', $password);
				if ($number && $uppercase && $lowercase && $specialChars) {
					$valid_psaaword=password_hash($password, PASSWORD_DEFAULT);
				}else{
					$_SESSION['invalidpassword']='Please use strong password';
					header('location:register.php');					
				}
			}else{
				$_SESSION['invalidpassword']='Please Inter Min 8 digite';
				header('location:register.php');				
			}
		}else{
			$_SESSION['invalidpassword']='Please Inter Your Email';
			header('location:register.php');			
		}
		if ($valid_name && $valid_email && $valid_psaaword) {
			$insert="INSERT INTO php(name, email, phone, password) VALUES ('$valid_name', '$valid_email', '$phone', '$valid_psaaword')";
				mysqli_query($db, $insert);
				header('location:login.php');
		}else{
			$_SESSION['invalidpassword']='Register Error';
			header('location:register.php');			
		}	
	}
	else{
		$_SESSION['invalidpassword']='Not Allow';
		header('location:register.php');
	}
?>