<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = new mysqli($servername, $username, $password, $dbname) or die("unable to connect");
    if(!$conn) {
        echo 'Not connected to server!';
    }
    if(!mysqli_select_db($conn,'college')) {
        echo 'Database not selected!';
    }
	  $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO details (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')";
    if ($conn->query($sql) === TRUE) {
		echo "Thank you for signing up";
	  } else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	  $conn->close();
?>