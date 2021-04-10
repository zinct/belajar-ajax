<?php  

require 'database.php';

$query = "SELECT * FROM tb_user JOIN tb_jurusan ON tb_user.jurusan_id = tb_jurusan.jurusan_id";

$result = mysqli_query($conn, $query);

$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr class="user">
			<th scope="row">1</th>
			<td id="name">'.$row["name"].'</td>
			<td id="email">'.$row["email"].'</td>
			<td id="jurusan">'.$row["jurusan_name"].'</td>
			<td>
				<a href="#" class="badge badge-dark">Update</a>
				<a href="#" class="badge badge-danger">Delete</a>
			</td>
		</tr>';
}


