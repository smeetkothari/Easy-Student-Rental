<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        

	<?php
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webDB";


	// Create connection
	$conn = new mysqli($host, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";

	//Execute the query
	
	
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$reenterpassword = $_POST['reenterpassword'];
	
	$sql= "INSERT INTO webcustomers (firstname,lastname,email,username, password, reenterpassword)
					VALUES ('$firstname','$lastname','$email','$username', '$password', '$reenterpassword')";
					
		if(mysqli_affected_rows($sql)>0){
		echo "Customer Added Succesfully!!";
		
	} else {
		echo "Customer NOT Added<br />";
		echo mysqli_error ($sql);
	}


	if ($conn->query($sql) === TRUE) {
		echo "New records created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


	header('Location: signIn.html');
	
	?>

    </body>
</html>
