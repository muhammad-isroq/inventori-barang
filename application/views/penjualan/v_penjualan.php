<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Penjualan</title>
	<link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
	<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<body>
	<section class="content m-2">
		<div class="container mt-4">
			<div class="row">
				<div class="card">
					<div class="card-header bg-primary">
						<h2 class="text-center text-light">Data Penjualan</h2>
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
										<form method="POST" action="<?=base_url('Penjualan/insert_penjualan'); ?>" enctype="multipart/form-data">
											<div class="form-group">
												<label for="">Tanggal Penjualan</label>
												<input type="date" name="tanggal_penjualan" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Kode penjualan</label>
												<input type="text" name="kode_penjualan" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Nama Barang Dijual</label>
												<input type="text" name="nama_barang_dijual" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Jumlah Barang Dijual</label>
												<input type="number" name="jumlah_barang_dijual" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Harga Total Penjualan</label>
												<input type="text" name="harga_total_penjualan" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">nama_pelanggan</label>
												<input type="text" name="nama_pelanggan" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Status Pengiriman</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="status_pengiriman"  value="terkirim" checked>
												<label class="form-check-label" for="exampleRadios1">
													Terkirim
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="status_pengiriman"  value="diperjalanan">
												<label class="form-check-label" for="exampleRadios2">
													Diperjalanan
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="status_pengiriman"  value="belum">
												<label class="form-check-label" for="exampleRadios2">
													Belum
												</label>
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
											<th scope="col">Tanggal Penjualan</th>
											<th scope="col">Kode Penjualan</th>            
											<th scope="col">Nama Barang Dijual</th>
											<th scope="col">Jumlah Barang Dijual</th>
											<th scope="col">Harga Total Penjualan</th>
											<th scope="col">Nama Pelanggan</th>
											<th scope="col">Status Pengiriman</th>
											<th scope="col" colspan="2" class="text-center">aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; foreach($penjualan as $r){?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $r['tanggal_penjualan'];?></td>
											<td><?= $r['kode_penjualan'];?></td>
											<td><?= $r['nama_barang_dijual'];?></td>
											<td><?= $r['jumlah_barang_dijual'];?></td>
											<td><?= $r['harga_total_penjualan'];?></td>
											<td><?= $r['nama_pelanggan'];?></td>     
											<td><?= $r['status_pengiriman'];?></td>       
											<td>

												<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_penjualan'];?>">Ubah</button>


												<div class="modal fade" id="exampleModal2<?php echo $r['id_penjualan'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog modal-fullscreen-md-down">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<form method="POST" action="<?=base_url('Penjualan/update_penjualan'); ?>"enctype="multipart/form-data">
																	<input type="hidden" name="id_penjualan" value="<?= $r['id_penjualan']; ?>">          
																	<div class="form-group">
																		<label for="">Tanggal Penjualan</label>
																		<input type="date" name="tanggal_penjualan" value="<?= $r['tanggal_penjualan']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">Kode Penjualan</label>
																		<input type="text" name="kode_penjualan" value="<?= $r['kode_penjualan']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">Nama Barang Dijual</label>
																		<input type="text" name="nama_barang_dijual" value="<?= $r['nama_barang_dijual']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">Jumlah Barang Dijual</label>
																		<input type="number" name="jumlah_barang_dijual" value="<?= $r['jumlah_barang_dijual']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label for="">Harga Total Penjualan</label>
																		<input type="text" name="harga_total_penjualan" value="<?= $r['harga_total_penjualan']; ?>" class="form-control">                        
																	</div>
																	<div class="form-group">
																		<label for="">Nama Pelanggan</label>
																		<input type="text" name="nama_pelanggan" value="<?= $r['nama_pelanggan']; ?>" class="form-control">
																	</div>
																	<div class="form-group">
																		<label>Status Pengiriman</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="status_pengiriman"  value="terkirim" checked>
																		<label class="form-check-label" for="exampleRadios1">
																			Terkirim
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="status_pengiriman"  value="diperjalanan">
																		<label class="form-check-label" for="exampleRadios2">
																			Diperjalanan
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="status_pengiriman"  value="belum">
																		<label class="form-check-label" for="exampleRadios2">
																			Belum
																		</label>
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
											</td>     
											<td>
												<a href="<?=base_url().'Penjualan/hapus_penjualan/'.$r['id_penjualan']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');">hapus</a>   
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