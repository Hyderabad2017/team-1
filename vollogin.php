<?php
	include('server.php');
	$vname=mysqli_escape_string($db,$_POST['vname']);
	$vpassword=mysqli_escape_string($db,$_POST['vpwd']);
	
	 if(count($errors)==0){
	 
	$query = "SELECT * FROM team_1 WHERE vname='$vname' AND vpwd='$vpassword'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result) == 1) {
			//$_SESSION['vname'] = $vname;
			header('location: volu2.php');
		} else {
			array_push($errors, $vpassword);
		}
	}	

	?>
