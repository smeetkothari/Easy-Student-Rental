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
mysqli_query($connect,"INSERT INTO webcustomers (firstname,lastname,email,password, reenterpassword)
		        VALUES ('$firstname','$lastname','$email','$password', '$reenterpassword')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Customer Added</p>";
	echo "<a href='success.html'>Go Back</a>";
} else {
	echo "Customer NOT Added<br />";
	echo mysqli_error ($connect);
}
	  

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>