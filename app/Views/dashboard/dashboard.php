<?= $this->extend('layout_dashboard/template'); ?>

<?= $this->section('content'); ?>  
            <div class="page-content">
              <div class="container-fluid">
                  <h1 class="mt-4 title-dashboard">Dashboard</h1>
                  <div class="mt-5">
                    <div class="row">
                      <div class="col-12 col-md-4 col-lg-4">
                        <div class="card border-0 ronded">
                          <div class="card-body">
                            <h5 class="card-title">Total Project</h5>
                            <div class="card-text"><?= $project; ?></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-4 col-lg-4">
                        <div class="card border-0 ronded">
                          <div class="card-body">
                            <h5 class="card-title">User</h5>
                            <div class="card-text"><?= user()->username; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <?= $this->endSection(); ?>