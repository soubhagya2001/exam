<?php

if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password ="";
    $db_name = "practice1";
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    mysqli_select_db($con, $db_name);

    //echo "Success connecting to database";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `details1` (`name`, `age`, `gender`, `dob`, `email`, `time`) VALUES ('$name', '$age', '$gender', '$dob', '$email', current_timestamp());";

    if($con->query($sql) === true){
        echo "Successfully inserted";
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
    <div class="container">
        <h3>Enter Details</h3><br>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Full Name">
            <input type="number" name="age" id="age" placeholder="Enter Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Gender">
            <input type="date" name="dob" id="dob" placeholder="Enter Date Of Birth">
            <input type="email" name="email" id="email" placeholder="Enter Email">
            <button id="submit">SUBMIT</button>
            <button id="clear">CLEAR</button>
        </form>
    </div>


    
    <!-- INSERT INTO `details1` (`sno`, `name`, `age`, `gender`, `dob`, `email`, `time`) VALUES ('0', 'Soubhagya Prusty', '22', 'male', '2023-10-01', 'soubhagya@gmail.com', 'current_timestamp()'); -->
    
    <script src="script.js"></script>
</body>
</html>