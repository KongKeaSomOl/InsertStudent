<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Welcome School</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.inc' ?>
  <h1 style="text-align:center;magin-top:50%"; >Welcome to my School </h1>

</body>
</html>

<!-- <?php
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

?> -->