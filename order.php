<!DOCTYPE html>
<html>
<head>
	<title>B-TECH | ORDER</title>
	<link rel="icon" type="image/x-icon" href="logob-tech.png">
<style>
body {
  margin: 0;
  font-family: Georgia, serif;
  background-color:white;
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
  background-color: #d9b99b;
  color: black;
}

.topnav a.active {
  background-color: #d9b99b;
  color: white;
}

body {

}

*{
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #FED8B1;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 1011px;
}

input[type=submit]:hover {
  background-color: #d9b99b;
  color: black;
}

.container {
  border-radius: 5px;
  padding: 20px;
  margin-left: 450px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="topnav">
  <a style="float: left;" href="computers.html">COMPUTERS</a>
  <a style="float: right;" class="active" href="order.php">ORDER</a>
</div>

<div class="container">
  <form action="checkout.php" method="post">
    <div class="row">
      <div class="col-25">
        <label>Contact Number</label>
      </div>
      <div class="col-75">
        <input type="text" name="cnumber">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Address</label>
      </div>
      <div class="col-75">
        <input type="text" name="address">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Country</label>
      </div>
      <div class="col-75">
        <input type="text" name="country">
      </div>
    </div><br><br>
    <div class="row">
      <div class="col-25">
        <label>Order</label>
      </div>
      <div class="row">
      <div class="col-75">
      </div>
    </div>
  </div>
     <div class="row">
      <div class="col-25">
        <label>Desktop - PC</label>
      </div>
      <div class="col-75">
        <select  name="desktop">
          <option value="N/A">N/A</option>
          <option value="HP ENVY All-in-One 34-c1045t">HP ENVY All-in-One</option>
          <option value="Acer Aspire XC-1660G-UW94">Acer Aspire XC-1660G</option>
          <option value="Lenovo IdeaCentre AIO 5i">Lenovo IdeaCentre AIO 5i</option>
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label>Notebooks</label>
      </div>
      <div class="col-75">
        <select name="notebook">
          <option value="N/A">N/A</option>
          <option value="Apple Macbook Air (M2)">Apple Macbook Air (M2)</option>
          <option value="HP Spectre x360 14">HP Spectre x360 14</option>
          <option value="Asus Zenbook Pro Duo 14">Asus Zenbook Pro Duo 14</option>
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label>Mini PC</label>
      </div>
      <div class="col-75">
        <select name="minipc">
          <option value="N/A">N/A</option>
          <option value="Intel NUC 12 NUC12WSHi7 Wall Street Canyon Mini Computer">Intel NUC 12 Wall Street Canyon</option>
          <option value="MSI PRO DP21 12M-407US Mini PC Business Desktop">MSI PRO Mini PC</option>
          <option value="GEEKOM Mini PC, Mini IT8">GEEKOM Mini PC</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Message</label>
      </div>
      <div class="col-75">
        <textarea name="message" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
        <input type="submit" name="submit" value="Checkout">
    </div>
  </form>
</div>

</body>
</html>
