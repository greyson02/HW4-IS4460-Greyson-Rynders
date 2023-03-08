<HTML>

	<head>
	
		<title>User List</title>

	</head>
	
	
	
	<?php
	
		$page_roles = array('admin', 'customer');
	
		include 'navbar.php';
	?>

	<H1>User List</H1>

</HTML>

<?php

	require_once  'DBdirectory.php';
	require_once 'checksession.php';
	
	$page_roles = array('admin', 'customer');

	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);

	$query = "Select * from user"; //this is the query 
	$result = $conn->query($query); //this will run the query
	if(!$result) die($conn->error);

	$rows = $result->num_rows;

	for($j=0; $j<$rows; $j++){

	$row = $result->fetch_array(MYSQLI_ASSOC);

	echo <<<_END

		<pre>
		$row[forename] $row[surname]
		</pre>

_END;

}

	$result->close();
	$conn->close();

?>

<HTML>

	<p><a href='user-add.php'>Want to add a user?</a></p>

</HTML>