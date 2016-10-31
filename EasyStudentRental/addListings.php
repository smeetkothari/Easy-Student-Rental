

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$roomtype = $_POST['roomtype'];
	$bed = $_POST['bed'];
	$bath = $_POST['bath'];
	$address = $_POST['address'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$rent = $_POST['rent'];
	$heat = $_POST['heat'];
	$pets = $_POST['pets'];
	$gym = $_POST['gym'];
	$parking = $_POST['parking'];
	$description = $_POST['description'];
	
	$sql= "INSERT INTO listings (roomtype,bed, bath, address, address2, city, state, zipcode, rent, heat, pets, gym, parking, description)
					VALUES ('$roomtype','$bed','$bath', '$address', '$address2', '$city','$state','$zipcode', '$rent', '$heat', '$pets','$gym','$parking', '$description')";
					
		if(mysqli_affected_rows($sql)>0){
		echo "Listings Added Succesfully!!";
		
	} else {
		echo "Listings NOT Added<br />";
		echo mysqli_error ($sql);
	}


	if ($conn->query($sql) === TRUE) {
		echo "New records created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: success.html');


?>