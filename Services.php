<!DOCTYPE html>
<html>
<head>
<style>
<?php
require_once 'header.php'; 
require_once 'conn.php';   
?>

</style>

</head>

<body>
<h1 style="font-size:60px;font family: verdana;color: #000000;text-align:center">Zuber</h1>
<h2 style="font-size:30px;font family: verdana;color: #000000">Need a Ride?</h1>

<form method = "post" action= "submit.php">
  <label for="name"> Name:</label><br>
  <input type="text" id="name" name="name"><br>


  <label for="num">Telephone Number:</label><br>
  <input type="type" id="num" name="num" ><br>

  <label for="location">Location :</label><br>
  <input type="text" id="location" name="location" ><br>


  <label for="destination">Destination:</label><br>
  <input type="text" id="destination" name="destination" ><br><br>
  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
     

</form>  
<style>
body  {
  background-image: url("services.gif");
  background-color: #cccccc;
}
</style>
  
<?php require_once 'footer.php'; ?>


</body>
</html>
