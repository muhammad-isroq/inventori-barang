<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Stok Barang</title>
  <link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
  <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<body>
  <div class="container mt-4">
    <h3>Data Stok Barang</h3>
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah" onclick="resetModal()">Tambah Stok Barang</button>

    <a href="<?= base_url('Stok/laporan')?>" class="btn btn-dark mb-3">Laporan Stok Barang</a>

    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Kode Barang</th>
          <th scope="col">Jumlah Masuk</th>
          <th scope="col">Jumlah Keluar</th>
          <th scope="col">Sisa Stok</th>
          <th scope="col">Tanggal Update Terakhir</th>
          <th scope="col" colspan="2" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($stok as $i => $p): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $p->nama_barang ?></td>
            <td><?= $p->kode_barang ?></td>
            <td><?= $p->jumlah_masuk ?></td>
            <td><?= $p->jumlah_keluar ?></td>
            <td><?= $p->sisa_stok ?></td>
            <td><?= $p->tgl_update_terakhir ?></td>
            <td>
              <button type="button" class="btn btn-warning m-2" data-bs-toggle="modal" data-bs-target="#modalEdit"
              onclick="editModal('<?= $p->id_stok ?>', '<?= $p->id_barang ?>', '<?= $p->id_barang ?>', '<?= $p->jumlah_masuk ?>', '<?= $p->jumlah_keluar ?>', '<?= $p->sisa_stok ?>', '<?= $p->tgl_update_terakhir ?>')">Edit</button><br>
            </td>
            <td><a href="<?=base_url().'stok/hapus/'.$p->id_stok ?>" type="button" class="btn btn-danger m-2" onclick="return confirm('yakin ingin menghapus?');">hapus</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Form dalam Modal untuk Tambah -->
  <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formTambah" method="post" action="<?= site_url('stok/simpan') ?>">

          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Tambah Stok Barang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id_stok" id="id">

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

            <!-- Kode Barang -->
            <div class="mb-3">
              <label for="id_barang" class="form-label">Kode Barang</label>
              <select name="id_barang" id="id_barang" class="form-control" required>
                <option value="" disabled selected>Pilih Kode Barang</option>
                <?php foreach ($barang as $s): ?>
                  <option value="<?= $s->id_barang ?>"><?= $s->kode_barang ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Jumlah Masuk -->
            <div class="mb-3">
              <label for="jumlah_masuk" class="form-label">Jumlah Masuk</label>
              <input type="number" name="jumlah_masuk" id="jumlah_masuk" class="form-control" required>
            </div>

            <!-- Jumlah Keluar -->
            <div class="mb-3">
              <label for="jumlah_keluar" class="form-label">Jumlah Keluar</label>
              <input type="text" name="jumlah_keluar" id="jumlah_keluar" class="form-control" required>
            </div>

            <!-- Sisa Stok -->
<!--             <div class="mb-3">
              <label for="sisa_stok" class="form-label">Sisa Stok</label>
              <input type="number" name="sisa_stok" id="sisa_stok" class="form-control" required>
            </div> -->

            <!-- Tanggal Update Terakhir -->
            <div class="mb-3">
              <label for="tgl_update_terakhir" class="form-label">Tanggal Update Terakhir</label>
              <input type="date" name="tgl_update_terakhir" id="tgl_update_terakhir" class="form-control" required>
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
        <form id="formEdit" method="post" action="<?= site_url('stok/update') ?>">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Edit Stok Barang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id_stok" id="id_stok_edit">


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

            <!-- Kode Barang -->
            <div class="mb-3">
              <label for="id_barang" class="form-label">Kode Barang</label>
              <select name="id_barang" id="id_barang_edit" class="form-control" >
                <option value="" disabled selected>Pilih Kode Barang</option>
                <?php foreach ($barang as $s): ?>
                  <option value="<?= $s->id_barang ?>"><?= $s->kode_barang ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Jumlah Masuk -->
            <div class="mb-3">
              <label for="jumlah_masuk" class="form-label">Jumlah Masuk</label>
              <input type="number" name="jumlah_masuk"  id="jumlah_masuk_edit" class="form-control" >
            </div>

            <!-- Jumlah Keluar -->
            <div class="mb-3">
              <label for="jumlah_keluar" class="form-label">Jumlah Keluar</label>
              <input type="text" name="jumlah_keluar" id="jumlah_keluar_edit" class="form-control" >
            </div>

            <!-- Sisa Stok -->
<!--             <div class="mb-3">
              <label for="sisa_stok" class="form-label">Sisa Stok</label>
              <input type="number" name="sisa_stok" id="sisa_stok_edit" class="form-control" >
            </div> -->

            <!-- Tanggal Update Terakhir -->
            <div class="mb-3">
              <label for="tgl_update_terakhir_edit" class="form-label">Tanggal Update Terakhir</label>
              <input type="date" name="tgl_update_terakhir" id="tgl_update_terakhir_edit" class="form-control" >
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
      document.getElementById('modalLabel').innerText = 'Tambah Stok Barang';
      document.getElementById('formTambah').action = '<?= site_url("stok/simpan") ?>';
    }


    function editModal(id, id_barang, id_barang, jumlah_masuk, jumlah_keluar, sisa_stok, tgl_update_terakhir) {
      document.getElementById('id_stok_edit').value = id;
      document.getElementById('id_barang_edit').value = id_barang;
      document.getElementById('id_barang_edit').value = id_barang;
      document.getElementById('jumlah_masuk_edit').value = jumlah_masuk;
      document.getElementById('jumlah_keluar_edit').value = jumlah_keluar;
      // document.getElementById('sisa_stok_edit').value = sisa_stok;
      document.getElementById('tgl_update_terakhir_edit').value = tgl_update_terakhir;
     

    // Mengubah teks modal dan URL action untuk update
      document.getElementById('modalLabel').innerText = 'Edit Stok Barang';
      document.getElementById('formEdit').action = '<?= site_url("stok/update") ?>';
    }

  </script>

  <script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
  <script>
    AOS.init();
  </script>
  <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
