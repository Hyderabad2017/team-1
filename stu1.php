<?php include('server.php'); ?>
<!doctype html>
<hmtl>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Registration page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 </head>
   <body>

    <div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">STUDENT</h3>
      </div>

      <div class="jumbotron">
        
        <form id = "myForm">
<h2> REQUEST A SCRIBE</h2>
EXAM DETAILS</br>
<div = "form-group">
	<label>NAME OF THE EXAM</label>
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

</div>
          <div = "form-group">
            <label>DATE</label>
            <input type="date" class="form-control" id="dt" placeholder="ENTER THE DATE OF THE EXAM">
          </div>
          <div = "form-group">
            <label>LOCATION</label>
            <input type="text" class="form-control" id="lc" placeholder="ENTER THE LOCATION">
          </div><br/>
	<label>REQUIREMENTS OF SCRIBE:</label> </br>
	<div = "form-group">
            <label>LANGUAGE</label>
 
            <!--<div class="dropdown">
  				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Language
  				<span class="caret"></span></button>
  				<ul class="dropdown-menu">
    				<li><a href="#">Telugu</a></li>
    				<li><a href="#">Hindi</a></li>
    				<li><a href="#">English</a></li>
  				</ul>
			</div>-->
			<select>
			<option value="">--No Option--</option>
  				<option value="telugu">Telugu</option>
  				<option value="hindi">hindi</option>
  				<option value="english">English</option>
  				<option value="tamil">Tamil</option>
			</select>
          </div>

           <div = "form-group">
            <label>GENDER</label>
 
            <!--<div class="dropdown">
  				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Language
  				<span class="caret"></span></button>
  				<ul class="dropdown-menu">
    				<li><a href="#">male</a></li>
    				<li><a href="#">female</a></li>
    				
  				</ul>
			</div>-->
			<select>
  				<option value="male">male</option>
  				<option value="female">female</option>
  				
			</select>
          </div>
          
	
          <button type="submit" class="btn btn-primary"> SEND REQUEST </button>
        
      </div>
	  <div class="jumbotron">
SCHEDULES EXAMS
    <div class="form-group">
<textarea rows="4" cols="50"></textarea>
</div>
ACCEPTED REQUESTS
<div class="form-group">
<textarea rows="4" cols="50"></textarea>
</div>

FEEDBACK
<div class="form-group">
<textarea rows="4" cols="50">
</textarea>
 </div>
</div>
</form>

      <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults">


          </div>
        </div>
      </div>

      <footer class="footer">
        <p>I & Eye, Inc.</p>
      </footer>

    </div> <!-- /container -->
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/main.js"> </script>
  </body>
</hmtl>