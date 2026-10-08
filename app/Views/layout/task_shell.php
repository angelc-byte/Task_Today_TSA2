<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($this->renderSection('title') ?: 'Tasks for Today') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/app-theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/tsa2-pages.css') ?>">
</head>
<body>
<div class="app-layout">
    <?= view('layout/sidebar') ?>
    <div class="main-area">
        <?= view('layout/topbar') ?>
        <main class="page-content tsa2-page">
            <?php if ($message = session()->getFlashdata('success')): ?>
                <div class="tsa2-alert success" role="status"><?= esc($message) ?></div>
            <?php endif ?>
            <?php if ($message = session()->getFlashdata('error')): ?>
                <div class="tsa2-alert error" role="alert"><?= esc($message) ?></div>
            <?php endif ?>
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</div>
</body>
</html>
