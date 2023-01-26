<!DOCTYPE html>
<html>
<head>
	<title>laporan Data Tamu - bukutamu.kaboki.go.id</title>
</head>
<body>
 
	<center>
 
		<h2>LAPORAN DATA PENGUNJUNG TAMU DISKOMINFO-KABOKI</h2>
		
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
        <th>No</th>
				<th>Tanggal</th>
				<th>Nama</th>
				<th>instansi</th>
                <th>Tujuan</th>
                <th>Keperluan</th>
                <th>Photo</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from bukutamu.bukutamus");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
            <td><?php echo $no++; ?></td>
		    <td><?php echo $data['created_at']; ?></td>
		    <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['instansi']; ?></td>
            <td><?php echo $data['tujuan']; ?></td>
			<td><?php echo $data['perihal']; ?></td>
            <td align="center"><?php echo "<img src='img/$data[thumbnail]' width='150' height='120' />";?></td>
			
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>