<?php
echo "Hi";
	include('server.php');
	$vname = mysqli_escape_string($db,$_POST['vname']);
	$vaddress=mysqli_escape_string($db,$_POST['vaddress']);
	$vemail=mysqli_escape_string($db,$_POST['vemail1']);
	$vmobile=mysqli_escape_string($db,$_POST['vmobile1']);
	$vquali=mysqli_escape_string($db,$_POST['vqualification']);
	$vpassword=mysqli_escape_string($db,$_POST['vpwd']);
	$vgender=mysqli_escape_string($db,$_POST['vgender']);
	$vlang=mysqli_escape_string($db,$_POST['vlang']);
	$vstatus=mysqli_escape_string($db,$_POST['vstatus']);
	$vdaysav=mysqli_escape_string($db,$_POST['vdaysav']);
	
	 if(count($errors)==0){
	 //$password=md5($password);
	 $query = "INSERT INTO team_1(vname,vaddress,vemail1,vmobile1,vqualification,vpwd,vgender,vlang,vstatus,vdaysav) 
	 VALUES('$vname','$vaddress','$vemail','$vmobile','$vquali','$vpassword','$vgender','$vlang','vstatus','vdaysav')";
		mysqli_query($db,$query);
	 //$_SESSION['vname']=$vname;
	 //$_SESSION['success']="you are now logged in";
	 header('location:volu2.php');
	 }
	 ?>
