<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mapping details</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">I & Eye</h3>
      </div>

      <div class="jumbotron">
        <h2>Mapped Details</h2>
        <form id = "myForm">
          <div = "form-group">
            <label>Select Language </label>
          </div>
          <select>
            <option value="ssc">SSC</option>
            <option value="inter1">Intermediate 1st year</option>
            <option value="inter2">Intermediate 2nd year</option>
            <option value="btech">Btech</option>
          </select><br>
          
          <div = "form-group">
            <label>Mapped Details</label>
          </div>  
			<form action="/action_page.php" method="get">
				<input type="checkbox" name="vehicle" value="Bike"> Intermediate<br>
				<input type="checkbox" name="vehicle" value="Car" checked> 9th Standard<br>
				<input type="checkbox" name="vehicle" value="Car"> Bank PO<br>
				<input type="checkbox" name="vehicle" value="Car"> LLB<br>
				<input type="checkbox" name="vehicle" value="Car"> CA<br>
				<button type="submit" class="btn btn-primary btn-xs"> Submit </button>
			</form>
			
          
        </form>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults">


          </div>
        </div>
      </div>

<Button onClick="/sendnotifications.php" >Accept</Button>
<Button onClick="/Rejectedrequest.php" >Reject</Button>



    </div> <!-- /container -->
    <img src="ieye.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:114px;" align="right">
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/main.js"> </script>
  </body>
</html>
