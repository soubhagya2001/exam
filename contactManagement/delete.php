<?php
$server = "localhost";
$username = "root";
$password ="";
$db_name = "company";
$con = mysqli_connect($server,$username,$password);

mysqli_select_db($con, $db_name);

$emailID = $_GET['email'];
$query = "DELETE FROM contact where email = '$emailID'";
$data = mysqli_query($con , $query);

// $result =  mysqli_fetch_assoc($data);
if($data){
    echo "Record Deleted";
    header('location:details.php');
}else{
    echo "Failed to delete";
}




?>