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
    <h3>
			Your Info:<br>

      <?php
         $USERNAME = $_POST ["USERNAME"];
         echo "Username: " . $USERNAME;

        	$fname = $_POST["fname"];
        	echo "<br>";
        	echo "Firstname: " . $fname . "<br>";

			    $lname = $_POST["lname"];
  	      echo "Lastname: " . $lname . "<br>";

	        $email = $_POST["email"];
  	      echo "Email: " . $email . "<br>";

					$PSW = $_POST["PSW"];
  	      echo "Password: " . $PSW . "<br> <br>";  	      
      ?>


<?php
if (isset($_POST['submit'])) {
    $USERNAME =$_POST['USERNAME']; // Replace with your actual database username
    $PSW =$_POST['PSW'];  // Replace with your actual database password
}
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    // Database connection settings
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "info";
    $con = mysqli_connect($host, $user, $password, $dbname);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO tb_records (username,firstname, lastname, email, password)
            VALUES ('$USERNAME','$fname', '$lname', '$email', '$PSW')";

    if (mysqli_query($con, $sql)) {
        echo "WELCOME TO OUR SHOP " . $USERNAME . "!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
?>
</h3>
		<input type="submit" value="Proceed">
	</form>
</div>
</body>
</html>