<?php


  include('header.php');






  


  



if(isset($_POST['submit']))
{
  

$fname=$_POST['fname'];
$lname=$_POST['lname'];

$contact=$_POST['contact'];
$address=$_POST['address'];

$email = $_POST['email'];
$password =$_POST['password'];


$sql = "INSERT INTO emp(fname,lname,contact,address,email,password) VALUES('$fname','$lname','$contact','$address','$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<div class="container">
<form action="" method="post">
  <div class="form-group">
    <label for="email">First name:</label>
    <input type="text" class="form-control" placeholder="First Name" name="fname" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Last name:</label>
    <input type="text" class="form-control" placeholder="Last fname" name="lname" id="pwd">
  </div>
  
  <div class="form-group">
    <label for="email">Contact:</label>
    <input type="text" class="form-control" placeholder="Contact" name="contact" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Address:</label>
    <input type="text" class="form-control" placeholder="Address" name="address" id="pwd">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" placeholder="Enter email" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="text" class="form-control" placeholder="Enter password" name="password" id="pwd">
  </div>
  <input type="submit" name="submit"  value="submit">
</form>
</div>

  
</body>
</html>











<!-- 
<?php

// include('footer.php');

  ?> -->
  