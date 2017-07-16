<?php
	include('server.php');
	$add = mysqli_escape_string($db,$_POST['addqualifications']);
	
	 if(count($errors)==0){
	 //$password=md5($password);
	 $query = "INSERT INTO qualifications(qname) VALUES ('$add')";
		mysqli_query($db,$query);
	 //$_SESSION['vname']=$vname;
	 //$_SESSION['success']="you logged in";
	 header('location:adminlogin2.php');
	 echo '<script language="javascript">';
	 echo 'alert("successfully updated")';
	 echo '</script>';
	 }
	 ?>
