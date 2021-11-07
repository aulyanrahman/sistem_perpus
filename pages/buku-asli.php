<div id="label-page"><h3>Tampil Data Buku</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Buku</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
            <th>Status</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		
		<?php
		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);
		
		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['nama']; ?></td>
			<td><?php echo $r_tampil_buku['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_buku['alamat']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="cetak/cetak-data-buku.php?id=<?php echo $r_tampil_buku['idbuku]; ?>" 
					target="_blank" class="tombol">Cetak Kartu</a></div>

				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>