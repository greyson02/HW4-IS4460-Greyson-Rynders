<HTML>

	<head>

		<title>User Details</title>
		
	</head>
		
	<?php
	
		$page_roles = array('admin');
	
		include 'navbar.php';
		require_once 'checksession.php';
	?>

	<H1>User Details</H1>

</HTML>

<?php

require_once  'DBdirectory.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM user";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 

echo <<<_END
	<pre>
	Username: $row[username]
	Password: $row[password]
	Firstname: $row[forename]
	Lastname: $row[surname]
	ID: $row[id]
	<a href='update-user.php?id=$row[id]'>Edit User</a>
	</pre>
	
	<form action='remove-user.php' method='post'>
		<input type='hidden' name='delete' value='yes'>
		<input type='hidden' name='password' value='$row[password]'>
		<input type='submit' value='Delete User'>	
	</form>
	
_END;

}

$conn->close();



?>