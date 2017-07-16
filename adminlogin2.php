<?php include('server.php'); ?>
<!doctype html>
<hmtl>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Admin Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 </head>
   <body>

    <div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">Admin Page</h3>
      </div>

      <div class="jumbotron">       
       
            <h2> MODIFYING DETAILS</h2>
              <div = "form-group">            
                <label>For adding student details</label>  
				<form action="studentadd.php" method="post">
				<a type="button" class="btn btn-primary" value="Submit" href = "studentadd.php">ADD</a>
				</form>
              </div>
			  
             <!-- <div = "form-group">            
	              <label>Update Qualification details</label>	
                <input type="text" class="form-control"  id="qualificationdetails" placeholder="Enter the Modified details">
              </div>-->
  <br>
              <div = "form-group">            
                <label>Add Qualifications</label> 
				
				<select name="ename" id="ename">
			<?php
			$query = "SELECT ename FROM examdb";
			$result = mysqli_query($db, $query);
		
			while ($cdrow=mysqli_fetch_array($result)) {
				$cdTitle=$cdrow["ename"];
					echo "<option>
						$cdTitle
					</option>";
				}
			?></select>

				<form id = "myForm"  action="addquali.php" method="POST">
                <input type="text" class="form-control"  id="addqualifications" name="addqualifications" placeholder="Enter to update qualification"> 
                <button type="submit" class="btn btn-primary"> ADD </button>
				</form>
              </div>   
<br>			  
              <!--<div = "form-group">            
                <label>Scheduled Details</label><br>  
                <textarea rows="4" cols="50">
                </textarea>
              </div> -->
              <div = "form-group">            
                <label>Set Qualification</label>  
                <!--<button onclick="onclickfun()"> Mapping Details </button>-->
				<a type="button" class="btn btn-primary" value="Submit" href = "mapping.php"> Map </a>
              </div>
			  <br>
              <div = "form-group">            
                <label>To send alert to students</label>  
                <button type="submit" class="btn btn-primary"> Send Alert </button>
              </div> 
			  <br>
              <div = "form-group">            
                <label>To get mapping details</label>  
                <button class="btn btn-primary" onclick="onclickfun()"> Mapping Details </button>
				<!--<a type="button" class="btn btn-primary" value="Download" href="mappingdb.sql" download="mappingfile">Download</a>-->
              </div>

      </div>


      <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults">


          </div>
        </div>
      </div>
      <img src="ieye.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:114px;" align="right">

      <footer class="footer">
        <p>I & Eye, Inc.</p>
      </footer>

    </div> <!-- /container -->
    <b><marquee><font color='blue'>I & Eye, Sharing Vision<marquee></b>
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/main.js"> </script>
  </body>
</hmtl>