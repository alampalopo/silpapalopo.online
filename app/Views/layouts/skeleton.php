<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', service('request')->getLocale()) ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= ucwords(basename(current_url())) ?> &mdash; Silpapalopo</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- General CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">

    <!-- Plugins -->
    <?= $this->renderSection('css') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?= $this->renderSection('app') ?>
</div>

<!-- Modal -->
<?= $this->renderSection('modal') ?>
<!-- End of Modal -->

<!-- General JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>

<!-- Plugins -->
<?= $this->renderSection('js') ?>

<!-- Page Specific JS -->
<?= $this->renderSection('script') ?>
</body>
</html>