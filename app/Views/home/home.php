<?= $this->extend('layout_home/template'); ?>

<?= $this->section('content'); ?>  
<section class="hero">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="background-hero">
                        <div class="text-center ww" data-aos="fade-up">
                          <h1 class="hero-title">
                            UI UX & web designer. Let's design
                          </h1>
                          <p class="hero-subtitle">
                            Web and mobile app designs that are cool and aesthetically pleasing. must have functionality based on a deep understanding of the product, the business and the users themselves.
                          </p>
                          <a href="<?= base_url();?>/portfolio" class="btn btn-secondary px-4">See Project</a>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="section-content" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="content-q position-relative" id="scrollspyHeading1">
                <h2 class="title-content position-absolute top-0 start-0 align-self-center">
                  All project
                </h2>
                <a href="<?= base_url();?>/portfolio" class="link position-absolute top-0 end-0 align-self-center">Load more</a>
              </div>
            </div>
            <?php foreach($data as $row){
              ?>
            <div class="col-12">
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

      <section class="shop" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <div class="container" id="scrollspyHeading2">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6 align-self-center" data-aos="fade-up">
            <h2 class="shop-title">
              Do you have a shop?
            </h2>
            <h4 class="shop-subtitle mt-2">
              Yes, I have a shop on ui8net, where I sell my products, such as ui kits and website templates.
            </h4>
            <a href="https://ui8.net/alfiansyah/products" target="_blank" class="btn btn-primary px-4 mt-3">
              VISIT THE STORE
            </a>
            </div>
            <div class="col-12 col-md-6 col-lg-6" data-aos="fade-up">
              <img src="<?= base_url(); ?>/image/opened-animate.svg" class="img-fluid" alt="shop">
            </div>
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
                  <a href="email.com" class="btn btn-secondary px-4" data-aos="fade-up">Email me</a>
                </div>
              </div>
          </div>
          </div>
        </div>
      </section>
<?= $this->endSection(); ?>