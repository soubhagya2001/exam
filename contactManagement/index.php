<?php

if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password ="";
    $db_name = "company";
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    mysqli_select_db($con, $db_name);

    //echo "Success connecting to database";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `contact` (`name`, `age`, `gender`, `email`, `phone`, `address`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$address');";

    if($con->query($sql) === true){
        echo "Successfully inserted";
        header('location:index.php');
    }else{
        echo "ERROR: $sql <br> $conn->error";
    }

    $con->close();

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container" >
        <h3>Enter Details</h3><br>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Full Name">
            <input type="number" name="age" id="age" placeholder="Enter Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Gender">
            <input type="email" name="email" id="email" placeholder="Enter Email ID">
            <input type="phone" name="phone" id="phone" placeholder="Enter Phone Number">
            <input type="text" name="address" placeholder= "Enter Address">
            <center> <button id="submit">SUBMIT</button> <br> <br>
            <a href="details.php">Show Details</a></center>
            
        </form>
    </div>

   
    
   
    
    <!-- <script src="script.js"></script> -->
</body>
</html>