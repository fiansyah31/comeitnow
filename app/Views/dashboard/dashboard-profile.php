<?= $this->extend('layout_dashboard/template'); ?>

<?= $this->section('content'); ?>  
            <!-- Page content-->
            <div class="page-content">
              <div class="container-fluid">
                  <h1 class="mt-4 title-dashboard">Profile</h1>
                  <div class="mt-5">
                    <div class="row">
                      <div class="col-12">
                        <div class="row g-3 setting">                      
                          <div class="col-12 col-md-4 col-lg-4">
                            <label for="namalengkap" class="form-label">Nama lengkap</label>
                            <input type="text" class="form-control" name="fullname" value="<?= user()->fullname; ?>">
                          </div>                       
                          <div class="col-12 col-md-4 col-lg-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= user()->email; ?>">
                          </div>                                                                                          
                          <div class="col-12 col-md-4 col-lg-4 mt-5">
                            <button type="submit" class="btn btn-success px-3">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
    <?= $this->endSection(); ?>