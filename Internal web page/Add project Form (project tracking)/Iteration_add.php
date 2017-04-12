<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "celesbuzzo", "truinal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$iteration_id= mysqli_real_escape_string($link, $_REQUEST['iteration_id']);
$project_id= mysqli_real_escape_string($link, $_REQUEST['project_id']);
$features = mysqli_real_escape_string($link, $_REQUEST['features']);
$status_type = mysqli_real_escape_string($link, $_REQUEST['status_type']);
$start_date = mysqli_real_escape_string($link, $_REQUEST['start_date']);
$end_date = mysqli_real_escape_string($link, $_REQUEST['end_date']);
$user_story =mysqli_real_escape_string($link, $_REQUEST['user_story']);

//$image = mysqli_real_escape_string($link, $_REQUEST['image']);



 
// attempt insert query execution
$sql ="insert into iteration(iteration_id,project_id,features,status_type, start_date,end_date,user_story)
		values('$iteration_id','$project_id','$features','$status_type','$start_date','$end_date','$user_story')";
if(mysqli_query($link, $sql)){
    echo "
			Records added successfully.
			<br >
			<form action='iteration.html' method='post'>
				<input type='submit' value='Click to add more iteration'>
			</form>
			<input type='button' value='Finish' onClick='self.close()'>
	";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>