<?php
	$Name = $_POST['Name'];
	$Email id= $_POST['Email id'];
	$Gender = $_POST['Gender'];
	$Age= $_POST['Age'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Email id, Gender, Age ) values(?, ?, ?, ? )");
		$stmt->bind_param("sssi", $Name, $Email id, $Gender, $Age);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>