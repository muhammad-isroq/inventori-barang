
<?php
$role = $this->session->userdata('role');
if ($role == 'admin') {
	$this->load->view('v_sidebar_admin');
} elseif ($role == 'petugas') {
	$this->load->view('v_sidebar_petugas');
}
?>

<!-- Content Wrapper -->
<div class="content-wrapper">
	<section class="content">
		<div class="container-fluid">
			<h3>ini halaman admin</h3>

			<div class="container text-center mt-4">
				<div class="row align-items-center">
					<div class="col-md m-3">
						<div class="card">
							<div class="card-body text-white ">
								<h5>
									<a href="<?= base_url('barang');?>" class="link-white link-offset-2 link-underline link-underline-opacity-0">Data Barang</a>
								</h5>
							</div>
						</div>
					</div>
					<div class="col-md m-3">
						<div class="card">
							<div class="card-body text-white ">
								<h5>
									<a href="<?= base_url('supplier');?>" class="link-white link-offset-2 link-underline link-underline-opacity-0">Data Supplier</a>
								</h5>
							</div>
						</div>
					</div>
					<div class="col-md m-3">
						<div class="card">
							<div class="card-body text-white ">
								<h5>
									<a href="<?= base_url('pembelian');?>" class="link-white link-offset-2 link-underline link-underline-opacity-0">Data Pembelian</a>
								</h5>
							</div>
						</div>
					</div>
					<div class="col-md m-3">
						<div class="card">
							<div class="card-body text-white ">
								<h5>
									<a href="<?= base_url('penjualan');?>" class="link-white link-offset-2 link-underline link-underline-opacity-0">Data Penjualan</a>
								</h5>
							</div>
						</div>
					</div>
					<div class="col-md m-3">
						<div class="card">
							<div class="card-body text-white ">
								<h5>
									<a href="<?= base_url('stok');?>" class="link-white link-offset-2 link-underline link-underline-opacity-0">Data Stok Barang</a>
								</h5>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section>
</div>





