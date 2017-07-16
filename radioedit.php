<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select Field</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body >

<form action="radioedit.php" method="post">
<div class = "container">
<div class = "jumbotron">
<h2 class="field_select">Select your field :</h2>
	<input type="radio" name="selection" value="Student"  onclick="student()"> <label>Student</label>
	<input type="radio" name="selection" value="Volunteer"  onclick="volunteer()"> <label >Volunteer</label>
	<input type="radio" name="selection" value="Admin" onclick="admin()"> <label>Admin</label>
</div>	
</div>
</form>

<div id="s">
	<!--Code for student-->
	<div class = "container">
	<div class = "jumbotron">
		<input type="radio" name="selection" value="SignIn"  onclick="ssignin()"> <label>Sign IN</label>
		<input type="radio" name="selection" value="SignUp"  onclick="ssignup()"> <label >Sign UP</label>
	</div>	
	</div>
	
	<div id="sin"><!--Code for SignIn-->
	<div class="container">
      <div class = "jumbotron">
          <h2>Enter your login details</h2>
        <form id = "myForm"  action="studentlogin.php" method="POST">
          <div class= "form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="sname" placeholder="Enter your Name" name="sname">
          </div>
          <div class= "form-group">
            <label><bold>Password</bold></label>
            <input type="password" class="form-control" id="spwd" placeholder="Enter your Password" name="spwd">
          </div>
		</div>
			<button type="submit" class="btn btn-primary" id="stulogin"> LogIn </button>
      </form>
      <footer class="footer">
        <p>I & Eye, Inc.</p>
      </footer>

    </div> <!-- /container -->
</div>
<div id="sup"><!--Code for SignUp-->
	<div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">Student Details</h3>
      </div>

      <div class="jumbotron">
        <h2>Enter the following details</h2>
        <form id = "myForm"  action="studentreg.php" method="POST">
          <div = "form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter your Name">
          </div>
          <div class= "form-group">
            <label>address</label>
            <input type="text" class="form-control" id="saddress" name="saddress" placeholder="Enter the address">
          </div>
          <div class= "form-group">
            <label>Email-id</label>
            <input type="text" class="form-control" id="semail" name="semail" placeholder="Enter your Email-id">
          </div>
          
          <div class= "form-group">
            <label>Mobile Number</label>
            <input type="text" class="form-control" id="smobile" name="smobile" placeholder="Enter your Mobile Number">
          </div>
          
          <div class= "form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="spwd" name="spwd" placeholder="Enter a password">
          </div>
		  <div class= "form-group">
            <label>Qualification</label>
            <input type="text" class="form-control" id="squalification" name="squalification" placeholder="Enter your Qualificaiton">
          </div>
          <div class= "form-group">
            <label>Gender</label>
			<select id="sgender" name="sgender">
  				<option value="male">Male</option>
  				<option value="female">Female</option>
			</select>
          </div>
          <div class= "form-group">
            <label>languages known</label>
      <select id="slang" name="slang">
          <option value="telugu">Telugu</option>
          <option value="hindi">hindi</option>
          <option value="english">English</option>
          <option value="tamil">Tamil</option>
      </select>
          </div>
          <button type="submit" class="btn btn-primary" id="stureg"> SUBMIT </button>
        </form>
      </div>	</div>
</div>
</div>

<div id="v">
<div class = "container">
<div class = "jumbotron">
	<input type="radio" name="selection" value="SignIn"  onclick="vsignin()"> <label>Sign IN</label>
	<input type="radio" name="selection" value="SignUp"  onclick="vsignup()"> <label >Sign UP</label>
</div>	
</div>
<div id="signin"><!--Code for SignIn-->
	<div class="container">
      <div class = "jumbotron">
          <h2>Enter your login details</h2>
        <form id = "myForm"  action="vollogin.php" method="POST">
          <div class= "form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="vname" placeholder="Enter your Name" name="vname">
          </div>
          <div class= "form-group">
            <label><bold>Password</bold></label>
            <input type="password" class="form-control" id="vpwd" placeholder="Enter your Password" name="vpwd">
          </div>
		</div>
			<button type="submit" class="btn btn-primary" id="vollogin"> LogIn </button>
      </form>
      <footer class="footer">
        <p>I & Eye, Inc.</p>
      </footer>

    </div> <!-- /container -->
</div>
<div id="signup"><!--Code for SignUp-->
		<div class="container">
      <div class="header clearfix">
        <nav>

        </nav>
        <h3 class="text-muted">Volunteer Details</h3>
      </div>

      <div class="jumbotron">
        <h2>Enter the following details</h2>
        <form id = "myForm"   action="volreg.php" method="POST">
          <div class= "form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="vname" name="vname" placeholder="Enter your Name">
          </div>
          <div class= "form-group">
            <label>address</label>
            <input type="text" class="form-control" id="vaddress" name="vaddress" placeholder="Enter your qualification">
          </div>
          <div class= "form-group">
            <label>Email-id</label>
            <input type="text" class="form-control" id="vemail1" name="vemail1" placeholder="Enter your Email-id">
          </div>
          <div class= "form-group">
            <label>Mobile Number</label>
            <input type="text" class="form-control" id="vmobile1" name="vmobile1" placeholder="Enter your Mobile Number">
          </div>
          <div class= "form-group">
            <label>Qualification</label>
            <input type="text" class="form-control" id="vqualification" name="vqualification" placeholder="Enter your Qualificaiton">
          </div>
          <div class= "form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="vpwd" name="vpwd" placeholder="Enter a password">
          </div>
          <div class= "form-group">
            <label>Gender</label>
			<select id="vgender" name="vgender">
				<option value="select">--Select--</option>
  				<option value="male">Male</option>
  				<option value="female">Female</option>
			</select>
          </div>
          <div class= "form-group">
            <label>language</label>
      <select id="vlang" name="vlang">
			<option value="select">--Select--</option>
			<option value="telugu">Telugu</option>
			<option value="hindi">Hindi</option>
			<option value="english">English</option>
			<option value="tamil">Tamil</option>
      </select>
          </div>
          <div class= "form-group">
            <label>Status</label>
            <input type="text" class="form-control" id="vstatus" name="vstatus" placeholder="Enter your Status">
          </div>          
          <div class= "form-group">
            <label>Days Available</label>
            <input type="text" class="form-control" id="vdaysav" name="vdaysav" placeholder="Enter your Qualificaiton">
          </div>
          <button type="submit" class="btn btn-primary" id="volreg"> GO! </button>
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
</div>

</div>
<div id="a">
	<!--Admin Code to be written here-->
	<div class="container">
      <div class = "jumbotron">
          <h2>Enter the following details</h2>
        <form id = "myForm"   action="admin.php" method="POST">
          <div class= "form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="adminName" placeholder="Enter your Name" name="adminName">
          </div>
          <div class= "form-group">
            <label><bold>Password</bold></label>
            <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password">
          </div>
		</div>
			<button type="submit" class="btn btn-primary" id="adminreg"> LogIn </button>
      </form>

      <footer class="footer">
        <p>I & Eye, Inc.</p>
      </footer>
    </div> <!-- /container -->

</div>



<script>
var stu = document.getElementById('s');
var vol = document.getElementById('v');
var adm = document.getElementById('a');
var signup = document.getElementById('signup');
var signin = document.getElementById('signin');
var sup = document.getElementById('sup');
var sin = document.getElementById('sin');
stu.style.display = 'none';
vol.style.display = 'none';
adm.style.display = 'none';
signin.style.display = 'none';
signup.style.display = 'none';
sin.style.display = 'none';
sup.style.display = 'none';

function checkAdminDetails() {
  var xhttp = new XMLHttpRequest();
  var url = "url";
  xhttp.open("POST", url, true);
  xhttp.setRequestHeader("Content-type", "application/json");
  var adminname = document.getElementById("adminname");
  var password = document.getElementById("password");
  
  myObj = { "adminname":adminname, "password":"password" };
  myJSON = JSON.stringify(myObj);
  //localStorage.setItem("testJSON", myJSON);
  //text = localStorage.getItem("testJSON");
  //obj = JSON.parse(text);document.getElementById("demo").innerHTML = obj.name;

  xhttp.onreadystatechange = function() {
	if (xhttp.readyState === 4 && xhttp.status === 200) {
        var json = JSON.parse(xhttp.responseText);
    }
  };
  xhttp.send(myJSON);
}

function student() {
    var stu = document.getElementById('s');
	vol.style.display = 'none';
	adm.style.display = 'none';
    if (stu.style.display === 'none') {
        stu.style.display = 'block';
    } else {
        stu.style.display = 'none';
    }
}
function volunteer() {
    var vol = document.getElementById('v');
	stu.style.display = 'none';
	adm.style.display = 'none';
    if (vol.style.display === 'none') {
        vol.style.display = 'block';
    } else {
        vol.style.display = 'none';
    }
}
function admin() {
    var adm = document.getElementById('a');
	vol.style.display = 'none';
	stu.style.display = 'none';
    if (adm.style.display === 'none') {
        adm.style.display = 'block';
    } else {
        adm.style.display = 'none';
    }
}
function vsignin() {
    var si = document.getElementById('signin');
	signup.style.display = 'none';
    if (si.style.display === 'none') {
        si.style.display = 'block';
    } else {
        si.style.display = 'none';
    }
}
function vsignup() {
    var su = document.getElementById('signup');
	signin.style.display = 'none';
    if (su.style.display === 'none') {
        su.style.display = 'block';
    } else {
        su.style.display = 'none';
    }
}
function ssignin() {
    var si = document.getElementById('sin');
	sup.style.display = 'none';
    if (si.style.display === 'none') {
        si.style.display = 'block';
    } else {
        si.style.display = 'none';
    }
}
function ssignup() {
    var su = document.getElementById('sup');
	sin.style.display = 'none';
    if (su.style.display === 'none') {
        su.style.display = 'block';
    } else {
        su.style.display = 'none';
    }
}




</script>
<img src="ieye.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:114px;" align="right">
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/main.js"> </script>

</body>
</html>