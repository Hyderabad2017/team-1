<?php
	include('server.php');
	$adminname=mysqli_escape_string($db,$_POST['adminName']);
	$password=mysqli_escape_string($db,$_POST['password']);

	if(empty($adminname)){
	 array_push($errors,"username is required");
	 }
	 if(empty($password)){
	 array_push($errors,"password is required");
	 }
	
	 if(count($errors)==0){
	 //$password=md5($password);
	 $query = "SELECT * FROM admin WHERE  admiName='$adminname' AND password='$password'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) == 1) {
			$_SESSION['adminName'] = $adminname;
			header('location: adminlogin2.php');
		} else {
			array_push($errors, $password);
		}
	}	
	 
	 /*if(isset($_GET['logout'])){
		 session_destroy();
		 unset($_SESSION['username']);
		 header('location:register.php');
	 }*/
	 
	 ?>
