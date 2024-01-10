<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <!-- <img src="images/backgroung.jpg" alt=""> -->
        </div>

        <div class="right">
            <h1>SRI RK TRADERS</h1>
            <p>Welcome to Sri RK Trader</p> <br> <br>

            <div class="img-box">
                <img src="images/client.png" alt="">
                
            </div>


            <br> <br>
            <form action="" method="post" style="width: 100%;">
                
                <div class="input-box">
                    <input type="text" placeholder="Enter Email Id" name="email" >
                </div>

                <br>

                <div class="input-box">
                    <input type="text" placeholder="Enter Password" name="password">
                </div> 
                
                <br>

                <div class="input-box">
                    <input type="submit" value="submit" name="submit">
                </div>            
            </form>


            <p>Not Registered Yet ? <a href="user-type.html">SignUP</a></p>

        </div>
    </div>
</body>
</html>



<?php

 include("connection.php");

// if (isset($_POST['email'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = "SELECT * FROM client WHERE email='$email' && password='$password';";
//     $query2 = "SELECT * FROM admin WHERE email='$email' && password='$password';";

//     $result = mysqli_query($conn, $query); // Execute the query
//     $result2 =  mysqli_query($conn, $query2);

//     $data = mysqli_fetch_assoc($result);
//     $data2 = mysqli_fetch_assoc($result2);

//     echo "query";
//     if ($result) {
//         $total = mysqli_num_rows($result);
//         //echo "$total";

//         if ($total == 1) {
//             session_start();
//             $_SESSION['type'] = "admin";
//             header('location:site/index.php');
//             return;
//         } else {
            
//         }
//     } else if($result2){
//         $total = mysqli_num_rows($result2);
//         echo "$total";

//         if ($total == 1) {
//             session_start();
//             $_SESSION['type'] = "client";
//             header('location:site/index.php');
//         } 
//     }else {
//         echo "Query execution failed: " . mysqli_error($conn);
//     }
// }


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM client WHERE email='$email' AND password='$password';";
    $query2 = "SELECT * FROM admin WHERE email='$email' AND password='$password';";

    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);

    if ($result && mysqli_num_rows($result)==1) {
        $total = mysqli_num_rows($result);
        if ($total == 1) {
            session_start();
            $_SESSION['type'] = "client";
            $_SESSION['details'] = "admin";
            header('location: site/index.php');
            return;
        }
    } 

    if ($result2 && mysqli_num_rows($result2)==1) {
        $total = mysqli_num_rows($result2);
        if ($total == 1) {
            session_start();
            $_SESSION['type'] = "admin";
            $_SESSION['details'] = "client";
            header('location: site/index.php');
        }
    } else {
        echo "Query execution failed: " . mysqli_error($conn);
    }
}


?>