<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pembelian</title>
	<link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
	<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
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

						<!-- Modal Tambah Data -->
						<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form method="POST" action="<?=base_url('Pembelian/simpan'); ?>" enctype="multipart/form-data">
											<!-- Form Tambah -->

            <!-- Nama Barang -->
            <div class="mb-3">
              <label for="id_barang" class="form-label">Nama Barang</label>
              <select name="id_barang" id="id_barang" class="form-control" required>
                <option value="" disabled selected>Pilih Barang</option>
                <?php foreach ($barang as $b): ?>
                  <option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
                <?php endforeach; ?>
              </select>
            </div>
											 <!-- Nama Supplier -->
            <div class="mb-3">
              <label for="id_supplier" class="form-label">Nama Supplier</label>
              <select name="id_supplier" id="id_supplier" class="form-control" required>
                <option value="" disabled selected>Pilih Supplier</option>
                <?php foreach ($supplier as $s): ?>
                  <option value="<?= $s->id_supplier ?>"><?= $s->nama_supplier ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Tanggal Pembelian -->
            <div class="mb-3">
              <label for="tgl_pembelian" class="form-label">Tanggal Pembelian</label>
              <input type="date" name="tgl_pembelian" id="tgl_pembelian" class="form-control" required>
            </div>

            <!-- Kode Pembelian -->
            <div class="mb-3">
              <label for="kode_pembelian" class="form-label">Kode Pembelian</label>
              <input type="text" name="kode_pembelian" id="kode_pembelian" class="form-control" required>
            </div>

            <!-- Jumlah Barang -->
            <div class="mb-3">
              <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
              <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control" required>
            </div>

            <!-- Harga Total -->
            <div class="mb-3">
              <label for="harga_total" class="form-label">Harga Total</label>
              <input type="number" name="harga_total" id="harga_total" class="form-control" required>
            </div>

            <!-- Status Pembayaran -->
            <div class="mb-3">
              <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
              <select name="status_pembayaran" id="status_pembayaran" class="form-control" required>
                <option value="dibayar">dibayar</option>
                <option value="tertunda">tertunda</option>
              </select>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card-body"> 
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">NO</th>
										<th scope="col">Nama Barang</th>
										<th scope="col">Nama Supplier</th>
										<th scope="col">Tanggal Pembelian</th>
										<th scope="col">Kode Pembelian</th>
										<th scope="col">Jumlah Barang</th>
										<th scope="col">Harga Total</th>
										<th scope="col">Status Pembayaran</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach($pembelian as $r){?>
										<tr>
											<td><?= $no; ?></td>											
											<td><?= $r->nama_barang ?></td>
											<td><?= $r->nama_supplier ?></td>
											<td><?= $r->tgl_pembelian ?></td>
											<td><?= $r->kode_pembelian ?></td>
											<td><?= $r->jumlah_barang ?></td>
											<td><?= $r->harga_total ?></td>
											<td><?= $r->status_pembayaran ?></td>
											<td>
												<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2<?= $r->id_pembelian ?>">Ubah</button>

												<!-- Modal Edit Data -->
												<div class="modal fade" id="exampleModal2<?= $r->id_pembelian ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog modal-fullscreen-md-down">
														<div class="modal-content">
															<div class="modal-header">
																<h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data</h1>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<form method="POST" action="<?=base_url('Pembelian/update'); ?>"enctype="multipart/form-data">
																	<input type="hidden" name="id_pembelian" value="<?= $r->id_pembelian ?>">          
																	<!-- Form Edit -->
																	 <!-- Nama Barang -->
            <div class="mb-3">
              <label for="id_barang" class="form-label">Nama Barang</label>
              <select name="id_barang" id="id_barang" class="form-control" required>
                <option value="" disabled selected><?= $r->nama_barang?></option>
                <?php foreach ($barang as $b): ?>
                  <option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
                <?php endforeach; ?>
              </select>
            </div>
											 <!-- Nama Supplier -->
            <div class="mb-3">
              <label for="id_supplier" class="form-label">Nama Supplier</label>
              <select name="id_supplier" id="id_supplier" class="form-control" required>
                <option value="" disabled selected><?= $r->nama_supplier?></option>
                <?php foreach ($supplier as $s): ?>
                  <option value="<?= $s->id_supplier ?>"><?= $s->nama_supplier ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Tanggal Pembelian -->
            <div class="mb-3">
              <label for="tgl_pembelian" class="form-label">Tanggal Pembelian</label>
              <input type="date" name="tgl_pembelian" value="<?= $r->tgl_pembelian?>" id="tgl_pembelian" class="form-control">
            </div>

            <!-- Kode Pembelian -->
            <div class="mb-3">
              <label for="kode_pembelian" class="form-label">Kode Pembelian</label>
              <input type="text" name="kode_pembelian" value="<?= $r->kode_pembelian?>" id="kode_pembelian" class="form-control">
            </div>

            <!-- Jumlah Barang -->
            <div class="mb-3">
              <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
              <input type="number" name="jumlah_barang" value="<?= $r->jumlah_barang?>" id="jumlah_barang" class="form-control">
            </div>

            <!-- Harga Total -->
            <div class="mb-3">
              <label for="harga_total" class="form-label">Harga Total</label>
              <input type="number" name="harga_total" value="<?= $r->harga_total?>" id="harga_total" class="form-control">
            </div>

            <!-- Status Pembayaran -->
            <div class="mb-3">
              <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
              <select name="status_pembayaran" value="<?= $r->status_pembayaran?>" id="status_pembayaran" class="form-control">
                <option value="dibayar">dibayar</option>
                <option value="tertunda">tertunda</option>
              </select>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<a href="<?=base_url().'Pembelian/hapus_pembelian/'.$r->id_pembelian; ?>" type="button" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?');">hapus</a>                  
											</td>                     
										</tr>
										<?php $no++;} ?>  
									</tbody>
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
