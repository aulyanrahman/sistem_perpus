<div id="label-page"><h3>Tampil Data Buku</h3></div>
<div id="content">
	
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Buku</a>
	<a href=><img src="print.png" height="50px" height="50px"></a>
	<FORM CLASS="form-inline" METHOD="POST">
	<div align="right"><form method=post><input type="text" name="pencarian"><input type="submit" name="search" value="search" class="tombol"></form>
	</FORM>
	</p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$batas = 5;
		$hal = $_GET['hal'];
		if(empty($hal)){
			$posisi = 0;
			$hal = 1;
		}
		else {
			$posisi = ($hal - 1) * $batas;
		}	
		$nomor = 1;
		if(isset($_SERVER['REQUEST_METHOD'] == "POST")){
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
			if($pencarian != ""){
				$sql = "SELECT * FROM tbbuku WHERE nama LIKE '%$pencarian%'";
				$query = $sql;
				$queryJml = $sql;
			}
			else {
				$query = "SELECT * FROM tbbuku LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM tbbuku";
				$no = $posisi * 1;
			}			
		}
		else {
			$query = "SELECT * FROM tbbuku LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbbuku";
			$no = $posisi * 1;
		}
		
		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['nama']; ?></td>
			<td><?php echo $r_tampil_buku['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_buku['alamat']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Cetak Kartu</a></div>
				<div class="tombol-opsi-container"><a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="tombol">Hapus</a></div>
			</td>			
		</tr>		
		<?php $nomor++; } ?>
		
		<tr>
			<td colspan=6 align="right">
			page 1 next
			</td>
		</tr>
		
	</table>
</div>