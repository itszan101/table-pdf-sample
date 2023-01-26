<!doctype html>
<html lang="en">
  <head>
  	<title>Table 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Laporan pengunjung tamu Diskominfo-OKI</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">

					<?php 
					include 'koneksi.php';
					?>

						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						      	<th>No</th>
						      	<th>Nama</th>
						      	<th>Instansi</th>
						      	<th>Tujuan</th>
							  	<th>Keperluan</th>
						    </tr>
						  </thead>
						  <tbody>
							<?php 
							$no = 1;
							$sql = mysqli_query($koneksi,"select * from bukutamu.bukutamus");
							while($data = mysqli_fetch_array($sql)){
							?>
							
						    <tr class="alert" role="alert">
						    	<td><?php echo $no++; ?></td>
						      <td class="d-flex align-items-center">
							  <?php echo "<img src='img/$data[thumbnail]' width='150' height='120' />";?>
						      	<div class="pl-3 email">
									
						      		<span><?php echo $data['name']; ?></span>
						      		<span>Added: <?php echo $data['created_at']; ?></span>
						      	</div>
						      </td>
						      <td><?php echo $data['instansi']; ?></td>
							  <td><?php echo $data['tujuan']; ?></td>
							  <td><?php echo $data['perihal']; ?></td>
						    </tr>
							
							<?php
							}?>
						    
						  	</tbody>
 						 <a href="cetak.php" target="_blank">--> Cetak PDF</a>

						</table>
						
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>

