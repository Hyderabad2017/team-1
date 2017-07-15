<?php
echo "Hi";
	include('server.php');
	$stuname = mysqli_escape_string($db,$_POST['sname']);
	$saddress=mysqli_escape_string($db,$_POST['saddress']);
	$semail=mysqli_escape_string($db,$_POST['semail']);
	$smobile=mysqli_escape_string($db,$_POST['smobile']);
	$squali=mysqli_escape_string($db,$_POST['squalification']);
	$spassword=mysqli_escape_string($db,$_POST['spwd']);
	$sgender=mysqli_escape_string($db,$_POST['sgender']);
	$slang=mysqli_escape_string($db,$_POST['slang']);
	
	 if(count($errors)==0){
	 //$password=md5($password);
	 $query = "INSERT INTO studentdb(sname,saddress,semail,smobile,squalification,spwd,sgender,slang) 
	 VALUES('$stuname','$saddress','$semail','$smobile','$squali','$spassword','$sgender','$slang')";
		mysqli_query($db,$query);
	 $_SESSION['sname']=$sname;
	 $_SESSION['success']="you are now logged in";
	 header('location:stu1.php');
	 }
	 ?>
