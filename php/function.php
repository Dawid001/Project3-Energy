<?php

function connect() {
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "energy";

	$connection = new mysqli($servername, $username, $password, $database);
	if ($connection->connect_error) {
		die("Connection Failed: " . $conn->connect_error);
	}

	return $connection;
}

function makeQuery($pdo, $query) {
	$result = mysqli_query($pdo, $query);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$array = [];

	while ($row = mysqli_fetch_row($result)) {
		array_push($array, $row );

	}
	return $result;

	mysqli_free_result($result);
}

