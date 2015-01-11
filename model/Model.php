<?php

class userModel {

	public function getInfo() {
	require 'Credentials.php';

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {die("Connection failed: " . mysqli_connect_error());}

		// Select Data from the database
		// If statement checks to see if there are values inside Array
		// If there are values, it will empty it.
		// Else, it will store data from the db into the array

			$USER = array();
		

			$sql = "SELECT id FROM User";
			$result = mysqli_query($conn, $sql);
			
			    while($row = mysqli_fetch_array($result)) {
			        array_push($USER, $row[0]);
			    }

			$sql = "SELECT firstname FROM User";
			$result = mysqli_query($conn, $sql);
			
			    while($row = mysqli_fetch_array($result)) {
			        array_push($USER, $row[0]);
			    }

			$sql = "SELECT lastname FROM User";
			$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_array($result)) {
					array_push($USER, $row[0]);
				}

			$sql = "SELECT time FROM User";
			$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_array($result)) {
					array_push($USER, $row[0]);
				}

		mysqli_close($conn);
		return $USER;

	} 

}


#Notes
/*

Problem: everytime you insert data by MySQL injection, value in index gets pushed, this showing weird stuff on table

Possible solution: Try to find a way to empty the array after the data has been displayed

*/
?>
