
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
      selamat datang petugas
    </div>
  </section>
</div>



