<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Barang</title>
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
						<h2 class="text-center text-light">Data Barang</h2>
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
										<form method="POST" action="<?=base_url('Barang/insert_barang'); ?>" enctype="multipart/form-data">
											<div class="form-group">
												<label for="">Nama Barang</label>
												<input type="text" name="nama_barang" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Kode Barang</label>
												<input type="text" name="kode_barang" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Deskripsi Barang</label>
												<input type="text" name="deskripsi_barang" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Kategori Barang</label>
												<input type="text" name="kategori_barang" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Stok Tersedia</label>
												<input type="text" name="stok_tersedia" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Satuan</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="satuan"  value="pcs" checked>
												<label class="form-check-label" for="exampleRadios1">
													Pcs
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="satuan"  value="kg">
												<label class="form-check-label" for="exampleRadios2">
													Kg
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="satuan"  value="liter">
												<label class="form-check-label" for="exampleRadios2">
													Liter
												</label>
											</div>
											<div class="form-group">
												<label for="">harga</label>
												<input type="text" name="harga" class="form-control" required>
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
												<td>

													<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_barang'];?>"><i class="fi fi-rr-edit p-2"></i>Ubah</button>


													<div class="modal fade" id="exampleModal2<?php echo $r['id_barang'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog modal-fullscreen-md-down">
															<div class="modal-content">
																<div class="modal-header">
																	<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<form method="POST" action="<?=base_url('Barang/update_barang'); ?>"enctype="multipart/form-data">
																		<input type="hidden" name="id_barang" value="<?= $r['id_barang']; ?>">          
																		<div class="form-group">
																			<label for="">Nama barang</label>
																			<input type="text" name="nama_barang" value="<?= $r['nama_barang']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Kode Barang</label>
																			<input type="text" name="kode_barang" value="<?= $r['kode_barang']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Deskripsi Barang</label>
																			<input type="text" name="deskripsi_barang" value="<?= $r['deskripsi_barang']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Kategori Barang</label>
																			<input type="text" name="kategori_barang" value="<?= $r['kategori_barang']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Stok Tersedia</label>
																			<input type="text" name="stok_tersedia" value="<?= $r['stok_tersedia']; ?>" class="form-control">                        
																		</div>
																		<div class="form-group">
																			<label>Satuan</label>
																		</div>
																		<div class="form-check">
																			<input class="form-check-input" type="radio" name="satuan"  value="pcs" checked>
																			<label class="form-check-label" for="exampleRadios1">
																				Pcs
																			</label>
																		</div>
																		<div class="form-check">
																			<input class="form-check-input" type="radio" name="satuan"  value="kg">
																			<label class="form-check-label" for="exampleRadios2">
																				Kg
																			</label>
																		</div>
																		<div class="form-check">
																			<input class="form-check-input" type="radio" name="satuan"  value="liter">
																			<label class="form-check-label" for="exampleRadios2">
																				Liter
																			</label>
																		</div>
																		<div class="form-group">
																			<label for="">Harga</label>
																			<input type="text" name="harga" value="<?= $r['harga']; ?>" class="form-control">                        
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
													<a href="<?=base_url().'Barang/hapus_barang/'.$r['id_barang']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');"><i class="fi fi-rr-trash p-2"></i>hapus</a>                  
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

		<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
	</body>
	</html>