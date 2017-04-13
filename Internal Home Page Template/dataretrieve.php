<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "Anusha121";
$dbname = "truinal_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT employee_id, supervisor_employee_id, employee_department FROM employee_info ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["employee_id"]. " - supervisorid: ". $row["supervisor_employee_id"]. "departname " . $row["employee_department"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>
