<?php
session_start();
include 'connect.php';

if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){

	
	$email=mysqli_real_escape_string($con,$_REQUEST['email']);
	$password=mysqli_real_escape_string($con,$_REQUEST['password']);
	$qr=mysqli_query($con,"select * from users where email='".$email."' and password='".$password."'");
	if(mysqli_num_rows($qr)>0){
		$data=mysqli_fetch_assoc($qr);
		$_SESSION['user_data']=$data;
		if($data['usertype']==1){
			header("Location:teacher_home.php");	
		}
		else{
			header("Location:student_home.php");
		}

	}
	else{
		header("Location:index.php?error=Invalid Login Details");		
	}
}
else{
	header("Location:index.php?error=Please Enter Email and Password");
}