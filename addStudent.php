<?php
require_once"libDb.php";
if($_SERVER['REQUEST_METHOD']==='POST'){
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $street= $_POST['street'];
  $city= $_POST['city'];
  $DOB = $_POST['DOB'];

  $insertQuery = "INSERT INTO student(firstName, lastName, street, city, DOB) VALUES ('$firstName','$lastName','$street','$city', '$DOB')";

  if(mysqli_query($conn, $insertQuery)){
    echo '<p>QUERY IS SUCESSFUL!</p>';

  }else {
    echo '<p>QUERY IS FAILED!</p>';
  }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <?php include 'header.inc' ?>
  <h1>Add Student </h1>
    <div class="form-container">
        <form  method="post" action="addStudent.php">
       <label for="first-name">First Name:</label>
      <input type="text" id="first-name" name="firstName" required>
   
    
      <label for="last-name">Last Name:</label>
      <input type="text" id="last-name" name="lastName" required>
  
      <label for="street">Street Address:</label>
      <input type="text" id="street" name="street" required>
   
      <label for="city">City:</label>
      <input type="text" id="city" name="city" required>
   
      <label for="DOB" >Date of Birth:</label>
      <input type="date" id="DOB" class="dob" name="DOB" required><br>

    <button type="submit">Add Student</button>
</div>
</body>
</html>