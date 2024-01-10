<?php

include("connection.php");
session_start();
error_reporting(0);

$query = "SELECT * FROM admin;";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>

    <center>
    <table border="2">
        <tr>
            
            <th>NAME</th>
            
            
            <th>GENDER</th>
           
            <th>EMAIL</th>
            
            
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                        
                        <td>" . $result['name'] . "</td>
                        
                        <td>" . $result['gender'] . "</td>
                       
                        <td>" . $result['email'] . "</td>
                        
                       
                </tr>";
        }

        echo "</table> </center>";

} else {
    echo "No records found !";
}

?>
