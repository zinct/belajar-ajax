<?php  

require 'database.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$jurusan = htmlspecialchars($_POST['jurusan']);

$query = "INSERT INTO `tb_user` (`id`, `name`, `email`, `jurusan_id`) VALUES (NULL, '$name', '$email', '$jurusan')";

$result = mysqli_query($conn, $query);



