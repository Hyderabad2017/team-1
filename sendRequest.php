<?php
	include('server.php');
	$ename = mysqli_escape_string($db,$_POST['ename']);
	
	 if(count($errors)==0){
		 $query = "INSERT INTO mappingdb (vid,sid,vname,sname,vaddress,saddress,vemail,semail,vmobile,smobile,backup1,backup2,ndays,time,dur) 
		 VALUES ( $_POST['dt'], $_POST['lc'], $_POST['send'], $_POST['gend'], $_POST['ndays'],$_POST['tm'], $_POST['dur'])";
	//$result = mysqli_query($db,$query);
		
		if ($result=mysqli_query($db,$query))
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
