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
  <div class="container mt-4">
    <h3>Data Pembelian</h3>
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah" onclick="resetModal()">Tambah Pembelian</button>

    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Nama Supplier</th>
          <th scope="col">Tanggal Pembelian</th>
          <th scope="col">Kode Pembelian</th>
          <th scope="col">Jumlah Barang</th>
          <th scope="col">Harga Total</th>
          <th scope="col">Status Pembayaran</th>
          <th scope="col" colspan="2" class="text-center">Aksi</th>
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
              <button type="button" class="btn btn-warning m-2" data-bs-toggle="modal" data-bs-target="#modalEdit"
              onclick="editModal('<?= $p->id_pembelian ?>', '<?= $p->id_barang ?>', '<?= $p->id_supplier ?>', '<?= $p->tgl_pembelian ?>', '<?= $p->kode_pembelian ?>', '<?= $p->jumlah_barang ?>', '<?= $p->harga_total ?>', '<?= $p->status_pembayaran ?>')">Edit</button><br>
            </td>
            <td><a href="<?=base_url().'pembelian/hapus/'.$p->id_pembelian ?>" type="button" class="btn btn-danger m-2" onclick="return confirm('yakin ingin menghapus?');">hapus</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Form dalam Modal untuk Tambah -->
  <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formTambah" method="post" action="<?= site_url('pembelian/simpan') ?>">

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

  <!-- Form dalam Modal untuk Edit -->
  <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formEdit" method="post" action="<?= site_url('pembelian/update') ?>">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Edit Pembelian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id_pembelian" id="id_pembelian_edit">


            <!-- Nama Barang -->
            <div class="mb-3">
              <label for="id_barang" class="form-label">Nama Barang</label>
              <select name="id_barang" id="id_barang_edit" class="form-control" >
                <option value="" disabled selected>Pilih Barang</option>
                <?php foreach ($barang as $b): ?>
                  <option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Nama Supplier -->
            <div class="mb-3">
              <label for="id_supplier" class="form-label">Nama Supplier</label>
              <select name="id_supplier" id="id_supplier_edit" class="form-control" >
                <option value="" disabled selected>Pilih Supplier</option>
                <?php foreach ($supplier as $s): ?>
                  <option value="<?= $s->id_supplier ?>"><?= $s->nama_supplier ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Tanggal Pembelian -->
            <div class="mb-3">
              <label for="tgl_pembelian" class="form-label">Tanggal Pembelian</label>
              <input type="date" name="tgl_pembelian"  id="tgl_pembelian_edit" class="form-control" >
            </div>

            <!-- Kode Pembelian -->
            <div class="mb-3">
              <label for="kode_pembelian" class="form-label">Kode Pembelian</label>
              <input type="text" name="kode_pembelian" id="kode_pembelian_edit" class="form-control" >
            </div>

            <!-- Jumlah Barang -->
            <div class="mb-3">
              <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
              <input type="number" name="jumlah_barang" id="jumlah_barang_edit" class="form-control" >
            </div>

            <!-- Harga Total -->
            <div class="mb-3">
              <label for="harga_total" class="form-label">Harga Total</label>
              <input type="number" name="harga_total" id="harga_total_edit" class="form-control" >
            </div>

            <!-- Status Pembayaran -->
            <div class="mb-3">
              <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
              <select name="status_pembayaran" id="status_pembayaran" class="form-control" >
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
      document.getElementById('formTambah').reset();
      document.getElementById('modalLabel').innerText = 'Tambah Pembelian';
      document.getElementById('formTambah').action = '<?= site_url("pembelian/simpan") ?>';
    }


    function editModal(id, id_barang, id_supplier, tgl_pembelian, kode_pembelian, jumlah_barang, harga_total, status_pembayaran) {
      document.getElementById('id_pembelian_edit').value = id;
      document.getElementById('id_barang_edit').value = id_barang;
      document.getElementById('id_supplier_edit').value = id_supplier;
      document.getElementById('tgl_pembelian_edit').value = tgl_pembelian;
      document.getElementById('kode_pembelian_edit').value = kode_pembelian;
      document.getElementById('jumlah_barang_edit').value = jumlah_barang;
      document.getElementById('harga_total_edit').value = harga_total;
      document.getElementById('status_pembayaran').value = status_pembayaran;

    // Mengubah teks modal dan URL action untuk update
      document.getElementById('modalLabel').innerText = 'Edit Pembelian';
      document.getElementById('formEdit').action = '<?= site_url("pembelian/update") ?>';
    }

  </script>

  <script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
  <script>
    AOS.init();
  </script>
  <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
