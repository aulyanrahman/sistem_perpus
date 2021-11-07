<?php
include'../koneksi.php';

$id_buku=$_POST['id_buku'];
$judulbuku=$_POST['judulbuku'];
$kategori=$_POST['kategori'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$status=$_POST['status'];
	
if(isset($_POST['simpan'])){
	
	$sql = 
	"INSERT INTO tbbuku
		VALUES('$id_buku','$judulbuku','$kategori','$pengarang','$penerbit','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=buku");
}
?>