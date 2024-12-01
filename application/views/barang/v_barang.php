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


			<h2 class="text-center ">Data Barang</h2>
			<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal1">
				<i class="fi fi-tr-square-plus"></i>
			</button>
			<a href="<?= base_url('barang/laporan');?>" class="btn btn-success"><i class="fi fi-tr-newspaper"></i></a>
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
									<input type="number" name="stok_tersedia" class="form-control" required>
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


			<div class=""> 
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
									<th scope="col" colspan="2" class="text-center">aksi</th>
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

											<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $r['id_barang'];?>"><i class="fi fi-tr-file-edit"></i></button>


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
																	<input type="number" name="stok_tersedia" value="<?= $r['stok_tersedia']; ?>" class="form-control">                        
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
										</td>     
										<td>
											<a href="<?=base_url().'Barang/hapus_barang/'.$r['id_barang']; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');"><i class="fi fi-tr-trash-xmark"></i></a>   
										</td>                
									</tr>
									<?php $no++;} ?>  
								</tbody>
							</table>
						</table>
					</div>
				</div>									
			</div>
		</section>
	</div>
