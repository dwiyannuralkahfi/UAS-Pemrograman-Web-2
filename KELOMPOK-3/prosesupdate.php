<?php 
	include 'koneksi.php';

	if (isset($_POST['updateData'])) {

		$id = $_POST['idBantuan'];
		$jenisalokasi = $_POST['jenisAlokasi'];
		$jumlahtransaksi = $_POST['jumlahTransaksi'];
		$jumlahdana = $_POST['jumlahDana'];
		$namalengkap = $_POST['namaLengkap'];
		$nomorhp = $_POST['nomorHape'];
		$email = $_POST['email'];

		$query = "UPDATE tbl_bantuancovid set jenis_alokasi = '$jenisalokasi', jumlah_transaksi = '$jumlahtransaksi',jumlah_dana = '$jumlahdana', nama_lengkap = '$namalengkap', nomor_hape = '$nomorhp', email= '$email' WHERE id = '$id' ";
		$result = mysqli_query($koneksi, $query);
		if ($result) {
			header("Location:tampilkandata.php");
		}else{
			echo "Gagal Update";
		}
	}

 ?>