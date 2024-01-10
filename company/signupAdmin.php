


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
        
        <div class="box">

            
            <form action="" method="post">

                <h1>ADMIN REGISTRATION FORM</h1>
            
            
                <div class="row">
                    <label for="">Email : </label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                </div>

                <div class="row">
                    <label for="">Password : </label>
                    <input type="text" placeholder="Enter Password" name="password" required>
                </div>

                <div class="row">
                    <label for="">Name : </label>
                    <input type="text" placeholder="Enter Name" name="name" required>
                </div>
    
                <div class="row">
                    <label for="">Father Name : </label>
                    <input type="text" placeholder="Enter Father Name" name="fname" required>
                </div>
    
                <div class="row">
                    <label for="">DOB : </label>
                    <input type="date" placeholder="Enter Date Of Birth" name="dob">
                </div>
    
                <div class="row">
                    <label for="">Gender : </label>
                    <select name="gender" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
    
                <div class="row">
                    <label for="">Category : </label>
                    <input type="radio" name="cat" value="general"><label for="cat">General</label>
                    <input type="radio" name="cat" value="OBC"><label for="cat">OBC</label>
                    <input type="radio" name="cat" value="SC"><label for="cat">SC</label>
                    <input type="radio" name="cat" value="ST"><label for="cat">ST</label>
                </div>
    
                
    
                <div class="row">
                    <label for="">Phone : </label>
                    <input type="number" placeholder="Enter Phone Number" name="phone" required>
                </div>
    
                <div class="row">
                    <label for="">Languages : </label>
                    <input type="checkbox" name="lang" id="" value="English"><label for="lang">English</label>
                    <input type="checkbox" name="lang" id="" value="Hindi"><label for="lang">Hindi</label>
                    <input type="checkbox" name="lang" id="" value="Odia"><label for="lang">Odia</label>
                    <input type="checkbox" name="lang" id="" value="Tamil"><label for="lang">Tamil</label>
                </div>
    
                <div class="row">
                    <label for="">Address : </label>
                    <textarea name="add" id="" cols="20" rows="2" required ></textarea>
                </div>
    
                <input type="submit" name="submit" id="btn" value="submit">
                
            </form>
        </div>
    </div>
</body>
</html>


<?php 
    include("connection.php");

    
if(isset($_POST['name'])){
    //image data :


$email = $_POST["email"];
$pass = $_POST["password"];
$name = $_POST["name"];
$fname = $_POST["fname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$cat = $_POST["cat"];

$phone = $_POST["phone"];
$lang = $_POST["lang"];
$add = $_POST["add"];

$sql = "INSERT INTO `admin`(`email`,`password`, `name`, `fname`, `dob`, `gender`, `category`, `phone`, `languages`, `address`) VALUES ('$email','$pass','$name','$fname','$dob','$gender','$cat','$phone','$lang','$add');";

if($conn->query($sql) === true){
    echo "Successfully inserted";
    session_start();
    $_SESSION['type'] = "admin";
    $_SESSION['details'] = "client";
    header('location:site/index.php');
    $conn->close();
}else{
    echo "ERROR: $sql <br> $conn->error";
}

}
?>