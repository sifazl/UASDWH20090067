<?php
include "konek.php";
if(isset($_POST['simpan'])) {
	$tahun = $_POST['tahun'];
	$jumlah = $_POST['jumlah'];
	$sql = mysqli_query($con, "INSERT INTO prediksi VALUES (null, '$tahun', '$jumlah')") or die (mysqli_error($con));
	if($sql) {
		echo "<script>alert('Berhasil menambahkan data'); window.location='./';</script>";
	}
}
?>