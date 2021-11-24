<?= $this->extend('layout_home/template'); ?>

<?= $this->section('content'); ?>  
    <section class="section-email">
        <div class="container">
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show mt-3 mb-4" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="image-email" data-aos="fade-up">
                        <img src="<?= base_url();?>/image/mailbox-animate.svg" alt="mail" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 align-self-center">
                    <div class="box-email" data-aos="fade-up">
                        <h2 class="title-content">
                            Send Email
                        </h2>
                        <form action="<?= base_url(); ?>/home/sendemail" method="POST" class="mt-4">
                        <div class="form-group mb-4">
                          <label  class="form-label">Email address</label>
                          <input type="text" class="form-control" name="email" placeholder="Enter your email" required >
                        </div>
                        <div class="form-group mb-4">
                          <label  class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter your name" required >
                        </div>
                        <div class="form-group mb-4">
                          <label  class="form-label">Subject</label>
                          <input type="text" class="form-control" name="subject" placeholder="Enter your subject" required >
                        </div>
                        <div class="form-group mb-4">
                          <label  class="form-label">Message</label>
                          <textarea class="form-control" name="pesan" placeholder="Enter your message" required ></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary px-4">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>