<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<p class="login-box-msg"><?= lang('Auth.forgotPassword') ?></p>
<p class="text-justify"><?= lang('Auth.enterEmailForInstructions') ?></p>
<form action="<?= route_to('forgot-password') ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="email"><?= lang('Auth.emailAddress') ?></label>
        <input type="email"
               name="email"
               class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
               id="email"
               placeholder="<?= lang('Auth.emailAddress') ?>"
               onkeyup="this.value = this.value.toLowerCase()"
               value="<?= old('email') ?>">
        <div class="invalid-feedback"><?= session('errors.email') ?></div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">
            <?= lang('Auth.sendInstructions') ?>
        </button>
    </div>
</form>

<!--
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <h2 class="card-header"><?=lang('Auth.forgotPassword')?></h2>
                <div class="card-body">

                    <p><?=lang('Auth.enterEmailForInstructions')?></p>

                    <form action="<?= route_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?=lang('Auth.emailAddress')?></label>
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.sendInstructions')?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
-->

<?= $this->endSection() ?>
