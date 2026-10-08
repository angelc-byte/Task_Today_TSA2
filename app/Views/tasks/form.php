<?= $this->extend('layout/task_shell') ?>
<?= $this->section('title') ?><?= esc($pageTitle) ?><?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php $isEdit = $task !== null; $errors = session()->getFlashdata('errors') ?? []; ?>
<div class="tsa2-content">
    <header class="tsa2-heading">
        <div>
            <span class="tsa2-eyebrow">TASK MANAGEMENT</span>
            <h1><?= esc($pageTitle) ?></h1>
            <p><?= $isEdit ? 'Update the details of this task.' : 'Add a task to your list.' ?></p>
        </div>
        <a class="tsa2-button secondary" href="<?= site_url('tasks') ?>">Back to Tasks</a>
    </header>

    <form class="tsa2-panel tsa2-form" action="<?= $isEdit ? site_url('tasks/' . $task['id']) : site_url('tasks') ?>" method="post">
        <?= csrf_field() ?>
        <label for="title">Title <span aria-hidden="true">*</span></label>
        <input id="title" name="title" maxlength="150" required value="<?= esc(old('title', $task['title'] ?? ''), 'attr') ?>">
        <?php if (isset($errors['title'])): ?><small class="tsa2-field-error"><?= esc($errors['title']) ?></small><?php endif ?>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="5"><?= esc(old('description', $task['description'] ?? '')) ?></textarea>

        <div class="tsa2-form-row">
            <div>
                <label for="task_date">Task date <span aria-hidden="true">*</span></label>
                <input id="task_date" name="task_date" type="date" required value="<?= esc(old('task_date', $task['task_date'] ?? ''), 'attr') ?>">
                <?php if (isset($errors['task_date'])): ?><small class="tsa2-field-error"><?= esc($errors['task_date']) ?></small><?php endif ?>
            </div>
            <div>
                <label for="status">Status <span aria-hidden="true">*</span></label>
                <?php $status = old('status', $task['status'] ?? 'pending'); ?>
                <select id="status" name="status" required>
                    <option value="pending" <?= $status === 'pending' ? 'selected' : '' ?>>Pending</option>
                    <option value="completed" <?= $status === 'completed' ? 'selected' : '' ?>>Completed</option>
                </select>
            </div>
        </div>
        <div class="tsa2-form-actions">
            <button class="tsa2-button primary" type="submit"><?= $isEdit ? 'Save Changes' : 'Create Task' ?></button>
            <a class="tsa2-button secondary" href="<?= site_url('tasks') ?>">Cancel</a>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
