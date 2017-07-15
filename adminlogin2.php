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
        <form id = "myForm">
            <h2> MODIFYING DETAILS</h2>
              <div = "form-group">            
                <label>For adding student details</label>  
                <button type="submit" class="btn btn-primary"> Add Student </button>
              </div> 
             <!-- <div = "form-group">            
	              <label>Update Qualification details</label>	
                <input type="text" class="form-control"  id="qualificationdetails" placeholder="Enter the Modified details">
              </div>-->
              <?php
              $con=mysqli_connect("example","root","");
              // Check connection
              if (mysqli_connect_errno())
              {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              $result = mysqli_query($con,"SELECT * FROM exmp");

              echo "<table border='0'>
                    <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    </tr>";

              while($row = mysqli_fetch_array($result))
              {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['qname'] . "</td>";
              echo "</tr>";
              }
              echo "</table>";

              mysqli_close($con);
              ?> 
              <div = "form-group">            
                <label>Add Qualifications</label> 
                <input type="text" class="form-control"  id="addqualifications" placeholder="Enter the Modified qualification"> 
                <button type="submit" class="btn btn-primary"> ADD </button>
              </div>         
              <div = "form-group">            
                <label>Scheduled Details</label><br>  
                <textarea rows="4" cols="50">
                </textarea>
              </div> 
              <div = "form-group">            
                <label>To send alert to students</label>  
                <button type="submit" class="btn btn-primary"> Send Alert </button>
              </div> 
              <div = "form-group">            
                <label>To get mapping details</label>  
                <button onclick="onclickfun()"> Mapping Details </button>
              </div>
          <button type="submit" class="btn btn-primary"> SUBMIT </button>
        </form>        
      </div>


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