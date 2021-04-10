<?php 
	include 'koneksilogin.php';

	$username = $_POST['username'];
	$pass = $_POST['password'];


	$query = "INSERT into tbl_login (username, password) values ('$username','$pass')";
	$result = mysqli_query($koneksi, $query);

	if ($result) {
		echo "Berhasil Registrasi";
		header("location:index.php");
		exit;
	}else{
		echo "Gagal Registrasi";
		exit;
	}

 ?>