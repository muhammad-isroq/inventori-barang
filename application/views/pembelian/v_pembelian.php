<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pembelian</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4">
		<h3>Data Pembelian</h3>
		<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalPembelian" onclick="resetModal()">Tambah Pembelian</button>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Nama Supplier</th>
					<th>Tanggal Pembelian</th>
					<th>Kode Pembelian</th>
					<th>Jumlah Barang</th>
					<th>Harga Total</th>
					<th>Status Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pembelian as $i => $p): ?>
					<tr>
						<td><?= $i + 1 ?></td>
						<td><?= $p->nama_barang ?></td>
						<td><?= $p->nama_supplier ?></td>
						<td><?= $p->tgl_pembelian ?></td>
						<td><?= $p->kode_pembelian ?></td>
						<td><?= $p->jumlah_barang ?></td>
						<td><?= $p->harga_total ?></td>
						<td><?= $p->status_pembayaran ?></td>
						<td>
							<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPembelian"
							onclick="editModal('<?= $p->id_pembelian ?>', '<?= $p->id_barang ?>', '<?= $p->id_supplier ?>', '<?= $p->tgl_pembelian ?>', '<?= $p->kode_pembelian ?>', '<?= $p->jumlah_barang ?>', '<?= $p->harga_total ?>', '<?= $p->status_pembayaran ?>')">Edit</button>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<!-- Form dalam Modal untuk Tambah dan Edit -->
	<div class="modal fade" id="modalPembelian" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="formPembelian" method="post" action="<?= site_url('pembelian/simpan') ?>">
					<div class="modal-header">
						<h5 class="modal-title" id="modalLabel">Tambah Pembelian</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_pembelian" id="id">

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
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	


	<script>
		function resetModal() {
			document.getElementById('formPembelian').reset();
			document.getElementById('modalLabel').innerText = 'Tambah Pembelian';
			document.getElementById('formPembelian').action = '<?= site_url("pembelian/simpan") ?>';
		}

		function editModal(id, id_barang, id_supplier, tanggal, kode, jumlah, harga, status) {
			document.getElementById('id_pembelian').value = id;
			document.getElementById('id_barang').value = id_barang;
			document.getElementById('id_supplier').value = id_supplier;
			document.getElementById('tgl_pembelian').value = tanggal;
			document.getElementById('kode_pembelian').value = kode;
			document.getElementById('jumlah_barang').value = jumlah;
			document.getElementById('harga_total').value = harga;
			document.getElementById('status_pembayaran').value = status;
			document.getElementById('modalLabel').innerText = 'Edit Pembelian';
			document.getElementById('formPembelian').action = '<?= site_url("pembelian/update") ?>';
		}
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
