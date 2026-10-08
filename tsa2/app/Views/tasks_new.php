<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add New Task | Tasks for Today</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <style>

        .task-form-card {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #e3eaec;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(24, 63, 72, 0.06);
            overflow: hidden;
        }

        .task-form-header {
            padding: 24px 28px;
            border-bottom: 1px solid #e8eef0;
            background: #f9fbfb;
        }

        .task-form-header h2 {
            margin: 0 0 5px;
            color: #263238;
            font-size: 19px;
        }

        .task-form-header p {
            margin: 0;
            color: #718087;
            font-size: 12px;
        }

        .task-form-body {
            padding: 28px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #263238;
            font-size: 12px;
            font-weight: 700;
        }

        .form-required {
            color: #c74b4b;
        }

        .form-input,
        .form-select {
            width: 100%;
            box-sizing: border-box;
            padding: 13px 14px;
            border: 1px solid #dce5e7;
            border-radius: 9px;
            background: #ffffff;
            color: #35454b;
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input:focus,
        .form-select:focus {
            border-color: #3b7c8b;
            box-shadow: 0 0 0 3px rgba(59, 124, 139, 0.10);
        }

        .form-hint {
            margin: 7px 0 0;
            color: #8a979c;
            font-size: 10px;
        }

        .task-preview {
            margin-top: 25px;
            padding: 18px;
            border: 1px solid #e3eaec;
            border-radius: 12px;
            background: #f9fbfb;
        }

        .preview-label {
            margin-bottom: 10px;
            color: #718087;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
        }

        .preview-task {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .preview-icon {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 9px;
            background: #eaf5f6;
            color: #205968;
            font-size: 14px;
        }

        .preview-content {
            min-width: 0;
        }

        .preview-title {
            color: #35454b;
            font-size: 13px;
            font-weight: 700;
            word-break: break-word;
        }

        .preview-date {
            margin-top: 3px;
            color: #8a979c;
            font-size: 10px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid #e8eef0;
        }

        .btn-cancel {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 17px;
            border: 1px solid #dce5e7;
            border-radius: 8px;
            background: #ffffff;
            color: #5f7076;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-cancel:hover {
            background: #f5f8f9;
            border-color: #cbd9dc;
        }

        .btn-save {
            border: 0;
            border-radius: 8px;
            padding: 11px 19px;
            background: #205968;
            color: #ffffff;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-save:hover {
            background: #174b58;
            transform: translateY(-1px);
            box-shadow: 0 5px 12px rgba(32, 89, 104, 0.18);
        }

        .alert-box {
            margin-bottom: 22px;
            padding: 13px 15px;
            border-radius: 9px;
            background: #fff4f3;
            border: 1px solid #f1d0cd;
            color: #b42318;
            font-size: 12px;
        }

        .alert-box p {
            margin: 4px 0;
        }

        @media (max-width: 650px) {

            .task-form-body {
                padding: 20px;
            }

            .task-form-header {
                padding: 20px;
            }

            .form-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .btn-cancel,
            .btn-save {
                width: 100%;
            }

        }

    </style>


    <link rel="stylesheet" href="<?= base_url('css/app-theme.css?v=20261005') ?>">

</head>

<body>

<div class="app-layout">

    <?= view('layout/sidebar') ?>

    <div class="main-area">

        <?= view('layout/topbar') ?>

        <main class="page-content">

            <section class="page-heading">

                <span class="eyebrow">
                    TASK MANAGEMENT
                </span>

                <h1>
                    Add New Task
                </h1>

                <p>
                    Create a task and schedule when it needs to be completed.
                </p>

            </section>


            <section class="task-form-card">


                <!-- FORM HEADER -->

                <div class="task-form-header">

                    <h2>
                        Task Details
                    </h2>

                    <p>
                        Enter the information below to add a new task.
                    </p>

                </div>


                <!-- FORM BODY -->

                <div class="task-form-body">


                    <!-- ERRORS -->

                    <?php if ($errors = session()->getFlashdata('errors')): ?>

                        <div class="alert-box">

                            <?php foreach ($errors as $error): ?>

                                <p>
                                    <?= esc($error) ?>
                                </p>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>


                    <form
                        action="<?= base_url('tasks/create') ?>"
                        method="post"
                        id="taskForm"
                    >

                        <?= csrf_field() ?>


                        <!-- TITLE -->

                        <div class="form-group">

                            <label
                                for="title"
                                class="form-label"
                            >
                                Task Title
                                <span class="form-required">*</span>
                            </label>

                            <input
                                type="text"
                                id="title"
                                name="title"
                                class="form-input"
                                value="<?= old('title') ?>"
                                placeholder="e.g. Review project requirements"
                                maxlength="255"
                                required
                            >

                            <p class="form-hint">
                                Give your task a short and clear title.
                            </p>

                        </div>


                        <!-- DATE -->

                        <div class="form-group">

                            <label
                                for="task_date"
                                class="form-label"
                            >
                                Scheduled Date
                                <span class="form-required">*</span>
                            </label>

                            <input
                                type="date"
                                id="task_date"
                                name="task_date"
                                class="form-input"
                                value="<?= old('task_date', date('Y-m-d')) ?>"
                                required
                            >

                            <p class="form-hint">
                                Select the date when this task should be completed.
                            </p>

                        </div>


                        <!-- STATUS -->

                        <div class="form-group">

                            <label
                                for="status"
                                class="form-label"
                            >
                                Status
                                <span class="form-required">*</span>
                            </label>

                            <select
                                id="status"
                                name="status"
                                class="form-select"
                                required
                            >

                                <option
                                    value="pending"
                                    <?= old('status', 'pending') === 'pending' ? 'selected' : '' ?>
                                >
                                    Pending
                                </option>

                                <option
                                    value="completed"
                                    <?= old('status') === 'completed' ? 'selected' : '' ?>
                                >
                                    Completed
                                </option>

                            </select>

                            <p class="form-hint">
                                New tasks are normally created as Pending.
                            </p>

                        </div>


                        <!-- LIVE PREVIEW -->

                        <div class="task-preview">

                            <div class="preview-label">
                                Live Preview
                            </div>

                            <div class="preview-task">

                                <div class="preview-icon" id="previewIcon">
                                    ○
                                </div>

                                <div class="preview-content">

                                    <div
                                        class="preview-title"
                                        id="previewTitle"
                                    >
                                        Your task title
                                    </div>

                                    <div
                                        class="preview-date"
                                        id="previewDate"
                                    >
                                        <?= date('M d, Y') ?>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- ACTIONS -->

                        <div class="form-actions">

                            <a
                                href="<?= base_url('tasks') ?>"
                                class="btn-cancel"
                            >
                                Cancel
                            </a>

                            <button
                                type="submit"
                                class="btn-save"
                            >
                                ✓ Save Task
                            </button>

                        </div>


                    </form>


                </div>

            </section>

        </main>

    </div>

</div>


<script>

    const titleInput = document.getElementById('title');
    const dateInput = document.getElementById('task_date');
    const statusInput = document.getElementById('status');

    const previewTitle = document.getElementById('previewTitle');
    const previewDate = document.getElementById('previewDate');
    const previewIcon = document.getElementById('previewIcon');


    function updatePreview() {

        if (titleInput.value.trim() !== '') {

            previewTitle.textContent =
                titleInput.value.trim();

        } else {

            previewTitle.textContent =
                'Your task title';

        }


        if (dateInput.value !== '') {

            const date = new Date(
                dateInput.value + 'T00:00:00'
            );

            previewDate.textContent =
                date.toLocaleDateString(
                    'en-US',
                    {
                        month: 'short',
                        day: '2-digit',
                        year: 'numeric'
                    }
                );

        } else {

            previewDate.textContent =
                'Select a date';

        }


        if (statusInput.value === 'completed') {

            previewIcon.textContent = '✓';

            previewIcon.style.background =
                '#e8f5ef';

            previewIcon.style.color =
                '#247a59';

        } else {

            previewIcon.textContent = '○';

            previewIcon.style.background =
                '#eaf5f6';

            previewIcon.style.color =
                '#205968';

        }

    }


    titleInput.addEventListener(
        'input',
        updatePreview
    );

    dateInput.addEventListener(
        'change',
        updatePreview
    );

    statusInput.addEventListener(
        'change',
        updatePreview
    );


    updatePreview();

</script>

</body>

</html>