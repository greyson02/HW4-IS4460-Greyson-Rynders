<HTML>

	<head>

		<title>User Add</title>
		
	</head>

	<?php
	
		$page_roles = array('admin');
	
		include 'navbar.php';
		require_once 'checksession.php';
	?>

	<H1>Add a user</H1>
	
	<body>
		
	<!-- Create data -->
		<form method = 'post' action = 'user-add.php'>
			<pre>
				Username: <input type = 'text' name = 'username'>
				Password: <input type = 'text' name = 'password'>
				First Name: <input type = 'text' name = 'forename'>
				Last Name: <input type = 'text' name = 'surname'>
				<input type='submit' value = 'Add User'>
			</pre>
		</form>
	</body>

</HTML>

<?php

	//directory
	require_once 'DBdirectory.php';
	
	//DB connection and failsafe
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);
	
	//check to make sure all fields are entered
	if(isset($_POST['username'], $_POST['password'], $_POST['forename'], $_POST['surname']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$forename = $_POST['forename'];
		$surname = $_POST['surname'];
		
	$token = password_hash($password, PASSWORD_DEFAULT);
	
	//INSERT query	
	$query = "INSERT into user (username, password, forename, surname) VALUES ('$username', '$token', '$forename', '$surname')";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	//return to user list once a user is created
	header("Location: user-list.php");

}

?>