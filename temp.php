<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mapping page</title>

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
        <h2>Mapped details</h2>
        <form id = "myForm">
          <div = "form-group">
            <label>Exams</label>
            <input type="text" class="form-control" id="exams" placeholder="Enter the exam name">
          </div>          
          <div = "form-group">
          <?php
            $con=mysqli_connect("qualifications","root","");
            if (mysqli_connect_errno())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con,"SELECT * FROM qualifications");

            echo "<table border='1'>
                  <tr>
                  <th>qname</th>
                  </tr>";

            while($row = mysqli_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>" . $row['qname'] . "</td>";
              echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);
          ?>
          </div>
          <div = "form-group">
            <label>All accepted requests</label>
          </div>          
        </form>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <div id="bookmarksResults">


          </div>
        </div>
      </div>

    </div> <!-- /container -->
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/main.js"> </script>
  </body>
</html>
