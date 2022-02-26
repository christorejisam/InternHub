<html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "db";
	
	$name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
 	
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	
	$statement = $mysqli->prepare("INSERT INTO company(name,email,password) VALUES('$name','$email','$password')"); 
	
	
	
	if($statement->execute()){
		print "Hello " . $name . "!, you are signed in!";
	}else{
		print $mysqli->error; 
	}
}
?>

</html>