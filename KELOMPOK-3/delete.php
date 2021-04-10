<?php 
	include 'koneksi.php';

	$id = $_GET['id'];

	$sql = "DELETE from tbl_bantuancovid where id ='$id' ";
	if ($result = mysqli_query($koneksi, $sql)) {
			header("Location:tampilkandata.php");	
		}else{
			echo "<script>alert('Gagal Delete');
			</script>";
		}



 ?>