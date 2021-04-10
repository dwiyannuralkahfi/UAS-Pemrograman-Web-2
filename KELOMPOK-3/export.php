<?php 
include 'koneksi.php'; 
require_once __DIR__ .'./mpdf_v8.0.3-master/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
ob_start(); 
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
</div>
	<div class="container" style="margin-top: 20px; text-align: center;">
	<blockquote>Rekapitulasi Penerimaan Bantuan Sosial Covid-19</blockquote>
	<blockquote>Sampai Dengan <?php 
        echo date('d-F-Y')." ";?></blockquote>	
	<table border= "1" align="center">
		<thead>
			<tr>
				<th>No</th>
				<th>Alokasi</th>
				<th>Jumlah Transaksi</th>
				<th>Jumlah Dana</th>
			</tr>
		</thead>		
		<?php 
		$sql = "SELECT * from tbl_bantuancovid";
		$query = mysqli_query($koneksi, $sql) or die(mysqli_error());
		while ($data = mysqli_fetch_array($query)) {
		 ?>
		 <tbody>
		 	<tr>
		 		<td><?= $data['id']; ?></td>
		 		<td><?= $data['jenis_alokasi'];?></td>
		 		<td><?= $data['jumlah_transaksi'];?></td>
		 		<td><?= $data['jumlah_dana'];?></td>
		 	</tr>
		 <?php } ?>
		 </tbody>
	</table>	
</div>
</body>
</html>
<?php
	$html = ob_get_contents(); 
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output("laporan_bantuancovid19.pdf" ,'I');
?>