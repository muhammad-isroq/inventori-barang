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

    <div class="container-fluid">
      <h3>Laporan Bulanan Stok Barang</h3>
      <table class="table table-striped">
       <tr>
         <thead>
           <th>Bulan</th>
           <th>Aksi</th>
         </thead>
       </tr>
       <tr>
         <td>
          Januari
        </td>
        <td>
          <!-- Button trigger modal Januari -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Lihat
          </button>
        </td>
      </tr>
      <tr>
       <td>
        Februari
      </td>
      <td>
        <!-- Button trigger modal Februari -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          Lihat
        </button>
      </td>
    </tr>
    <tr>
     <td>
      Maret
    </td>
    <td>
      <!-- Button trigger modal Maret -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        Lihat
      </button>
    </td>
  </tr>
  <tr>
   <td>
    April
  </td>
  <td>
    <!-- Button trigger modal April -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
      Lihat
    </button>
  </td>
</tr>
<tr>
 <td>
  Mei
</td>
<td>
  <!-- Button trigger modal Mei -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
    Lihat
  </button>
</td>
</tr>
<tr>
 <td>
  Juni
</td>
<td>
  <!-- Button trigger modal Juni -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">
    Lihat
  </button>
</td>
</tr>
<tr>
 <td>
  Juli
</td>
<td>
  <!-- Button trigger modal Juli -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">
    Lihat
  </button>
</td>
</tr>
<tr>
 <td>
  Agustus
</td>
<td>
  <!-- Button trigger modal Agustus -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">
    Lihat
  </button>
</td>
</tr>
<tr>
 <td>
  September
</td>
<td>
  <!-- Button trigger modal September -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal9">
    Lihat
  </button>
</td>
</tr>
<tr>
 <td>
   oktober
 </td>
 <td>
   <!-- Button trigger modal oktober -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal10">
    Lihat
  </button>
</td>
</tr>
<tr>
 <td>
   november
 </td>
 <td>
  <!-- Button trigger modal November -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11">
    Lihat
  </button>
</td>
</tr>
<tr>
 <td>
   Desember
 </td>
 <td>
  <!-- Button trigger modal Desember -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal12">
    Lihat
  </button>
</td>
</tr>
</table>
</div>

<!-- Modal Januari -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Januari</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokJanuari as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Februari -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Februari</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokFebruari as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Maret -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Maret</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokMaret as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal April -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan April</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokApril as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Mei -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Mei</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokMei as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Juni -->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Juni</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokJuni as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Juli -->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Juli</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokJuli as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Agustus -->
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Agustus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokAgustus as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal September -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan September</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokSeptember as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal oktober -->
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Oktober</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokOktober as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal November -->
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan November</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokNovember as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Desember -->
<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Laporan Stok Barang Bulan Desember</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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

            </tr>
          </thead>
          <tbody>
            <?php foreach($stokDesember as $i => $p): ?>
              <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $p->nama_barang ?></td>
                <td><?= $p->kode_barang ?></td>
                <td><?= $p->jumlah_masuk ?></td>
                <td><?= $p->jumlah_keluar ?></td>
                <td><?= $p->sisa_stok ?></td>
                <td><?= $p->tgl_update_terakhir ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>



<script src="<?= base_url('node_modules/aos/dist/aos.js'); ?>"></script>
<script>
  AOS.init();
</script>
<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
