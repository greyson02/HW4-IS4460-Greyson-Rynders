<?php

//import credentials for db
require_once  'DBdirectory.php';

//connect to db
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete']))
{
	$password = $_POST['password'];

	$query = "DELETE FROM user WHERE password = '$password' ";
	
	//Run the query
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	//Return to the viewAllClassics page
	header("Location: user-details.php");
	
}

?>