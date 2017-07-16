<?php
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"Team_1");
if(isset($_REQUEST['vname'] && $_REQUEST['vaddress'] && $_REQUEST['vemail1'] && $_REQUEST['vemail2'] && $_REQUEST['vmobile1']&& $_REQUEST['vmobile2'] && $_REQUEST['vqualification'] && $_REQUEST['vpwd'] && $_REQUEST['vgender'] && $_REQUEST['vlang'] && $_REQUEST['vstatus'] && $_REQUEST['vdaysav']   ))
{
$result = mysqli_query($conn," INSERT INTO `team_1` (`vid`, `vname`, `vaddress`, `vemail1`, `vemail2`, `vmobile1`, `vmobile2`, `vqualification`, `vpwd`, `vgender`, `vlang`, `vstatus`, `vdaysav`) VALUES ('?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?'".$_COOKIE['vname']."'");  
 
	$message = "<br><br><br><br><br><br><br><br><br><br><br><br><br>successfully Registered!!!";
echo $message."<br><br><br>";
}
}
?>
<html>
<body >
<form action="" method="post"  >    
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"Team-1");
?>
       <input type="submit" name="submit" value="Submit"/>
</form> 

<img src="ieye.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:114px;" align="right">
</body>
</html>
