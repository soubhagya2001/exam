

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="header">
            <h1>EMPLOYEE DETAILS FORM</h1>
        </div>

        <div class="form">

            <form method="POST" action="index.php">
            <div class="data">
            <label for="name">Name :</label>
            <input type="text" placeholder="Enter Name" name="name" required>
            </div>

            <div class="data">
            <label for="fname">Father Name : </label>
            <input type="text" name="fname" placeholder="Enter Father's Name" required>
            </div>

            <div class="data">
            <label for="age">Age :</label>
            <input type="number" name="age" placeholder="Enter Age" required>
            </div>

            <div class="data2">
                <span >Gender :</span>
                <label for="male">Male</label>
                <!-- <input type="text" name="gender" placeholder="Enter Gender" required> -->
                <!-- <select name="gender" id="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select> -->

                <input type="radio" value="Male" name="gender">

                <label for="female">Female</label>
                <input type="radio" value="Female" name="gender">

                <label for="other">Other</label>
                <input type="radio" value="Other" name="gender">
            </div>

            <div class="data">
            <label for="phone">Phone : </label>
            <input type="tel" name="phone" placeholder="Enter Phone Number" required>
            </div>

            <div class="data">
            <label for="email">Email : </label>
            <input type="email" name="email" placeholder="Enter Email" required>
            </div>

            <div class="data">
                <label for="dept">Department :</label>
                <!-- <input type="text" name="dept" placeholder="Enter Department Name" required> -->
                <select name="dept" id="">
                    <option value="Maths">Maths</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Botany">Botany</option>
                    <option value="Zoology">Zoology</option>
                    <option value="Mca">Mca</option>
                    <option value="History">History</option>
                    <option value="Economics">Economics</option>
                </select>
            </div>


            <div class="data">
                <label for="add">Address : </label>
                <textarea name="add" id="" cols="30" rows="2" placeholder="Enter Address " required></textarea>
            </div>


            <div class="data1">
                
                <div class="job">
                <span>Job Type :</span>
                <label for="part">Part-Time</label>
                <input type="checkbox" name="part" value="Part-Time" >

                <label for="full">Full-Time</label>
                <input type="checkbox" name="full" value="Full-Time" >
                </div>
                
               
                

            </div>
            
            
            <div class="submission">
                <input type="submit" value="register" id="submit" class="btn">
                <input type="button" value="details"  id="details" class="btn" onClick="window.location.href='display.php';">
            </div>


           
            </form>
        
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>


<?php
include("connection.php");


if($_POST['name']){
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    // $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];
    $add = $_POST['add'];
    // $job = $_POST['job'];

    // Check if "gender" and "job" are set in $_POST
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    
    // Check if "job" is set in $_POST and convert it to a string
    $job = isset($_POST['job']) ? implode(", ", $_POST['job']) : null;

    $query = "INSERT INTO emp1 (`name`, `fname`, `age`, `gender`, `phone`, `email`, `dept`, `address`,`job`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";



    $stmt = mysqli_prepare($conn, $query);


    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssisssss", $name, $fname, $age, $gender, $phone, $email, $dept, $add, $job);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Data added successfully !')</script>";
        } else {
            echo "<script>alert('Data adding failed !')</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Statement preparation failed !')</script>";
    }
    
    

    
}  
?>
