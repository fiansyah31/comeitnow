<?= $this->extend('layout_home/template'); ?>

<?= $this->section('content'); ?>  
    <section class="404-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagenot text-center" data-aos="fade-up">
                        <img src="<?= base_url(); ?>/image/monster-404-error-animate.svg" class="img-fluid" alt="404">
                        <a href="<?= base_url(); ?>/home" class="link-light">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>