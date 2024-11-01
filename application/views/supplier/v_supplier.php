<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>data supplier</title>
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
						<h2 class="text-center text-light">Data Supplier</h2>
						<button type="button" class="btn btn-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal1">
							tambah
						</button>

						<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog modal-fullscreen-xxl-down">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form method="POST" action="<?=base_url('Supplier/insert_supplier'); ?>" enctype="multipart/form-data">
											<div class="form-group">
												<label for="">Nama Supplier</label>
												<input type="text" name="nama_supplier" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">kontak Supplier</label>
												<input type="number" name="kontak_supplier" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">alamat Supplier</label>
												<input type="text" name="alamat_supplier" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">produk Supplier</label>
												<input type="text" name="produk" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Transaksi Terakhir</label>
												<input type="date" name="transaksi_terakhir" class="form-control" required>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
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
											<td>

												<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_supplier'];?>"><i class="fi fi-rr-edit p-2"></i>Ubah</button>


												<div class="modal fade" id="exampleModal2<?php echo $r['id_supplier'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog modal-fullscreen-md-down">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<form method="POST" action="<?=base_url('Supplier/update_supplier'); ?>"enctype="multipart/form-data">
																	<input type="hidden" name="id_supplier" value="<?= $r['id_supplier']; ?>">          
																	<div class="form-group">
																		<label for="">Nama supplier</label>
																		<input type="text" name="nama_supplier" value="<?= $r['nama_supplier']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">kontak Supplier</label>
																		<input type="number" name="kontak_supplier" value="<?= $r['kontak_supplier']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">alamat Supplier</label>
																		<input type="text" name="alamat_supplier" value="<?= $r['alamat_supplier']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">produk Supplier</label>
																		<input type="text" name="produk" value="<?= $r['produk']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">Transaksi Terakhir</label>
																		<input type="date" name="transaksi_terakhir" value="<?= $r['transaksi_terakhir']; ?>" class="form-control">                        
																	</div>									
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																		<button type="submit" class="btn btn-primary">Save changes</button>
																	</div>                               
																</form>
															</div>
														</div>
													</div>
												</div>
												<a href="<?=base_url().'Supplier/hapus_supplier/'.$r['id_supplier']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');"><i class="fi fi-rr-trash p-2"></i>hapus</a>                  
											</td>                     
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
	</section>


	<script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
    <script>
        AOS.init();
    </script>
	<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>