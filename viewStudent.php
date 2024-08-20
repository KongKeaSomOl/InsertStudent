
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <h1> View Student </h1>
      <?php include 'header.inc' ?>

    
    <?php 
    require 'libDb.php';
    $query = 'SELECT * FROM student';
    $result = mysqli_query($conn,$query);
    if($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $studentID = $row['studentID'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $city = $row['city'];
            $street = $row['street'];
            $DOB = $row['DOB'];

            
            echo "<p>Student ID: $studentID</p>";
            echo "<p>First Nmae: $firstName</p>";
            echo "<p>Last Nmae: $lastName</p>";
            echo "<p>Street: $street</p>";
            echo "<p>City: $city</p>";
            echo "<p>Date of Birth $DOB</p>";
            echo "<hr>";
        }   
    }else {
        echo 'Error';
    }
?>
</body>
</html>