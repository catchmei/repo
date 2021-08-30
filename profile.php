<?php


  include('header.php');

  if($_SESSION['fname']){
  
$sql = "SELECT * FROM `emp` WHERE email ='". $_SESSION['email']."'";

$result = mysqli_query($conn,$sql);

 
  if(mysqli_num_rows($result)){

   


    while($row = mysqli_fetch_assoc($result)){

        ?>
<div class="container">
  
<h2 style='text-align:center'>Profile Page</h2>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php  echo $row['fname'] ?></td>
        <td><?php  echo $row['lname'] ?></td>
        <td><?php  echo $row['email'] ?></td>
        <td><?php  echo $row['address'] ?></td>
        <td><?php  echo $row['contact'] ?></td>
      </tr>
      
    </tbody>
  </table>
</div>


<?php


    }

  }else{

    echo "data Not Found";
  }

}


?>












<?php

include('footer.php');

  ?>