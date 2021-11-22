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
                                       <span>Sign In to</span> enjoy free or premium templates
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="hero-images">
                          <img src="/images/undraw_Login_re_4vu2.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 align-self-center form">
                    <h2 class="card-title fs-5 text-black mb-4 text-center"><?=lang('Auth.loginTitle')?></h2>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form class="row g-3" action="<?= route_to('login') ?>" method="post">
						          <?= csrf_field() ?>
                    <?php if ($config->validFields === ['email']): ?>
                        <div class="form-group mb-3">
                          <label class="form-label"><?=lang('Auth.email')?></label>
                          <input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                              <?= session('errors.login') ?>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="form-group mb-1">
                          <label  class="form-label"><?=lang('Auth.emailOrUsername')?></label>
                          <input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>" >
                            <div class="invalid-feedback">
                              <?= session('errors.login') ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                          <label><?=lang('Auth.password')?></label>
                          <input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                          <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                          </div>
                        </div>
                        <?php if ($config->allowRemembering): ?>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
                              <?=lang('Auth.rememberMe')?>
                            </label>
                          </div>
                        <?php endif; ?>
                        <?php if ($config->allowRegistration) : ?>
                        <a href="<?= route_to('register') ?>" class="account-action mb-2"><?=lang('Auth.needAnAccount')?></a>
                        <?php endif; ?>
                        <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </section>
       <?= $this->endSection(); ?>