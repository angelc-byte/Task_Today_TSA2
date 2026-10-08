<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Add New Task | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        .task-form-card {
            background: #ffffff;

            border: 1px solid #e1e8ea;

            border-radius: 16px;

            box-shadow:
                0 8px 25px rgba(32, 89, 104, .06);

            overflow: hidden;
        }


        .task-form-header {
            padding: 24px 30px;

            border-bottom: 1px solid #edf1f2;

            display: flex;
            align-items: center;

            gap: 14px;
        }


        .task-form-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 11px;

            background: #eaf5f6;

            color: #205968;

            font-size: 20px;
            font-weight: 700;
        }


        .task-form-header h2 {
            margin: 0;

            color: #24363d;

            font-size: 17px;
        }


        .task-form-header p {
            margin: 4px 0 0;

            color: #8a979c;

            font-size: 11px;
        }


        .task-form-body {
            padding: 30px;
        }


        .form-group {
            margin-bottom: 22px;
        }


        .form-label {
            display: block;

            margin-bottom: 8px;

            color: #35454b;

            font-size: 12px;
            font-weight: 700;
        }


        .required {
            color: #d85c5c;
        }


        .form-control {
            width: 100%;

            box-sizing: border-box;

            padding: 12px 14px;

            border: 1px solid #dce5e7;

            border-radius: 9px;

            background: #ffffff;

            color: #35454b;

            font-family: inherit;

            font-size: 12px;

            outline: none;

            transition:
                border-color .2s ease,
                box-shadow .2s ease;
        }


        .form-control:focus {
            border-color: #3b7c8b;

            box-shadow:
                0 0 0 3px rgba(59, 124, 139, .10);
        }


        textarea.form-control {
            min-height: 120px;

            resize: vertical;

            line-height: 1.6;
        }


        .form-help {
            margin-top: 6px;

            color: #8a979c;

            font-size: 10px;
        }


        .form-row {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 18px;
        }


        .task-status-preview {
            display: flex;
            align-items: center;

            gap: 8px;

            margin-top: 8px;

            color: #718087;

            font-size: 10px;
        }


        .status-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: #d89b45;
        }


        .form-actions {
            display: flex;
            justify-content: flex-end;

            gap: 10px;

            margin-top: 30px;

            padding-top: 22px;

            border-top: 1px solid #edf1f2;
        }


        .btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 6px;

            padding: 10px 17px;

            border-radius: 8px;

            font-family: inherit;

            font-size: 11px;

            font-weight: 700;

            text-decoration: none;

            cursor: pointer;

            transition:
                all .2s ease;
        }


        .btn-cancel {
            background: #ffffff;

            color: #5f7076;

            border: 1px solid #dce5e7;
        }


        .btn-cancel:hover {
            background: #f7f9fa;

            border-color: #cbd8db;
        }


        .btn-save {
            background: #205968;

            color: #ffffff;

            border: 1px solid #205968;

            box-shadow:
                0 4px 10px rgba(32, 89, 104, .12);
        }


        .btn-save:hover {
            background: #174b58;

            transform: translateY(-1px);

            box-shadow:
                0 6px 14px rgba(32, 89, 104, .18);
        }


        .alert {
            margin-bottom: 20px;

            padding: 12px 15px;

            border-radius: 9px;

            font-size: 11px;
        }


        .alert-error {
            background: #fff1f1;

            border: 1px solid #f0cccc;

            color: #a33a3a;
        }


        .alert-error p {
            margin: 4px 0;
        }


        @media (max-width: 700px) {

            .form-row {
                grid-template-columns: 1fr;
            }


            .task-form-body {
                padding: 20px;
            }


            .task-form-header {
                padding: 20px;
            }


            .form-actions {
                flex-direction: column-reverse;
            }


            .btn {
                width: 100%;
            }

        }

    </style>


    <link rel="stylesheet" href="<?= base_url('css/app-theme.css?v=20261005') ?>">

</head>


<body>

<div class="app-layout">


    <!-- SIDEBAR -->

    <?= view('layout/sidebar') ?>


    <!-- MAIN AREA -->

    <div class="main-area">


        <!-- TOP BAR -->

        <?= view('layout/topbar') ?>


        <!-- PAGE CONTENT -->

        <main class="page-content">


            <!-- PAGE HEADING -->

            <section class="page-heading">

                <span class="eyebrow">
                    TASK MANAGEMENT
                </span>

                <h1>
                    Add New Task
                </h1>

                <p>
                    Create a task and schedule it for a specific date.
                </p>

            </section>


            <!-- FORM CARD -->

            <section class="task-form-card">


                <!-- FORM HEADER -->

                <div class="task-form-header">

                    <div class="task-form-icon">
                        ✓
                    </div>

                    <div>

                        <h2>
                            Task Information
                        </h2>

                        <p>
                            Enter the details of the task below.
                        </p>

                    </div>

                </div>


                <!-- FORM BODY -->

                <div class="task-form-body">


                    <!-- ERRORS -->

                    <?php if (
                        $errors = session()->getFlashdata('errors')
                    ): ?>

                        <div class="alert alert-error">

                            <?php foreach ($errors as $error): ?>

                                <p>
                                    <?= esc($error) ?>
                                </p>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>


                    <?php if (
                        $error = session()->getFlashdata('error')
                    ): ?>

                        <div class="alert alert-error">

                            <?= esc($error) ?>

                        </div>

                    <?php endif; ?>


                    <!-- FORM -->

                    <form
                        action="<?= base_url('tasks/create') ?>"
                        method="post"
                    >

                        <?= csrf_field() ?>


                        <!-- TITLE -->

                        <div class="form-group">

                            <label
                                for="title"
                                class="form-label"
                            >

                                Task Title
                                <span class="required">*</span>

                            </label>


                            <input
                                type="text"
                                id="title"
                                name="title"
                                class="form-control"
                                value="<?= old('title') ?>"
                                placeholder="e.g. Check daily emails"
                                maxlength="255"
                                required
                            >


                            <div class="form-help">

                                Enter a short and clear title for the task.

                            </div>

                        </div>


                        <!-- DESCRIPTION -->

                        <div class="form-group">

                            <label
                                for="description"
                                class="form-label"
                            >

                                Description

                            </label>


                            <textarea
                                id="description"
                                name="description"
                                class="form-control"
                                placeholder="Add additional details about this task..."
                            ><?= old('description') ?></textarea>


                            <div class="form-help">

                                Optional. Add any notes or instructions related to the task.

                            </div>

                        </div>


                        <!-- DATE + STATUS -->

                        <div class="form-row">


                            <!-- TASK DATE -->

                            <div class="form-group">

                                <label
                                    for="task_date"
                                    class="form-label"
                                >

                                    Task Date
                                    <span class="required">*</span>

                                </label>


                                <input
                                    type="date"
                                    id="task_date"
                                    name="task_date"
                                    class="form-control"
                                    value="<?= old('task_date', date('Y-m-d')) ?>"
                                    required
                                >


                                <div class="form-help">

                                    Select the date when this task should appear.

                                </div>

                            </div>


                            <!-- STATUS -->

                            <div class="form-group">

                                <label
                                    for="status"
                                    class="form-label"
                                >

                                    Status

                                </label>


                                <select
                                    id="status"
                                    name="status"
                                    class="form-control"
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


                                <div class="task-status-preview">

                                    <span class="status-dot"></span>

                                    <span id="statusText">
                                        Task will be saved as pending.

                                    </span>

                                </div>

                            </div>


                        </div>


                        <!-- ACTIONS -->

                        <div class="form-actions">


                            <a
                                href="<?= base_url('tasks') ?>"
                                class="btn btn-cancel"
                            >

                                ← Cancel

                            </a>


                            <button
                                type="submit"
                                class="btn btn-save"
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

    const statusSelect =
        document.getElementById('status');

    const statusText =
        document.getElementById('statusText');

    const statusDot =
        document.querySelector('.status-dot');


    function updateStatusPreview() {

        if (statusSelect.value === 'completed') {

            statusText.textContent =
                'Task will be saved as completed.';

            statusDot.style.background =
                '#247a59';

        } else {

            statusText.textContent =
                'Task will be saved as pending.';

            statusDot.style.background =
                '#d89b45';

        }

    }


    statusSelect.addEventListener(
        'change',
        updateStatusPreview
    );


    updateStatusPreview();

</script>


</body>

</html>