<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Stok Barang</title>
  <link rel="icon" href="<?= base_url();?>/assets/logo-login.png" type="image">
  <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="<?= base_url('node_modules/aos/dist/aos.css'); ?>">
</head>
<body>
  <div class="container mt-4">
    <h3>Laporan Stok Barang</h3>
    <!-- <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah" onclick="resetModal()">Tambah Stok Barang</button> -->


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
          <!-- <th scope="col" colspan="2" class="text-center">Aksi</th> -->
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
           <!--  <td>
              <button type="button" class="btn btn-warning m-2" data-bs-toggle="modal" data-bs-target="#modalEdit"
              onclick="editModal('<?= $p->id_stok ?>', '<?= $p->id_barang ?>', '<?= $p->id_barang ?>', '<?= $p->jumlah_masuk ?>', '<?= $p->jumlah_keluar ?>', '<?= $p->sisa_stok ?>', '<?= $p->tgl_update_terakhir ?>')">Edit</button><br>
            </td>
            <td><a href="<?=base_url().'stok/hapus/'.$p->id_stok ?>" type="button" class="btn btn-danger m-2" onclick="return confirm('yakin ingin menghapus?');">hapus</a></td> -->
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

 

  <script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
  <script>
    AOS.init();
  </script>
  <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
