<html>
<head>
  <title>B-TECH SHOP | INFO</title>
  <link rel="icon" type="image/x-icon" href="logob-tech.png">
<style>

body {
  margin: 0;
  font-family: Georgia, serif;
  background-color:white;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
}

.topnav {
  overflow: hidden;
  background-color: #FED8B1;
}

.topnav a {
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #e4d5b7;
  color: black;
}

.topnav a.active {
  background-color: #d9b99b;
  color: white;
}

  input[type=submit] {
    text-align: center;
    background-color: #FED8B1;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}

  input[type=submit]:hover {
    background-color: #d9b99b;
    color: black; 

  }
</style>

<body>
<div class="topnav">
  <a style="float: left;" href="computers.html">COMPUTERS</a>
  <a style="float: right;" href="order.php">ORDER</a>
</div>

<div>
  <img src="logobig.png" alt="logobig">
</div>

		<br><br><br><br>
	<div style="text-align: center;">
	<form action="computers.html" method="POST">


<?php

if ($_POST['form-type'] = "login") {
    
    //Lagay mo dito yung code ng para sa login
  
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_close($con);
  }

?>
</h3>
		<input type="submit" value="Proceed">
	</form>
</div>
</body>
</html>