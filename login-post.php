<?php
	session_start();
	require_once'db.php';

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$email=$_POST['email'];
		$password=$_POST['password'];

		$select="SELECT COUNT(*) as total, name, email, password FROM php WHERE email='$email' ";
		$quiry=mysqli_query($db, $select);
		$assoc=mysqli_fetch_assoc($quiry);
		if ($assoc['total']>0) {
			$hash=$assoc['password'];
			if (password_verify($password, $hash)) {
				$_SESSION['name']=$assoc['name'];
				$_SESSION['email']=$assoc['email'];
				header('location:Dashboard/dashboard.php');
			}else{
				$_SESSION['invalidpassword']='Error';
				header('location:login.php');
			}
		}else{
			$_SESSION['invalidpassword']='Not Allow';
			header('location:login.php');
		}
	}
?>