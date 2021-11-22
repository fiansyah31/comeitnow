<?= $this->extend('layout_dashboard/template'); ?>

<?= $this->section('content'); ?>  
          <!-- Page content-->
          <div class="page-content">
              <div class="container-fluid">
                  <h1 class="mt-4 title-dashboard">Create Product</h1>
                  <div class="mt-5">
                  <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger mb-3" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6">
                        <form method="post" action="<?= base_url(); ?>/user/save" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                          <div class="form-group mb-3">
                            <label>Judul produk</label>
                            <input type="text" class="form-control" name="judul_project" placeholder="Masukan Judul Produk" value="<?= old('judul_project') ?>">
                          </div>
                          <div class="form-group mb-3">
                            <label>Link Produk</label>
                            <input type="text" class="form-control" id="Myharga" name="link_project" placeholder="Masukan Link Produk" value="<?= old('link_project') ?>">
                          </div>
                          <div class="form-group mb-3">
                            <label>Thumbnail</label>
                            <input type="file" class="form-control" id="Myharga" name="picture_project">
                          </div>
                          <button type="submit" class="btn btn-primary px-3">Publish</button>
                          <a href="<?= base_url();?>/dashboard-product" class="btn btn-secondary px-3">Kembali</a>
                        </form>
                      </div>
                      
                    </div>
                  </div>
              </div>
            </div>
    <?= $this->endSection(); ?>