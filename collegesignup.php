<html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = " ";
	$mysql_database = "facebook1";
	
	$name = $_POST["collegename"];
    $email = $_POST["collegeemail"];
    $password = $_POST["password"];
 	
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	
	$statement = $mysqli->prepare("INSERT INTO college(name,email,password) VALUES('$name','$email','".$password."')"); 
	
	
	
	if($statement->execute()){
		print "Hello " . $u_name . "!, you are signed in!";
	}else{
		print $mysqli->error; 
	}
}
?>
</br>
<a href="#">Click here to go back</a>
</html>