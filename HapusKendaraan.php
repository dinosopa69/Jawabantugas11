<?php 
function hapus($ab)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE  FROM kendaraan WHERE id=$ab");
	return mysqli_affected_rows($koneksi); 

}





$ab=$_GET['id'];
$koneksi= new mysqli("localhost", "root", "", "kendaraan");/* baris ini untuk menghubungkan kedatabase */




if (hapus($ab) > 0) {
	echo "<script> alert(' data BERHASIL dihapus');
	document.location.href = 'daftar kendaraan dan cari.php';
	</script>";

}

else{
	echo "<script> alert(' data GAGAL dihapus');
	document.location.href = 'daftar kendaraan dan cari.php';
	</script>";
	
}
?>

<?php 
/*
halaman ini dibuat oleh Muhammad Rizky,
tanggal 01 Juni sampai 02 Juni 2021.!!!!

 */

 ?>
