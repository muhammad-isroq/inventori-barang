<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pembelian</title>
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
						<h2 class="text-center text-light">Data Pembelian</h2>
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
										<form method="POST" action="<?=base_url('Pembelian/insert_pembelian'); ?>" enctype="multipart/form-data">
											<div class="form-group">
												<label for="">Nama Barang</label>
												<select name="barang" id="" class="form-control" required>
													<option value="">- Pilih Barang -</option>
													<?php foreach($barang as $r){ ?>
														<option value="<?= $r['id_barang'];?>">
															<?= $r['nama_barang'];?>
														</option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label for="">Nama Supplier</label>
												<select name="supplier" id="" class="form-control" required>
													<option value="">- Pilih Supplier -</option>
													<?php foreach($supplier as $r){ ?>
														<option value="<?= $r['id_supplier'];?>">
															<?= $r['nama_supplier'];?>
														</option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label for="">Tanggal Pembelian</label>
												<input type="date" name="tgl_pembelian" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Kode Pembelian</label>
												<input type="text" name="kode_pembelian" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Jumlah Barang</label>
												<input type="text" name="jumlah_barang" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Harga Total</label>
												<input type="text" name="harga_total" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">Status Pembayaran</label>
												<select class="form-select" aria-label="Default select example" name="status_pembayaran" required>
													<option selected>Pilih Status Pembayaran</option>
													<option value="dibayar" >dibayar</option>
													<option value="ditunda" >ditunda</option>					
												</select>
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
											<th scope="col">Nama Supplier</th>
											<th scope="col">Tanggal Pembelian</th>
											<th scope="col">Kode Pembelian</th>            
											<th scope="col">Jumlah Barang</th>
											<th scope="col">Harga Total</th>									
											<th scope="col">Status Pembayaran</th>								
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; foreach($pembelian as $r){?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $r['nama_barang'];?></td>
												<td><?= $r['nama_supplier'];?></td>
												<td><?= $r['tgl_pembelian'];?></td>
												<td><?= $r['kode_pembelian'];?></td>
												<td><?= $r['jumlah_barang'];?></td>
												<td><?= $r['harga_total'];?></td>
												<td><?= $r['status_pembayaran'];?></td>
												<td>

													<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_pembelian'];?>"><i class="fi fi-rr-edit p-2"></i>Ubah</button>


													<div class="modal fade" id="exampleModal2<?php echo $r['id_pembelian'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog modal-fullscreen-md-down">
															<div class="modal-content">
																<div class="modal-header">
																	<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<form method="POST" action="<?=base_url('Pembelian/update_pembelian'); ?>"enctype="multipart/form-data">
																		<input type="hidden" name="id_pembelian" value="<?= $r['id_pembelian']; ?>"> 

																		<div class="form-group">
																			<label for="nama_barang">Nama Barang</label>
																			<select name="barang" id="" class="form-control">
																				<option>- Pilih Barang -</option>
																				<?php foreach($barang as $r){ ?>
																					if($r['id_barang'] == $edit['id_barang']){
																						$aktif = "selected";
																					}else{
																						$aktif = "";
																					}
																					<option value="<?= $r['id_barang'];?>"<?= $aktif;?>><?= $r['nama_barang'];?></option>
																				<?php } ?>
																			</select>
																		</div> 
																		<div class="form-group">
																			<label for="nama_barang">Nama Supplier</label>
																			<select name="supplier" id="" class="form-control">
																				<option>- Pilih Supplier -</option>
																				<?php foreach($supplier as $r){ ?>
																					if($r['id_supplier'] == $edit['id_supplier']){
																						$aktif = "selected";
																					}else{
																						$aktif = "";
																					}
																					<option value="<?= $r['id_supplier'];?>"<?= $aktif;?>><?= $r['nama_supplier'];?></option>
																				<?php } ?>
																			</select>
																		</div>       
																		<div class="form-group">
																			<label for="">Tanggal pembelian</label>
																			<input type="date" name="tgl_pembelian" value="<?= $r['tgl_pembelian']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Kode Pembelian</label>
																			<input type="text" name="kode_pembelian" value="<?= $r['kode_pembelian']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Jumlah Barang</label>
																			<input type="text" name="jumlah_barang" value="<?= $r['jumlah_barang']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Harga Total</label>
																			<input type="text" name="harga_total" value="<?= $r['harga_total']; ?>" class="form-control">
																		</div>
																		<div class="form-group">
																			<label for="">Status Pembayaran</label>
																			<select class="form-select" aria-label="Default select example" name="status_pembayaran">
																				<option value="aktif <?= ($r['status_pembayaran'] == 'dibayar') ? 'selected' : ''; ?>">dibayar</option>
																				<option value="aktif <?= ($r['status_pembayaran'] == 'ditunda') ? 'selected' : ''; ?>">ditunda</option>
																			</select>
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
													<a href="<?=base_url().'Pembelian/hapus_pembelian/'.$r['id_pembelian']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');"><i class="fi fi-rr-trash p-2"></i>hapus</a>                  
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