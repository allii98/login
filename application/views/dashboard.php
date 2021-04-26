<div class="container-fluid">

  <div class="row clearfix">
    <?php if ($this->session->userdata('level') == 1) { ?>

      <?php foreach ($apk as $dt) : ?>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card widget_2 big_icon <?= $dt['icon_apk'] ?>">
            <div class="body">
              <!-- <h6></h6> -->
              <a href="<?= $dt['link_apk'] ?>" class="btn btn-neutral waves-effect"><?= $dt['nama_apk'] ?></a>

            </div>
          </div>
        </div>
      <?php endforeach; ?>

    <?php } ?>

  </div>
  <!-- <div class="row clearfix">
    <div class="col-lg-12">
      <div class="card">
        <div class="header">
          <h2><strong>Daftar</strong> Aplikasi</h2>
        </div>
        <div class="body">
          
          <button class="btn btn-primary">Helpdesk</button>
          <button class="btn btn-info">Peminjaman Assets</button>
         
        </div>
      </div>
    </div>
  </div> -->

</div>