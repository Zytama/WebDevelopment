<!DOCTYPE html>
<html>
<head>
  <title>B-TECH SHOP</title>
  <link rel="icon" type="image/x-icon" href="logob-tech.png">
<style>

body {
  margin: 0;
  font-family: Georgia, Arial, Helvetica, sans-serif;
  background-color:white;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}

/*Nav bar starts here*/
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
/*nav bar ends here*/


.welcome-text{
  text-align: center;
}

/*input types*/
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/*BUTTONs!!!!*/
button {
  background-color: #fed8b1;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 10%;
  margin: 3px;
}

button:hover {
  opacity: 0.8;
  background-color: #d9b99d;
  color: #000;
}

/*ekis ka na par*/
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/*animated signup*/
.modal {
  display: none; /*hidden*/
  position: fixed; /*nowhere to go*/
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 70px;
}

/*Content/Box*/
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/*Zoom Animation*/
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>

<body>
<div class="topnav">
  <a style="float: left;" class="active" href="home.php">HOME</a>
  <a style="float: left;" href="aboutus.html">ABOUT US</a>
</div>

<div>
  <img src="logobig.png" alt="logobig">
</div>

<div>
  <br><br><br><br>
  <h2 style="font-size: 30px;" class="welcome-text">This website shows what are the ideal pre-built computers as of now! </h2>
  <p style="font-size: 20px;" class="welcome-text">Explore everything here at B-Tech.
	<br>One! Stop! Shop!</p>
</div>

    <!-- modal content javascript (SIGN UP)-->
    <div style="display: flex; justify-content: center; align-items: center;">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" style="size: 10px; float: left;">SIGN-UP</button>
    <div id="id01" class="modal">
    <form class="modal-content animate" action="info.php" method="post">
          <h2 style="text-align: center;">SIGN-UP</h2>

          <div class="container">

              <label for="USERNAME"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="USERNAME" required>

              <label for="fname"><b>First Name</b></label>
              <input type="text" placeholder="Enter First Name" name="fname" required>

              <label for="lname"><b>Last Name</b></label>
              <input type="text" placeholder="Enter Last Name" name="lname" required>

              <label for="email"><b>E-mail</b></label>
              <input type="text" placeholder="Enter E-mail" name="email" required>

              <label for="PSW"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="PSW" required>

              <label>
                <input type="checkbox" name="AcceptTerms" required> I have read and accept the <a href="tac.html">Terms and conditions</a>
              </label>
              <br><br>
        <!-- submit button -->
      <button type="reset">Clear</button>
      <button type="submit" name="submit">Submit</button>
    </div>

    <!-- container below -->
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
    </form>
    </div>


    <!-- modal container javascript (LOG IN)-->
    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" style="size: 10px;">LOG-IN</button> 

    <div id="id02" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <h2 style="text-align: center;">LOG-IN</h2>

    <div class="container">
      <label for="email"><b>E-mail</b></label>
      <input type="text" placeholder="Enter E-mail" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Submit</button>
    </div>
    <!-- container below -->
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot<a href="#">password?</a></span>
    </div>
    </form>
    </div>
    </div>


</body>
</html>
