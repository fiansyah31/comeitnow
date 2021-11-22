<?= $this->extend('layout_action/template'); ?>

<?= $this->section('content'); ?>  
        <section class="hero-home hero-login" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="hero-text">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h1 class="card-title">
                                       <span>Sign Up to</span> enjoy free or premium templates
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="hero-images">
                          <img src="/images/undraw_Login_re_4vu2.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 align-self-center form">
                      <h2 class="card-title fs-5 text-black mb-4 text-center">
                        <?=lang('Auth.register')?>
                      </h2>
                      <?= view('Myth\Auth\Views\_message_block') ?>
                      <form class="row g-3" action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" name="email" aria-describedby="emailHelp" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                        </div>
                        <div class="form-group mb-3">
                        <label for="username"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>
                        
                        <div class="form-group mb-2">
                          <label  class="form-label">Password</label>
                          <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                         
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label">Konfirmasi Password</label>
                          <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Enter your confirm password" autocomplete="off">
                        </div>
                        <a href="<?= route_to('login') ?>" class="account-action mb-2"><?=lang('Auth.alreadyRegistered')?></a>
                        <div class="col-12">
                          <button class="btn btn-secondary" type="submit"><?=lang('Auth.register')?></button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </section>
        <?= $this->endSection(); ?>
       