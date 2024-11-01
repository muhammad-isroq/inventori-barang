<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Admin</title>
	<link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
	<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<body>
	<h3>ini halaman admin</h3>

	<div class="container text-center mt-4">
		<div class="row align-items-center">
			<div class="col-md m-3">
				<div class="card">
					<div class="card-body btn btn-success text-white ">
						<h5>
							<a href="<?= base_url('barang');?>" class="link-light link-offset-2 link-underline link-underline-opacity-0">Data Barang</a>
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md m-3">
				<div class="card">
					<div class="card-body btn btn-success text-white ">
						<h5>
							<a href="<?= base_url('supplier');?>" class="link-light link-offset-2 link-underline link-underline-opacity-0">Data Supplier</a>
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md m-3">
				<div class="card">
					<div class="card-body btn btn-success text-white ">
						<h5>
							<a href="<?= base_url('pembelian');?>" class="link-light link-offset-2 link-underline link-underline-opacity-0">Data Pembelian</a>
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md m-3">
				<div class="card">
					<div class="card-body btn btn-success text-white ">
						<h5>
							<a href="<?= base_url('penjualan');?>" class="link-light link-offset-2 link-underline link-underline-opacity-0">Data Penjualan</a>
						</h5>
					</div>
				</div>
			</div>			
		</div>
	</div>

	<script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
	<script>
		AOS.init();
	</script>
	<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>