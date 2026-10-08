<?= $this->extend('layout/task_shell') ?>
<?= $this->section('title') ?>Tasks<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php
$total = count($tasks);
$completed = count(array_filter($tasks, static fn ($task) => $task['status'] === 'completed'));
$pending = $total - $completed;
?>
<div class="tsa2-content">
    <header class="tsa2-heading">
        <div>
            <span class="tsa2-eyebrow">TASK MANAGEMENT</span>
            <h1>Tasks</h1>
            <p>Keep your daily work organized in one place.</p>
        </div>
        <?php if (session('isLoggedIn')): ?>
            <a class="tsa2-button primary" href="<?= site_url('tasks/new') ?>">+ Add New Task</a>
        <?php else: ?>
            <a class="tsa2-button primary" href="<?= site_url('login') ?>">Sign In to Manage</a>
        <?php endif ?>
    </header>

    <div class="tsa2-stats" aria-label="Task summary">
        <div class="tsa2-stat"><span>Total Tasks</span><strong><?= $total ?></strong><small>Active records</small></div>
        <div class="tsa2-stat"><span>Pending</span><strong><?= $pending ?></strong><small>Still to complete</small></div>
        <div class="tsa2-stat"><span>Completed</span><strong><?= $completed ?></strong><small>Finished tasks</small></div>
    </div>

    <section class="tsa2-panel" aria-labelledby="task-list-title">
        <div class="tsa2-panel-header">
            <div>
                <h2 id="task-list-title">Task List</h2>
                <p><?= session('isLoggedIn') ? 'Edit or archive a task using its action buttons.' : 'Active tasks are public. Sign in to make changes.' ?></p>
            </div>
            <?php if ($total > 0): ?>
                <label class="tsa2-search">
                    <span class="sr-only">Search tasks</span>
                    <input id="taskSearch" type="search" placeholder="Search tasks" autocomplete="off">
                </label>
            <?php endif ?>
        </div>

        <?php if ($total === 0): ?>
            <div class="tsa2-empty">No active tasks yet.</div>
        <?php else: ?>
            <div class="tsa2-task-grid" id="taskGrid">
                <?php foreach ($tasks as $task): ?>
                    <article class="tsa2-task-card" data-search="<?= esc(strtolower($task['title'] . ' ' . ($task['description'] ?? '')), 'attr') ?>">
                        <div class="tsa2-task-meta">
                            <span class="tsa2-status <?= esc($task['status'], 'attr') ?>"><?= esc(ucfirst($task['status'])) ?></span>
                            <time datetime="<?= esc($task['task_date'], 'attr') ?>"><?= esc(date('M d, Y', strtotime($task['task_date']))) ?></time>
                        </div>
                        <h3><?= esc($task['title']) ?></h3>
                        <p><?= esc($task['description'] ?: 'No description provided.') ?></p>
                        <?php if (session('isLoggedIn')): ?>
                            <div class="tsa2-actions">
                                <a class="tsa2-button secondary" href="<?= site_url('tasks/' . $task['id'] . '/edit') ?>">Edit</a>
                                <form action="<?= site_url('tasks/' . $task['id'] . '/archive') ?>" method="post" onsubmit="return confirm('Archive this task?');">
                                    <?= csrf_field() ?>
                                    <button class="tsa2-button danger" type="submit">Archive</button>
                                </form>
                            </div>
                        <?php endif ?>
                    </article>
                <?php endforeach ?>
            </div>
            <p class="tsa2-search-empty" id="searchEmpty" hidden>No tasks match your search.</p>
        <?php endif ?>
    </section>
</div>
<script>
const search = document.getElementById('taskSearch');
if (search) {
    search.addEventListener('input', () => {
        const query = search.value.trim().toLowerCase();
        const cards = [...document.querySelectorAll('.tsa2-task-card')];
        let visible = 0;
        cards.forEach(card => {
            const match = card.dataset.search.includes(query);
            card.hidden = !match;
            if (match) visible++;
        });
        document.getElementById('searchEmpty').hidden = visible !== 0;
    });
}
</script>
<?= $this->endSection() ?>
