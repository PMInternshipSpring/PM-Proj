<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Anusha121", "truinal_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$employee_department = mysqli_real_escape_string($link, $_REQUEST['employee_department']);
$employee_designation = mysqli_real_escape_string($link, $_REQUEST['employee_designation']);
$employee_hourly_rate = mysqli_real_escape_string($link, $_REQUEST['employee_hourly_rate']);
$employee_hours_worked = mysqli_real_escape_string($link, $_REQUEST['employee_hours_worked']);
$employee_id = mysqli_real_escape_string($link, $_REQUEST['employee_id']);
$employee_job_category = mysqli_real_escape_string($link, $_REQUEST['employee_job_category']);
$hire_date = mysqli_real_escape_string($link, $_REQUEST['hire_date']);
$supervisor_employee_id = mysqli_real_escape_string($link, $_REQUEST['supervisor_employee_id']);
$termination_date = mysqli_real_escape_string($link, $_REQUEST['termination_date']);
$birth_date = mysqli_real_escape_string($link, $_REQUEST['birth_date']);
$contact_number = mysqli_real_escape_string($link, $_REQUEST['contact_number']);
$employee_address_1 = mysqli_real_escape_string($link, $_REQUEST['employee_address_1']);
$employee_address_2 = mysqli_real_escape_string($link, $_REQUEST['employee_address_2']);
$employee_address_city = mysqli_real_escape_string($link, $_REQUEST['employee_address_city']);
$employee_address_country = mysqli_real_escape_string($link, $_REQUEST['employee_address_country']);
$employee_address_state = mysqli_real_escape_string($link, $_REQUEST['employee_address_state']);
$employee_email = mysqli_real_escape_string($link, $_REQUEST['employee_email']);
$employee_first_name = mysqli_real_escape_string($link, $_REQUEST['employee_first_name']);
$employee_last_name = mysqli_real_escape_string($link, $_REQUEST['employee_last_name']);
$employee_middle_name = mysqli_real_escape_string($link, $_REQUEST['employee_middle_name']);
$employee_zipcode = mysqli_real_escape_string($link, $_REQUEST['employee_zipcode']);


 
// attempt insert query execution
$sql = "INSERT INTO employee_info (employee_department, employee_designation, employee_hourly_rate,employee_hours_worked,employee_id,employee_job_category,hire_date,supervisor_employee_id,termination_date) VALUES ('$employee_department','$employee_designation','$employee_hourly_rate','$employee_hours_worked','$employee_id','$employee_job_category','$hire_date','$supervisor_employee_id','$termination_date')";
//$sql="INSERT INTO  personal_details"
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>