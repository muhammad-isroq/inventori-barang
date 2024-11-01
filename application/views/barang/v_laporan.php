<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Data Barang</title>
	<link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
	<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<body>
	<section class="content m-2">
		<div class="container mt-4">
			<h2 class="text-center ">Laporan Data Barang</h2>
			
			<div class="table-responsive">
				<table class="table">
					<table class="table table-striped ">
						<thead>
							<tr class="">
								<th scope="col">NO</th>
								<th scope="col">Nama Barang</th>
								<th scope="col">Kode Barang</th>            
								<th scope="col">Deskripsi Barang</th>
								<th scope="col">Kategori Barang</th>
								<th scope="col">Stok Tersedia</th>
								<th scope="col">Satuan</th>
								<th scope="col">Harga</th>									
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach($barang as $r){?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $r['nama_barang'];?></td>
								<td><?= $r['kode_barang'];?></td>
								<td><?= $r['deskripsi_barang'];?></td>
								<td><?= $r['kategori_barang'];?></td>
								<td><?= $r['stok_tersedia'];?></td>
								<td><?= $r['satuan'];?></td>
								<td><?= $r['harga'];?></td>            

							</tr>
							<?php $no++;} ?>  
						</tbody>
					</table>
				</table>
			</div>
		</div>
	</section>

	<script type="text/javascript">

		window.print();
	</script>

	<script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
	<script>
		AOS.init();
	</script>
	<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>