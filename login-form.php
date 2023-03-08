<HTML>

	<head>

	<title>Login Page</title>

	</head>
	
	<H1>Login Portal</H1>

	<body>
	<form method='post' action='login-form.php'>
	Username:<br>
	<input type="text" name="username"><br>
	Password:<br>
	<input type="text" name="password"><br><br>
	<input type='submit' value='Login'>
	</form>
	</body>
	
</HTML>

<?php

//Example 12-2

require_once "DBdirectory.php";
require_once "user.php";
//require_once "user.php";

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if (isset($_POST['username']) && isset($_POST['password'])){
	
	//Get values from login screen
	$tmp_username = mysql_entities_fix_string($conn, $_POST['username']);
	$tmp_password = mysql_entities_fix_string($conn, $_POST['password']);
	
	//get password from DB w/ SQL
	$query = "SELECT password FROM user WHERE username = '$tmp_username'";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	$rows = $result->num_rows;
	$passwordFromDB="";
	for($j=0; $j<$rows; $j++)
	{
		$result->data_seek($j); 
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$passwordFromDB = $row['password'];
	
	}
	
	//Compare passwords
	if(password_verify($tmp_password,$passwordFromDB))
	{
		echo "successful login<br>";

		session_start();
		$user = new User($tmp_username);
		$_SESSION['user'] = $user;
		header("Location: homepage.php");
	}
	else
	{
		echo "login error<br>";
	}	
	
}

$conn->close();


//sanitization functions
function mysql_entities_fix_string($conn, $string){
	return htmlentities(mysql_fix_string($conn, $string));	
}

function mysql_fix_string($conn, $string){
	$string = stripslashes($string);
	return $conn->real_escape_string($string);
}



?>