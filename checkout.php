<!DOCTYPE html>
<html>
<head>
  <title>B-TECH SHOP | ORDER CONFIRMATION</title>
  <link rel="icon" type="image/x-icon" href="logob-tech.png">
  <style>
    body {
      margin: 0;
      font-family: Georgia, serif;
      background-color: white;
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
</head>

<body>
  <div class="topnav">
  <a style="float: left;" href="computers.html">COMPUTERS</a>
  <a style="float: right;" href="order.php">ORDER</a>
    <a></a>
  </div>

  <div>
    <img src="logobig.png" alt="logobig">
  </div>

  <br><br><br><br>

  <div style="text-align: center;">
 <form action="afterorder.html" method="POST">
  <h3> 
    Your Order:<br>

    <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $address = $_POST["address"];
        echo "<br>";
        echo "Address: " . $address . "<br>";

		    $country = $_POST["country"];
        echo "Country: " . $country . "<br>";

        $cnumber = $_POST["cnumber"];
        echo "Contact Number: " . $cnumber . "<br>";

        $desktop = $_POST["desktop"];
        echo "Desktop: " . $desktop . "<br>";

        $notebook = $_POST["notebook"];
        echo "Notebook: " . $notebook . "<br>";

        $minipc = $_POST["minipc"];
        echo "Mini PC: " . $minipc . "<br>";

        $message = $_POST["message"];
        echo "Message: " . $message . "<br> <br>";
	   }
     ?>

     <?php
        // Insert the data into a database here if needed
        // Example: Use mysqli or PDO to insert data into a MySQL database

	  $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "info";

    // Create a database connection
    $con = mysqli_connect($host, $db_username, $db_password, $db_name);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Define your database table name
    $tb_orders = "tb_orders";

    // Create an SQL query to insert the form data into the database
    $sql = "INSERT INTO $tb_orders (ContactNumber, Address, Country, Desktop, Notebook, Minipc, Message)
            VALUES ('$cnumber', '$address', '$country', '$desktop', '$notebook', '$minipc', '$message')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        echo "Order submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);

    ?>
    <br>
  </h3>
    <input type="submit" value="Proceed">
  </div>
</body>
</html>
