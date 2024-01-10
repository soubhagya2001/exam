<?php

include("connection.php");
session_start();
error_reporting(0);

$query = "SELECT * FROM client;";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>

    <center>

    <table border="2">
    <tr>
            
            <th>NAME</th>
            <th>FATHER NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            
            <th>ADDRESS</th> <!-- Corrected the column name to 'ADDRESS' -->
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                       
                        <td>" . $result['name'] . "</td>
                        <td>" . $result['fname'] . "</td>
                        <td>" . $result['age'] . "</td>
                        <td>" . $result['gender'] . "</td>
                        <td>" . $result['phone'] . "</td>
                        <td>" . $result['email'] . "</td>
                        
                        <td>" . $result['address'] . "</td>
                </tr>";
        }

        echo "</table></center>";

} else {
    echo "No records found !";
}

?>
