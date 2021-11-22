<?= $this->extend('layout_dashboard/template'); ?>

<?= $this->section('content'); ?>  
            <!-- Page content-->
            <div class="page-content">
              <div class="container-fluid">
                  <h1 class="mt-4 title-dashboard">Setting</h1>
                  <div class="mt-5">
                    <div class="row">
                      <div class="col-12">
                        <div class="row g-3 setting">                      
                          <div class="col-12 col-md-4 col-lg-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= user()->username; ?>">
                          </div>                       
                          <div class="col-12 col-md-4 col-lg-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password_hash" value="<?= user()->password_hash; ?>">
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