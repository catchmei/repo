<?php


  include('header.php');

  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employee_system";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  

  if(isset($_POST['submit']))
{
  



$email = $_POST['email'];
$password =$_POST['password'];


$sql = "SELECT * FROM `emp` WHERE email='$email' && password='$password'";

$result = mysqli_query($conn,$sql);

 
  if(mysqli_num_rows($result)){



    while($row = mysqli_fetch_assoc($result)){

 $_SESSION['fname'] =  $row['fname'];
 
 $_SESSION['email'] =  $row['email'];
 header("Location:index.php");

    }

  }else{

    echo "data Not Found";
  }




}

$conn->close();



?>
<div class="container">
<form action="" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>













<?php

include('footer.php');

  ?>