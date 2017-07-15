<?php
	include('server.php');
	$stuname=mysqli_escape_string($db,$_POST['sname']);
	$spassword=mysqli_escape_string($db,$_POST['spwd']);

	if(empty($stuname)){
	 array_push($errors,"Username is required");
	 }
	 if(empty($spassword)){
	 array_push($errors,"Password is required");
	 }
	
	 if(count($errors)==0){
	 //$password=md5($password);
	$query = "SELECT * FROM studentdb WHERE sname='$stuname' AND spwd='$spassword'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) == 1) {
			$_SESSION['stuname'] = $stuname;
			header('location: stu1.php');
		} else {
			array_push($errors, $password);
		}
	}	

	?>
