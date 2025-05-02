<!doctype html>
<html lang="en">

<head>
<title><?= $pageTitle ?? 'Artigence' ?></title>
<?php include __DIR__ . '/../partials/head-css.php'; ?>
</head>

<body>
<?php include __DIR__ . '/../partials/header.php'; ?>
<main>
    <?= $content ?? '' ?>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
<?php include __DIR__ . '/../partials/footer-js.php'; ?>

</body>

</html>