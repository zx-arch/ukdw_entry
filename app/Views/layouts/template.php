<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title><?= $title; ?> | Entry UKDW</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
            crossorigin="anonymous"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="<?= base_url(); ?>/css/dashboardadmin.css">
        <link rel="shortcut icon" href="<?= base_url() ?>/logo-ukdw.ico">

    </head>
    <body>
        <?php $this->renderSection('container') ?>
        <script src="<?= base_url() ?>/js/script.js"></script>
    </body>
</html>