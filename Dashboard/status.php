<?php
	session_start();
	require_once'../db.php';
	$id=$_GET['status_id'];
	$select="SELECT * FROM php WHERE id=$id";
	$quiry=mysqli_query($db, $select);
	$assoc=mysqli_fetch_assoc($quiry);
	if ($assoc['status']==1) {
		$users="UPDATE php SET status=2 WHERE id=$id";
		if (mysqli_query($db, $users)) {
			$_SESSION['changestatus']='Activated Successfull';
			header('location:users.php');
		}
	}else{
		$users="UPDATE php SET status=1 WHERE id=$id";
		if (mysqli_query($db, $users)) {
			$_SESSION['changestatus']='Activated Successfull';
			header('location:users.php');
		}
	}
?>