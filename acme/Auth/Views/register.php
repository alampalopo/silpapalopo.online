<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<p class="register-box-msg"><?= lang('Auth.register') ?></p>
<form action="<?= route_to('register') ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="email"><?= lang('Auth.email') ?></label>
        <input type="email"
               name="email"
               class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
               id="email"
               placeholder="<?= lang('Auth.email') ?>"
               onkeyup="this.value = this.value.toLowerCase()"
               value="<?= old('email') ?>"
               aria-describedby="emailHelp">
        <div class="invalid-feedback"><?= session('errors.email') ?></div>
        <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
    </div>
    <div class="form-group">
        <label for="username"><?= lang('Auth.username') ?></label>
        <input type="text"
               name="username"
               class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
               id="username"
               placeholder="<?= lang('Auth.username') ?>"
               onkeyup="this.value = this.value.toLowerCase()"
               value="<?= old('username') ?>">
        <div class="invalid-feedback"><?= session('errors.username') ?></div>
    </div>
    <br>
    <div class="form-group">
        <label for="password"><?= lang('Auth.password') ?></label>
        <input type="password"
               name="password"
               class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
               id="password"
               placeholder="<?= lang('Auth.password') ?>"
               autocomplete="off">
        <div class="invalid-feedback"><?= session('errors.password') ?></div>
    </div>
    <div class="form-group">
        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
        <input type="password"
               name="pass_confirm"
               class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
               id="pass_confirm"
               placeholder="<?= lang('Auth.repeatPassword') ?>"
               autocomplete="off">
        <div class="invalid-feedback"><?= session('errors.pass_confirm') ?></div>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">
            <?= lang('Auth.register') ?>
        </button>
    </div>
</form>
<div class="mt-4 text-center">
    <?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <h2 class="card-header"><?=lang('Auth.register')?></h2>
                <div class="card-body">

                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                        </div>

                        <div class="form-group">
                            <label for="username"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                    </form>


                    <hr>

                    <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>
-->

<?= $this->endSection() ?>
