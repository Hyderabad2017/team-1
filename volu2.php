<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Volunteer Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body background="logo.png">

    <div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">I & Eye</h3>
      </div>

      <div class="jumbotron">
        <h2>Mapped details</h2>
        <form id = "myForm">
          <div = "form-group">
            <label>All recieved requests</label>
          </div>          
          <textarea rows="4" cols="50" name="mapret">
          </textarea>
           <div = "form-group">
            <label>Status</label>
      		<select id="vstatus">
          		<option value="busy">Busy</option>
          		<option value="avail">Available</option>
      		</select>
          </div>
          <div = "form-group">
            <label>All accepted requests</label>
          </div>          
          <textarea rows="4" cols="30" name="mapret">
          </textarea>
        </form>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults">


          </div>
        </div>
      </div>

    </div> <!-- /container -->
    <b><marquee><font color='blue'>I & Eye, Sharing Vision<marquee></b>
    <img src="ieye.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:114px;" align="right">
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/main.js"> </script>
  </body>
</html>
