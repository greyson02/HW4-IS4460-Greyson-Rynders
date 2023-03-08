<html>

<?php

$page_roles = array('admin');

require_once  'DBdirectory.php';
require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['id'])){

$id = $_GET['id'];

$query = "SELECT * FROM user WHERE id=$id";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
	
echo <<<_END
	<pre>
	<form action='update-user.php' method='post'>
	Username: <input type='text' name='username' value='$row[username]'>
	Password: <input type='text' name='password' value='$row[password]'>	
	Firstname: <input type='text' name='forename' value='$row[forename]'>	
	Lastname: <input type='text' name='surname' value='$row[surname]'>
	ID: $row[id]			
	</pre>
	
	
		<input type='hidden' name='update' value='yes'>
		<input type='hidden' name='id' value='$row[id]'>
		<input type='submit' value='UPDATE RECORD'>	
	</form>
	
_END;

}

}

if(isset($_POST['update'])){
	
	$id = $_POST['id'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	
	$query = "UPDATE user set username='$username', password='$password', forename='$forename', surname='$surname' WHERE id=$id";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: user-details.php");
	
}

$conn->close();

?>

</html>