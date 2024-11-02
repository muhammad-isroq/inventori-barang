<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Data Supplier</title>
	<link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
	<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<body>
	<section class="content m-2">
		<div class="container-fluid">
			<div class="row">
				<div class="card">
					<div class="card-header bg-primary">
						<h2 class="text-center text-light">Laporan Data Supplier</h2>
					</div>
						<div class="card-body"> 
							<div class="table-responsive">
								<table class="table">
									<table class="table table-striped ">
										<thead>
											<tr class="">
												<th scope="col">NO</th>
												<th scope="col">Nama Supplier</th>
												<th scope="col">kontak Supplier</th>            
												<th scope="col">alamat Supplier</th>
												<th scope="col">produk Supplier</th>
												<th scope="col">Transaksi Terakhir</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; foreach($supplier as $r){?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $r['nama_supplier'];?></td>
												<td><?= $r['kontak_supplier'];?></td>
												<td><?= $r['alamat_supplier'];?></td>
												<td><?= $r['produk'];?></td>
												<td><?= $r['transaksi_terakhir'];?></td>
											</tr>
											<?php $no++;} ?>  
										</tbody>
									</table>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
</section>


<script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
<script>
	AOS.init();
</script>
<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>