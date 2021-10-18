<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<p class="login-box-msg"><?= lang('Auth.loginTitle') ?> Tahun Anggaran <?= date('Y') + 1 ?></p>
<form action="<?= route_to('login') ?>" method="post">
	<?= csrf_field() ?>
	<div class="form-group">
		<?php if ($config->validFields === ['email']): ?>
			<label for="login"><?= lang('Auth.email') ?></label>
			<input type="email"
				   name="login"
				   class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
				   id="login"
				   placeholder="<?= lang('Auth.email') ?>"
				   onkeyup="this.value = this.value.toLowerCase()">
			<div class="invalid-feedback"><?= session('errors.login') ?></div>
		<?php else: ?>
			<label for="login"><?= lang('Auth.emailOrUsername') ?></label>
			<input type="text"
				   name="login"
				   class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
				   id="login"
				   placeholder="<?= lang('Auth.emailOrUsername') ?>"
				   onkeyup="this.value = this.value.toLowerCase()">
			<div class="invalid-feedback"><?= session('errors.login') ?></div>
		<?php endif; ?>
	</div>
	<div class="form-group">
		<label for="password"><?= lang('Auth.password') ?></label>
		<input type="password"
			   name="password"
			   class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
			   id="password"
			   placeholder="<?= lang('Auth.password') ?>">
		<div class="invalid-feedback"><?= session('errors.password') ?></div>
	</div>
	<div class="form-group row">
		<div class="col">
			<?php if($config->allowRemembering): ?>
				<input type="checkbox"
					   name="remember"
					   <?php if(old('remember')) : ?> checked <?php endif ?>
					   id="remember">
				<label for="remember"><?= lang('Auth.rememberMe') ?></label>
			<?php endif; ?>
		</div>
		<div class="col-auto">
			<?php if ($config->activeResetter): ?>
				<a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
			<?php endif; ?>
		</div>
	</div>
	<br>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block">
			<?= lang('Auth.loginAction') ?>
		</button>
	</div>
</form>
<?php if ($config->allowRegistration) : ?>
	<div class="mt-4 text-center">
		<a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
	</div>
<?php endif; ?>
<!--
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">

			<div class="card">
				<h2 class="card-header"><?=lang('Auth.loginTitle')?></h2>
				<div class="card-body">

					<form action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
						<div class="form-group">
							<label for="login"><?=lang('Auth.email')?></label>
							<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php else: ?>
						<div class="form-group">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>

						<div class="form-group">
							<label for="password"><?=lang('Auth.password')?></label>
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

						<br>

						<button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
					</form>

					<hr>

<?php if ($config->allowRegistration) : ?>
					<p><a href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>
<?php if ($config->activeResetter): ?>
					<p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>
-->

<?= $this->endSection() ?>
