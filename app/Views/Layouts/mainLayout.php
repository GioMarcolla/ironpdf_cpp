<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Iron Software' ?></title>
    <meta name="description" content="<?= $description ?? 'Iron Software PDF Library' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/layouts/mainLayout.css" rel="stylesheet">
    <?php if (isset($pageCSS)) : ?>
        <link href="/css/pages/<?= $pageCSS ?>" rel="stylesheet">
    <?php endif; ?>
</head>

<body>

    <?= $this->include('components/navigation') ?>
    <header>
        <?= $this->renderSection('header') ?>
    </header>

    <main id="cpp-content">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <?= $this->renderSection('footer') ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>