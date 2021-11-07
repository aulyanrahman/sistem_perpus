<?php
	include "../koneksi.php";
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);
?>
<div id="label-page"><h3>Data Buku</h3></div>
<div id="content">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_buku['idbuku']; ?></td>
		</tr>
        <tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_buku['judulbuku']; ?></td>
		</tr>
        <tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir"><?php echo $r_tampil_buku['kategori']; ?></td>
		</tr>
        <tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><?php echo $r_tampil_buku['pengarang']; ?></td>
		</tr>
        <tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><?php echo $r_tampil_buku['penerbit']; ?></td>
		</tr>
        <tr>
			<td class="label-formulir">Status</td>
			<td class="isian-formulir"><?php echo $r_tampil_buku['status']; ?></td>
		</tr>
	</table>
</div>
<script>
		window.print();
	</script>