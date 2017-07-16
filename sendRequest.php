<?php
	include('server.php');
	$ename = mysqli_escape_string($db,$_POST['ename']);
	
	 if(count($errors)==0){
		 $query = "INSERT INTO exam_quali_mapping (q1) VALUES
		 (SELECT vid,vname FROM team_1 WHERE vqualification!='$ename')";
	//$result = mysqli_query($db,$query);
		
		if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}
		
		
	 //alert("Request Sent Successfully!!!");
	 //$message = "Request sent successfully";
     //echo "<script type='text/javascript'>alert('$message');</script>";
	 }
	 ?>
