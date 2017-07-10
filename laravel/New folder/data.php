<?php
	//connect to db
 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


	//if insert key is pressed then do insertion


		$name  = $_POST['name'];
		$email = $_POST['email'];
     $sql = "INSERT INTO mytable (name, email)
VALUES ('$name', '$email')";
		$query = $conn->query($sql);
		if($query){
			echo "Record Inserted.";
		}else {
			echo "Something Wrong!";
		}
	
	//if show key is pressed then show records
	if($_POST['action'] == 'show'){
		$sql   = "select * from mytable order by id desc limit 10";
		$query = mysql_query($sql);

		echo "<table border='1'>";
		while($row = mysql_fetch_assoc($query)){
			echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[email]</td></tr>";
		}
		echo "</table>";
	}
?>