<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "celesbuzzo", "truinal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$project_status = mysqli_real_escape_string($link, $_REQUEST['project_status']);
$project_name = mysqli_real_escape_string($link, $_REQUEST['project_name']);
$project_description = mysqli_real_escape_string($link, $_REQUEST['project_description']);
$iteration_number = mysqli_real_escape_string($link, $_REQUEST['iteration_number']);
$end_date = mysqli_real_escape_string($link, $_REQUEST['end_date']);
$start_date = mysqli_real_escape_string($link, $_REQUEST['start_date']);
$deliverable = mysqli_real_escape_string($link, $_REQUEST['deliverable']);
$client_id = mysqli_real_escape_string($link, $_REQUEST['client_id']);

// attempt insert query execution
$sql ="insert into project(project_status,project_name,project_description,iteration_number,start_date,end_date,deliverable,client_id) 
        values('$project_status','$project_name','$project_description','$iteration_number','$start_date','$end_date','$deliverable','$client_id')";
if(mysqli_query($link, $sql)){
     echo "
			Records added successfully.
			<br >
			<form action='iteration.html' method='post'>
				<input type='submit' value='Click to add iteration details for the Project'/>
			</form>
			<form action='project.html' method='post'>
				<input type='submit' value='Go Back to Project Page'/>
			</form>
			
	";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>