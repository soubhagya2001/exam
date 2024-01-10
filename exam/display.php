<?php

include("connection.php");
error_reporting(0);

$query = "SELECT * FROM employee;";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>

    <table border="2">
        <tr>
            
            <th>NAME</th>
            <th>FATHER NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>DEPARTMENT</th>
            <th>ADDRESS</th> 
            <th>JOB TYPE</th>
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
                        <td>" . $result['dept'] . "</td>
                        <td>" . $result['addr'] . "</td>
                        <td>" . $result['job'] . "</td>
                </tr>";
        }

        echo "</table>";

} else {
    echo "No records found !";
}

?>
