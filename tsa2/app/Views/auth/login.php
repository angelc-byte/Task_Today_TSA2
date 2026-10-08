<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>Login<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php $errors = session()->getFlashdata('errors') ?? []; ?>
<div class="login-shell"><section><p class="eyebrow">AUTHORIZED ACCESS</p><h1>Manage today with confidence.</h1><p>Public pages remain available to everyone. Sign in to create, edit, update, or archive tasks.</p><ul><li>Validated task forms</li><li>Soft-delete archive workflow</li><li>Session-protected management actions</li></ul></section><form class="panel form-card" action="<?= site_url('login') ?>" method="post"><?= csrf_field() ?><h2>Sign in</h2><label for="username">Username</label><input id="username" name="username" autocomplete="username" required value="<?= esc(old('username')) ?>"><?php if (isset($errors['username'])): ?><small class="field-error"><?= esc($errors['username']) ?></small><?php endif ?><label for="password">Password</label><input id="password" name="password" type="password" autocomplete="current-password" required><?php if (isset($errors['password'])): ?><small class="field-error"><?= esc($errors['password']) ?></small><?php endif ?><button class="button wide" type="submit">Sign in</button><p class="demo-note"><strong>Demo:</strong> angel / password123</p></form></div>
<?= $this->endSection() ?>

