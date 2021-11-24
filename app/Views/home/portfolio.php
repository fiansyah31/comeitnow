<?= $this->extend('layout_home/template'); ?>

<?= $this->section('content'); ?>  

      <section class="section-content" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <div class="container">
          <h1 class="title-content text-center" data-aos="fade-up">
            My Portfolio
          </h1>
          <div class="row">
          <?php foreach($data as $row){
              ?>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="content-w position-relative" data-aos="fade-up">
                <div class="card position-relative">
                  <div class="icon-hover position-absolute top-50 start-50 translate-middle">
                  <a href="<?= $row->link_project; ?>" target="_blank"><i class="bi bi-eye-fill"></i></a>
                  </div>
                  <div class="card-body">
                    <img src="<?= base_url() . "/image/" . $row->picture_project; ?>" alt="<?= $row->slug; ?>" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <section class="email">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="background-email">
                <div class="text-center">
                  <img src="<?= base_url(); ?>/image/new-message-animate.svg" class="svg-email" alt="email" data-aos="fade-up">
                  <a href="<?= base_url();?>/email" class="btn btn-secondary px-4" data-aos="fade-up">Email me</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?= $this->endSection(); ?>