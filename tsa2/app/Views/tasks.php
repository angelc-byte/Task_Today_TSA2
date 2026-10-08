<?php

$groupedTasks = [];

$totalTasks = count($tasks);
$completedTasks = 0;
$pendingTasks = 0;

foreach ($tasks as $task) {

    $date = $task['task_date'];

    if (!isset($groupedTasks[$date])) {
        $groupedTasks[$date] = [];
    }

    $groupedTasks[$date][] = $task;

    if ($task['status'] === 'completed') {
        $completedTasks++;
    } else {
        $pendingTasks++;
    }
}

$progress = $totalTasks > 0
    ? round(($completedTasks / $totalTasks) * 100)
    : 0;

$today = date('Y-m-d');

if ($totalTasks === 0) {
    $motivation = 'Your task board is ready. Add your first task and get started.';
} elseif ($progress === 100) {
    $motivation = 'Amazing! Everything is completed. Great work today!';
} elseif ($progress >= 75) {
    $motivation = 'Almost there! Just a little more and you are done.';
} elseif ($progress >= 50) {
    $motivation = 'Great momentum! You are already halfway through your tasks.';
} elseif ($progress > 0) {
    $motivation = 'Good start! Keep going and turn that progress into a finished list.';
} else {
    $motivation = 'Ready to get started? Complete one task and build your momentum.';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>All Tasks | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        /* =========================================================
           TASK CENTER
           ========================================================= */

        :root {

            --task-primary: #205968;
            --task-primary-dark: #174957;
            --task-primary-soft: #eaf5f6;

            --task-green: #247a59;
            --task-green-soft: #e8f5ef;

            --task-orange: #b87800;
            --task-orange-soft: #fff4dc;

            --task-bg: #f4f7f8;
            --task-white: #ffffff;

            --task-text: #263238;
            --task-muted: #718087;

            --task-border: #e3eaec;

            --task-shadow:
                0 8px 28px rgba(24, 63, 72, 0.07);

        }


        /* =========================================================
           PAGE BACKGROUND
           ========================================================= */

        .tasks-page {

            position: relative;

            max-width: 1180px;

            margin: 0 auto;

            padding: 8px 0 50px;

            animation: tasksPageIn .45s ease;

        }


        .tasks-page::before {

            content: "";

            position: fixed;

            width: 360px;
            height: 360px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(32, 89, 104, .10) 0%,
                    rgba(32, 89, 104, 0) 70%
                );

            top: 100px;
            right: 30px;

            pointer-events: none;

            z-index: -1;

            animation: floatBubble 8s ease-in-out infinite;

        }


        .tasks-page::after {

            content: "";

            position: fixed;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(36, 122, 89, .07) 0%,
                    rgba(36, 122, 89, 0) 70%
                );

            bottom: 40px;
            left: 260px;

            pointer-events: none;

            z-index: -1;

            animation: floatBubbleReverse 10s ease-in-out infinite;

        }


        @keyframes tasksPageIn {

            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        @keyframes floatBubble {

            0%,
            100% {
                transform: translate3d(0, 0, 0);
            }

            50% {
                transform: translate3d(-20px, 18px, 0);
            }

        }


        @keyframes floatBubbleReverse {

            0%,
            100% {
                transform: translate3d(0, 0, 0);
            }

            50% {
                transform: translate3d(18px, -15px, 0);
            }

        }


        /* =========================================================
           PAGE HEADER
           ========================================================= */

        .tasks-header {

            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 25px;

            margin-bottom: 22px;

        }


        .tasks-eyebrow {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            margin-bottom: 6px;

            color: var(--task-primary);

            font-size: 10px;

            font-weight: 800;

            letter-spacing: 1.2px;

        }


        .tasks-eyebrow::before {

            content: "";

            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #35a66f;

            box-shadow: 0 0 0 4px rgba(53, 166, 111, .10);

        }


        .tasks-header h1 {

            margin: 0;

            color: var(--task-text);

            font-size: 31px;

            letter-spacing: -.7px;

        }


        .tasks-header p {

            margin: 7px 0 0;

            color: var(--task-muted);

            font-size: 14px;

        }


        /* =========================================================
           FOCUS BUTTON
           ========================================================= */

        .focus-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 11px 15px;

            border: 1px solid var(--task-border);

            border-radius: 9px;

            background: white;

            color: var(--task-primary);

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            box-shadow: 0 4px 12px rgba(24, 63, 72, .05);

            transition: .2s ease;

        }


        .focus-button:hover {

            transform: translateY(-2px);

            border-color: #bcd3d8;

            box-shadow: 0 7px 16px rgba(24, 63, 72, .10);

        }


        .focus-button.active {

            background: var(--task-primary);

            color: white;

            border-color: var(--task-primary);

        }


        /* =========================================================
           PRODUCTIVITY PANEL
           ========================================================= */

        .productivity-panel {

            display: grid;

            grid-template-columns: 1.4fr .8fr;

            gap: 16px;

            margin-bottom: 22px;

        }


        .progress-card {

            position: relative;

            overflow: hidden;

            padding: 20px 22px;

            border-radius: 15px;

            background:
                linear-gradient(
                    135deg,
                    #ffffff 0%,
                    #f7fbfb 100%
                );

            border: 1px solid var(--task-border);

            box-shadow: var(--task-shadow);

        }


        .progress-card::after {

            content: "";

            position: absolute;

            width: 130px;
            height: 130px;

            border-radius: 50%;

            background: var(--task-primary-soft);

            right: -35px;
            bottom: -55px;

            opacity: .8;

        }


        .progress-top {

            position: relative;

            z-index: 2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

        }


        .progress-title {

            color: var(--task-muted);

            font-size: 10px;

            font-weight: 800;

            letter-spacing: 1px;

            text-transform: uppercase;

        }


        .progress-percent {

            color: var(--task-primary);

            font-size: 25px;

            font-weight: 800;

        }


        .progress-message {

            position: relative;

            z-index: 2;

            margin: 5px 0 15px;

            color: var(--task-text);

            font-size: 13px;

            font-weight: 600;

        }


        .progress-track {

            position: relative;

            z-index: 2;

            height: 8px;

            overflow: hidden;

            border-radius: 20px;

            background: #e8edef;

        }


        .progress-fill {

            height: 100%;

            width: <?= $progress ?>%;

            min-width: <?= $progress > 0 ? '8px' : '0' ?>;

            border-radius: 20px;

            background:
                linear-gradient(
                    90deg,
                    #205968,
                    #3b8b83,
                    #247a59
                );

            transition: width 1s ease;

        }


        .progress-footer {

            position: relative;

            z-index: 2;

            display: flex;

            justify-content: space-between;

            margin-top: 10px;

            color: var(--task-muted);

            font-size: 11px;

        }


        /* =========================================================
           QUICK STATS
           ========================================================= */

        .task-mini-stats {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 12px;

        }


        .mini-stat {

            display: flex;

            flex-direction: column;

            justify-content: center;

            padding: 17px;

            border-radius: 14px;

            background: white;

            border: 1px solid var(--task-border);

            box-shadow: var(--task-shadow);

            transition: .2s ease;

        }


        .mini-stat:hover {

            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(24, 63, 72, .10);

        }


        .mini-stat-icon {

            width: 31px;
            height: 31px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 8px;

            margin-bottom: 9px;

            background: var(--task-primary-soft);

            color: var(--task-primary);

            font-size: 13px;

        }


        .mini-stat.completed-stat .mini-stat-icon {

            background: var(--task-green-soft);

            color: var(--task-green);

        }


        .mini-stat.pending-stat .mini-stat-icon {

            background: var(--task-orange-soft);

            color: var(--task-orange);

        }


        .mini-stat strong {

            color: var(--task-text);

            font-size: 21px;

        }


        .mini-stat span {

            margin-top: 2px;

            color: var(--task-muted);

            font-size: 10px;

        }


        /* =========================================================
           FILTER BAR
           ========================================================= */

        .task-tools {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 12px;

            margin-bottom: 17px;

        }


        .task-search {

            flex: 1;

            position: relative;

        }


        .task-search-icon {

            position: absolute;

            left: 14px;
            top: 50%;

            transform: translateY(-50%);

            color: #91a0a6;

            font-size: 13px;

        }


        .task-search input {

            width: 100%;

            box-sizing: border-box;

            padding: 12px 14px 12px 38px;

            border: 1px solid var(--task-border);

            border-radius: 9px;

            outline: none;

            background: white;

            color: var(--task-text);

            font-size: 12px;

            transition: .2s ease;

        }


        .task-search input:focus {

            border-color: #9dc2ca;

            box-shadow:
                0 0 0 3px rgba(32, 89, 104, .08);

        }


        .filter-buttons {

            display: flex;

            gap: 6px;

        }


        .task-filter {

            padding: 10px 13px;

            border: 1px solid var(--task-border);

            border-radius: 8px;

            background: white;

            color: var(--task-muted);

            font-size: 11px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;

        }


        .task-filter:hover {

            color: var(--task-primary);

            border-color: #bcd3d8;

        }


        .task-filter.active {

            background: var(--task-primary);

            color: white;

            border-color: var(--task-primary);

        }


        /* =========================================================
           TASK BOARD
           ========================================================= */

        .task-board {

            display: flex;

            flex-direction: column;

            gap: 20px;

        }


        .task-group {

            background: #ffffff;

            border: 1px solid var(--task-border);

            border-radius: 15px;

            overflow: hidden;

            box-shadow: var(--task-shadow);

            animation: groupIn .5s ease both;

            transition:
                transform .2s ease,
                box-shadow .2s ease;

        }


        .task-group:hover {

            box-shadow:
                0 12px 32px rgba(24, 63, 72, .09);

        }


        @keyframes groupIn {

            from {

                opacity: 0;

                transform: translateY(12px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }


        .task-group.today-group {

            border-color: #b9d6dc;

            box-shadow:
                0 8px 30px rgba(32, 89, 104, .10);

        }


        /* =========================================================
           DATE HEADER
           ========================================================= */

        .task-group-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 16px 20px;

            background:
                linear-gradient(
                    90deg,
                    #f8fafb,
                    #ffffff
                );

            border-bottom: 1px solid var(--task-border);

            cursor: pointer;

            transition: background .2s ease;

        }


        .task-group-header:hover {

            background: #f4f9fa;

        }


        .task-date-title {

            display: flex;

            align-items: center;

            gap: 11px;

        }


        .date-icon {

            width: 34px;
            height: 34px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 9px;

            background: var(--task-primary-soft);

            color: var(--task-primary);

            font-size: 14px;

            transition: .2s ease;

        }


        .today-group .date-icon {

            background: var(--task-primary);

            color: white;

            box-shadow:
                0 4px 10px rgba(32, 89, 104, .18);

        }


        .task-date-title h3 {

            margin: 0;

            color: var(--task-text);

            font-size: 14px;

        }


        .task-date-title span {

            display: block;

            margin-top: 3px;

            color: var(--task-muted);

            font-size: 10px;

        }


        .today-label {

            display: inline-flex;

            align-items: center;

            margin-left: 7px;

            padding: 3px 7px;

            border-radius: 20px;

            background: var(--task-green-soft);

            color: var(--task-green);

            font-size: 8px;

            font-weight: 800;

            letter-spacing: .4px;

            vertical-align: middle;

        }


        .task-header-right {

            display: flex;

            align-items: center;

            gap: 9px;

        }


        .task-count {

            padding: 5px 10px;

            border-radius: 20px;

            background: var(--task-primary-soft);

            color: var(--task-primary);

            font-size: 10px;

            font-weight: 700;

        }


        .collapse-icon {

            width: 25px;
            height: 25px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 7px;

            background: #f0f4f5;

            color: var(--task-muted);

            font-size: 12px;

            transition: transform .25s ease;

        }


        .task-group.collapsed .collapse-icon {

            transform: rotate(-90deg);

        }


        /* =========================================================
           TASK ROW
           ========================================================= */

        .board-task {

            position: relative;

            display: grid;

            grid-template-columns: minmax(0, 1fr) 150px 130px;

            align-items: center;

            min-height: 64px;

            padding: 0 20px;

            border-bottom: 1px solid #edf1f2;

            transition:
                background .2s ease,
                transform .2s ease,
                opacity .2s ease;

        }


        .board-task:last-child {

            border-bottom: 0;

        }


        .board-task:hover {

            background: #f9fbfb;

        }


        .board-task::before {

            content: "";

            position: absolute;

            left: 0;
            top: 0;
            bottom: 0;

            width: 3px;

            background: transparent;

            transition: .2s ease;

        }


        .board-task:hover::before {

            background: var(--task-primary);

        }


        .board-task.is-completed {

            background:
                linear-gradient(
                    90deg,
                    rgba(232, 245, 239, .45),
                    transparent
                );

        }


        .board-task.is-completed::before {

            background: var(--task-green);

        }


        .board-task.is-hidden {

            display: none;

        }


        .board-task-name {

            display: flex;

            align-items: center;

            gap: 12px;

            min-width: 0;

            color: #35454b;

            font-size: 13px;

            font-weight: 600;

        }


        .board-task-name span {

            overflow: hidden;

            text-overflow: ellipsis;

            white-space: nowrap;

        }


        .task-check {

            flex-shrink: 0;

            width: 27px;
            height: 27px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 8px;

            background: #f0f4f5;

            color: #718087;

            font-size: 12px;

            font-weight: 800;

            transition:
                transform .2s ease,
                background .2s ease;

        }


        .board-task:hover .task-check {

            transform: scale(1.08);

        }


        .task-check.completed {

            background: var(--task-green-soft);

            color: var(--task-green);

            box-shadow:
                0 0 0 4px rgba(36, 122, 89, .06);

        }


        .board-task.is-completed .board-task-name span {

            color: #728078;

            text-decoration: line-through;

            text-decoration-color: #a8b8b0;

        }


        .board-task-date {

            color: var(--task-muted);

            font-size: 11px;

        }


        .board-task-status {

            text-align: right;

        }


        .status {

            display: inline-flex;

            align-items: center;

            gap: 5px;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 9px;

            font-weight: 800;

        }


        .status::before {

            content: "";

            width: 5px;
            height: 5px;

            border-radius: 50%;

        }


        .status-completed {

            background: var(--task-green-soft);

            color: var(--task-green);

        }


        .status-completed::before {

            background: var(--task-green);

        }


        .status-pending {

            background: var(--task-orange-soft);

            color: var(--task-orange);

        }


        .status-pending::before {

            background: var(--task-orange);

        }


        /* =========================================================
           EMPTY SEARCH STATE
           ========================================================= */

        .task-empty {

            display: none;

            padding: 45px 25px;

            text-align: center;

            background: white;

            border: 1px solid var(--task-border);

            border-radius: 15px;

            box-shadow: var(--task-shadow);

        }


        .task-empty.show {

            display: block;

            animation: tasksPageIn .3s ease;

        }


        .empty-icon {

            width: 52px;
            height: 52px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 13px;

            border-radius: 15px;

            background: var(--task-primary-soft);

            color: var(--task-primary);

            font-size: 22px;

        }


        .task-empty h3 {

            margin: 0 0 5px;

            color: var(--task-text);

            font-size: 15px;

        }


        .task-empty p {

            margin: 0;

            color: var(--task-muted);

            font-size: 12px;

        }


        /* =========================================================
           FOCUS MODE
           ========================================================= */

        body.focus-mode .board-task.is-completed {

            display: none;

        }


        body.focus-mode .task-group {

            box-shadow:
                0 12px 35px rgba(32, 89, 104, .12);

        }


        body.focus-mode .task-group:has(.board-task:not(.is-completed)) {

            border-color: #b7d3d9;

        }


        /* =========================================================
           MOBILE
           ========================================================= */

        @media (max-width: 850px) {

            .tasks-page {

                padding: 5px 0 35px;

            }


            .tasks-header {

                align-items: flex-start;

            }


            .productivity-panel {

                grid-template-columns: 1fr;

            }


            .task-tools {

                flex-direction: column;

                align-items: stretch;

            }


            .filter-buttons {

                width: 100%;

            }


            .task-filter {

                flex: 1;

            }


            .board-task {

                grid-template-columns: 1fr;

                gap: 8px;

                padding: 14px 18px;

            }


            .board-task-date {

                padding-left: 39px;

            }


            .board-task-status {

                padding-left: 39px;

                text-align: left;

            }

        }


        @media (max-width: 600px) {

            .tasks-header {

                flex-direction: column;

            }


            .focus-button {

                width: 100%;

            }


            .task-mini-stats {

                grid-template-columns: 1fr 1fr;

            }


            .task-group-header {

                padding: 14px;

            }


            .board-task {

                padding: 14px;

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


            <div class="tasks-page">


                <!-- =================================================
                     HEADER
                     ================================================= -->

                <section class="tasks-header">

                    <div>

                        <span class="tasks-eyebrow">
                            TASK MANAGEMENT
                        </span>

                        <h1>
                            All Tasks
                        </h1>

                        <p>
                            View and organize all tasks by their scheduled date.
                        </p>

                    </div>


                    <a
                        href="<?= base_url('tasks/new') ?>"
                        class="add-new-task-button"
                    >
                        +
                        Add New Task
                    </a>

                </section>


                <!-- =================================================
                     PRODUCTIVITY PANEL
                     ================================================= -->

                <section class="productivity-panel">


                    <!-- PROGRESS -->

                    <div class="progress-card">

                        <div class="progress-top">

                            <div>

                                <div class="progress-title">
                                    Today's Momentum
                                </div>

                                <div class="progress-message">
                                    <?= esc($motivation) ?>
                                </div>

                            </div>

                            <div class="progress-percent">
                                <?= $progress ?>%
                            </div>

                        </div>


                        <div class="progress-track">

                            <div
                                class="progress-fill"
                                id="progressFill"
                            ></div>

                        </div>


                        <div class="progress-footer">

                            <span>
                                <?= $completedTasks ?>
                                completed
                            </span>

                            <span>
                                <?= $pendingTasks ?>
                                remaining
                            </span>

                        </div>

                    </div>


                    <!-- MINI STATS -->

                    <div class="task-mini-stats">


                        <div class="mini-stat completed-stat">

                            <div class="mini-stat-icon">
                                ✓
                            </div>

                            <strong>
                                <?= $completedTasks ?>
                            </strong>

                            <span>
                                Completed
                            </span>

                        </div>


                        <div class="mini-stat pending-stat">

                            <div class="mini-stat-icon">
                                !
                            </div>

                            <strong>
                                <?= $pendingTasks ?>
                            </strong>

                            <span>
                                Still to do
                            </span>

                        </div>


                    </div>

                </section>


                <!-- =================================================
                     SEARCH + FILTER
                     ================================================= -->

                <section class="task-tools">


                    <div class="task-search">

                        <span class="task-search-icon">
                            ⌕
                        </span>

                        <input
                            type="text"
                            id="taskSearch"
                            placeholder="Search tasks..."
                            autocomplete="off"
                        >

                    </div>


                    <div class="filter-buttons">

                        <button
                            type="button"
                            class="task-filter active"
                            data-filter="all"
                        >
                            All
                        </button>

                        <button
                            type="button"
                            class="task-filter"
                            data-filter="pending"
                        >
                            Pending
                        </button>

                        <button
                            type="button"
                            class="task-filter"
                            data-filter="completed"
                        >
                            Completed
                        </button>

                    </div>

                </section>


                <!-- =================================================
                     TASK BOARD
                     ================================================= -->

                <?php if (!empty($groupedTasks)): ?>

                    <div
                        class="task-board"
                        id="taskBoard"
                    >


                        <?php foreach ($groupedTasks as $date => $dateTasks): ?>

                            <?php

                            $dateCompleted = 0;

                            foreach ($dateTasks as $dateTask) {

                                if ($dateTask['status'] === 'completed') {
                                    $dateCompleted++;
                                }

                            }

                            ?>

                            <section
                                class="task-group <?= $date === $today ? 'today-group' : '' ?>"
                                data-group="<?= esc($date) ?>"
                            >


                                <!-- DATE HEADER -->

                                <div
                                    class="task-group-header"
                                    onclick="toggleTaskGroup(this)"
                                >

                                    <div class="task-date-title">

                                        <div class="date-icon">
                                            ▣
                                        </div>

                                        <div>

                                            <h3>

                                                <?= date('F d, Y', strtotime($date)) ?>

                                                <?php if ($date === $today): ?>

                                                    <span class="today-label">
                                                        TODAY
                                                    </span>

                                                <?php endif; ?>

                                            </h3>

                                            <span>
                                                <?= date('l', strtotime($date)) ?>
                                            </span>

                                        </div>

                                    </div>


                                    <div class="task-header-right">

                                        <span class="task-count">

                                            <?= count($dateTasks) ?>

                                            <?= count($dateTasks) === 1
                                                ? 'task'
                                                : 'tasks'
                                            ?>

                                        </span>


                                        <span class="collapse-icon">
                                           ⌄
                                        </span>

                                    </div>

                                </div>


                                <!-- TASKS -->

                                <div class="task-group-body">


                                    <?php foreach ($dateTasks as $task): ?>

                                        <?php
                                        $isCompleted =
                                            $task['status'] === 'completed';
                                        ?>

                                        <div
                                            class="board-task <?= $isCompleted ? 'is-completed' : '' ?>"
                                            data-status="<?= $isCompleted ? 'completed' : 'pending' ?>"
                                            data-title="<?= esc(strtolower($task['title'])) ?>"
                                        >


                                            <!-- TASK NAME -->

                                            <div class="board-task-name">

                                                <div
                                                    class="task-check <?= $isCompleted ? 'completed' : '' ?>"
                                                >

                                                    <?= $isCompleted
                                                        ? '✓'
                                                        : '○'
                                                    ?>

                                                </div>

                                                <span>
                                                    <?= esc($task['title']) ?>
                                                </span>

                                            </div>


                                            <!-- DATE -->

                                            <div class="board-task-date">

                                                <?= date(
                                                    'M d, Y',
                                                    strtotime($task['task_date'])
                                                ) ?>

                                            </div>


                                            <!-- STATUS -->

                                            <div class="board-task-status">

                                                <?php if ($isCompleted): ?>

                                                    <span class="status status-completed">
                                                        Completed
                                                    </span>

                                                <?php else: ?>

                                                    <span class="status status-pending">
                                                        Pending
                                                    </span>

                                                <?php endif; ?>

                                            </div>


                                        </div>

                                    <?php endforeach; ?>


                                </div>


                            </section>

                        <?php endforeach; ?>


                    </div>


                    <!-- EMPTY SEARCH -->

                    <div
                        class="task-empty"
                        id="taskEmpty"
                    >

                        <div class="empty-icon">
                            ⌕
                        </div>

                        <h3>
                            No matching tasks
                        </h3>

                        <p>
                            Try another search term or change the filter.
                        </p>

                    </div>


                <?php else: ?>


                    <section class="task-empty show">

                        <div class="empty-icon">
                            ✓
                        </div>

                        <h3>
                            No tasks yet
                        </h3>

                        <p>
                            Your task board is ready for something productive.
                        </p>

                    </section>


                <?php endif; ?>


            </div>

        </main>

    </div>

</div>


<script>

    /* =========================================================
       TASK SEARCH + FILTER
       ========================================================= */

    const searchInput =
        document.getElementById('taskSearch');

    const filterButtons =
        document.querySelectorAll('.task-filter');

    const taskRows =
        document.querySelectorAll('.board-task');

    const emptyState =
        document.getElementById('taskEmpty');


    let activeFilter = 'all';


    function filterTasks() {

        const searchValue =
            searchInput
                ? searchInput.value
                    .trim()
                    .toLowerCase()
                : '';


        let visibleCount = 0;


        taskRows.forEach(function(row) {

            const title =
                row.dataset.title || '';

            const status =
                row.dataset.status || 'pending';


            const matchesSearch =
                title.includes(searchValue);


            const matchesFilter =
                activeFilter === 'all'
                || status === activeFilter;


            if (matchesSearch && matchesFilter) {

                row.classList.remove('is-hidden');

                visibleCount++;

            } else {

                row.classList.add('is-hidden');

            }

        });


        if (emptyState) {

            if (visibleCount === 0) {

                emptyState.classList.add('show');

            } else {

                emptyState.classList.remove('show');

            }

        }

    }


    if (searchInput) {

        searchInput.addEventListener(
            'input',
            filterTasks
        );

    }


    filterButtons.forEach(function(button) {

        button.addEventListener(
            'click',
            function() {

                filterButtons.forEach(function(btn) {

                    btn.classList.remove('active');

                });


                this.classList.add('active');


                activeFilter =
                    this.dataset.filter;


                filterTasks();

            }
        );

    });


    /* =========================================================
       COLLAPSE / EXPAND DATE GROUP
       ========================================================= */

    function toggleTaskGroup(header) {

        const group =
            header.closest('.task-group');

        if (!group) {
            return;
        }


        group.classList.toggle('collapsed');


        const body =
            group.querySelector('.task-group-body');


        if (group.classList.contains('collapsed')) {

            body.style.display = 'none';

        } else {

            body.style.display = '';

        }

    }


    /* =========================================================
       PROGRESS BAR ANIMATION
       ========================================================= */

    window.addEventListener(
        'load',
        function() {

            const progress =
                document.getElementById(
                    'progressFill'
                );


            if (progress) {

                const target =
                    <?= $progress ?>;

                progress.style.width = '0%';


                setTimeout(
                    function() {

                        progress.style.width =
                            target + '%';

                    },
                    250
                );

            }

        }
    );


    /* =========================================================
       TASK HOVER EFFECT
       ========================================================= */

    taskRows.forEach(function(row) {

        row.addEventListener(
            'mouseenter',
            function() {

                this.style.transform =
                    'translateX(3px)';

            }
        );


        row.addEventListener(
            'mouseleave',
            function() {

                this.style.transform =
                    'translateX(0)';

            }
        );

    });


    /* =========================================================
       TODAY GROUP OPEN BY DEFAULT
       ========================================================= */

    document.querySelectorAll(
        '.today-group'
    ).forEach(function(group) {

        group.classList.remove('collapsed');

    });

</script>

</body>

</html>