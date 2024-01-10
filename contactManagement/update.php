<?php
$server = "localhost";
$username = "root";
$password ="";
$db_name = "company";
$con = mysqli_connect($server,$username,$password);

mysqli_select_db($con, $db_name);

$emailID = $_GET['email'];
$query = "SELECT * FROM contact where email = '$emailID'";
$data = mysqli_query($con , $query);

$result =  mysqli_fetch_assoc($data);



?>


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

    $sql = "UPDATE `contact` SET `name`='$name',`age`='$age',`gender`='$gender',`email`='$email',`phone`='$phone',`address`='$address' WHERE email='$emailID';";

    if($con->query($sql) === true){
        echo "<script>Successfully Updated</script>";
        header('location:details.php');
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
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container" >
        <h3>Update Details</h3><br>
        <form method="post">
            <input type="text" name="name" id="name" placeholder="Enter Full Name" value="<?php echo $result['name'] ;?>">
            <input type="number" name="age" id="age" placeholder="Enter Age" value="<?php echo $result['age'] ;?>">
            <input type="text" name="gender" id="gender" placeholder="Enter Gender" value="<?php echo $result['gender'] ;?>">
            <input type="email" name="email" id="email" placeholder="Enter Email ID" value="<?php echo $result['email'] ;?>">
            <input type="phone" name="phone" id="phone" placeholder="Enter Phone Number" value="<?php echo $result['phone'] ;?>">
            <input type="text" name="address" placeholder= "Enter Address" value="<?php echo $result['address'] ;?>">
            <center> <input type="submit" value='UPDATE'> <br> <br>
            <a href="details.php">Show Details</a></center>
            
        </form>
    </div>

   
    
   
    
    <!-- <script src="script.js"></script> -->
</body>
</html>