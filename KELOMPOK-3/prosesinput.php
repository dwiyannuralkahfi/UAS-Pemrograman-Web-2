<?php 
	include 'koneksi.php';
	if (isset($_POST['inputData'])) {

		$jenisalokasi = $_POST['jenisAlokasi'];
		$jumlahtransaksi =$_POST['jumlahTransaksi'];
		$jumlahdana  = $_POST['jumlahDana'];
		$namalengkap = $_POST['namaLengkap'];
		$nomorhape = $_POST['nomorHape'];
		$email = $_POST['email'];

	$sql = "INSERT into tbl_bantuancovid (id,jenis_alokasi, jumlah_transaksi, jumlah_dana, nama_lengkap, nomor_hape, email) values ('','$jenisalokasi', '$jumlahtransaksi', '$jumlahdana', '$namalengkap', '$nomorhape', '$email')";

	$query = mysqli_query($koneksi, $sql) or die(mysqli_error());
		if ($query) {
			header("Location:tampilkandata.php");
		}
	}
?>

