<?php
	include "config.php";
	
	$uname = $_POST["fname"];
	$upass = $_POST["lname"];
	
	$uname = str_replace("'","******",$uname);
	$upass = str_replace("'","****",$upass);
	
	$sql = "SELECT ID, username, password FROM auth WHERE username='$uname' AND password='$upass'";
	
	//echo $sql;
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		//echo "Grant Access";
	
		$sql2 = "SELECT ID, sec1, sec2, sec3 FROM secret";
		$result = $conn->query($sql2);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			echo "id: " . $row["ID"]. " - Name: " . $row["sec1"]. " " . $row["sec2"]. "<br>". " " . $row["sec3"]. "<br>";
		  }
		} else {
		  echo "0 results";
		}
	
	}
	else echo "Wrong Username or Password";
	
	$conn->close();
	
	

?>