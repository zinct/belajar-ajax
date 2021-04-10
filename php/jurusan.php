<?php  

require 'database.php';


function get_jurusan()
{

	global $conn;

	$query = "SELECT * FROM tb_jurusan";

	$result = mysqli_query($conn, $query);

	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;

}

