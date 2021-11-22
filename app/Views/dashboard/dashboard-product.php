<?= $this->extend('layout_dashboard/template'); ?>

<?= $this->section('content'); ?>  
          <!-- Page content-->
          <div class="page-content">
              <div class="container-fluid">
                  <h1 class="mt-4 title-dashboard">Dashboard</h1>
                  <div class="mt-5">
                  <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success mb-3" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                    <a href="<?= base_url();?>/create-product" class="btn btn-success px-3 mb-4">Tambah Product</a>
                    <div class="row">
                    <?php
                        foreach ($data as $row) {
                        ?>
                      <div class="col-12 col-md-3 col-lg-3">
                        <a href="/user/change/<?= $row->slug; ?>" class="card card-project position-relative border-0 ronded" style="text-decoration: none;">
                          <div class="card-body">
                            <img src="<?= base_url() . "/image/" . $row->picture_project; ?>" alt="<?= $row->slug; ?>" class="img-fluid rounded">
                            <div class="icon-eye position-absolute top-50 start-50 translate-middle">
                              <i class="bi bi-eye-fill " style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title mt-2"><?= $row->judul_project; ?></h5>
                          </div>
                        </a>
                      </div>
                      <?php
                        }
                        ?>
                    </div>
                  </div>
              </div>
            </div>
    <?= $this->endSection(); ?>