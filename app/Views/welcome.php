<?php

$totalTasks = count($tasks);

$completedTasks = 0;
$pendingTasks = 0;

foreach ($tasks as $task) {

    if ($task['status'] === 'completed') {
        $completedTasks++;
    } else {
        $pendingTasks++;
    }

}

$completionRate = $totalTasks > 0
    ? round(($completedTasks / $totalTasks) * 100)
    : 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        /* =====================================================
           MOVING DASHBOARD BACKGROUND
           ===================================================== */

        .dashboard-background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }


        /* =====================================================
           MOVING CIRCLES
           ===================================================== */

        .bg-orb {
            position: absolute;

            border: 1px solid rgba(59, 124, 139, .10);

            border-radius: 50%;

            background: rgba(255, 255, 255, .20);
        }


        .orb-one {
            width: 210px;
            height: 210px;

            top: 130px;
            left: 28%;

            animation:
                travelOne 20s ease-in-out infinite alternate;
        }


        .orb-two {
            width: 145px;
            height: 145px;

            top: 300px;
            right: 15%;

            animation:
                travelTwo 16s ease-in-out infinite alternate;
        }


        .orb-three {
            width: 270px;
            height: 270px;

            bottom: -80px;
            left: 35%;

            animation:
                travelThree 24s ease-in-out infinite alternate;
        }


        .orb-four {
            width: 95px;
            height: 95px;

            top: 180px;
            right: 35%;

            animation:
                travelFour 13s ease-in-out infinite alternate;
        }


        .orb-five {
            width: 125px;
            height: 125px;

            top: 90px;
            left: 12%;

            animation:
                travelFive 18s ease-in-out infinite alternate;
        }


        .orb-six {
            width: 75px;
            height: 75px;

            top: 460px;
            left: 8%;

            animation:
                travelSix 14s ease-in-out infinite alternate;
        }


        .orb-seven {
            width: 185px;
            height: 185px;

            top: 390px;
            right: -40px;

            animation:
                travelSeven 22s ease-in-out infinite alternate;
        }


        .orb-eight {
            width: 55px;
            height: 55px;

            top: 220px;
            left: 47%;

            animation:
                travelEight 11s ease-in-out infinite alternate;
        }


        .orb-nine {
            width: 100px;
            height: 100px;

            bottom: 50px;
            left: 22%;

            animation:
                travelNine 17s ease-in-out infinite alternate;
        }


        .orb-ten {
            width: 65px;
            height: 65px;

            bottom: 180px;
            right: 28%;

            animation:
                travelTen 12s ease-in-out infinite alternate;
        }


        .orb-eleven {
            width: 240px;
            height: 240px;

            top: -90px;
            right: 18%;

            animation:
                travelEleven 25s ease-in-out infinite alternate;
        }


        .orb-twelve {
            width: 45px;
            height: 45px;

            top: 570px;
            right: 40%;

            animation:
                travelTwelve 10s ease-in-out infinite alternate;
        }


        /* =====================================================
           CIRCLE MOVEMENT
           ===================================================== */

        @keyframes travelOne {

            0% {
                transform:
                    translate(-30px, 10px)
                    rotate(0deg);
            }

            50% {
                transform:
                    translate(80px, 15px)
                    rotate(16deg);
            }

            100% {
                transform:
                    translate(-20px, 30px)
                    rotate(32deg);
            }

        }


        @keyframes travelTwo {

            0% {
                transform:
                    translate(20px, -10px);
            }

            50% {
                transform:
                    translate(-85px, 25px);
            }

            100% {
                transform:
                    translate(-30px, -55px);
            }

        }


        @keyframes travelThree {

            0% {
                transform:
                    translate(-50px, 30px);
            }

            50% {
                transform:
                    translate(90px, 10px);
            }

            100% {
                transform:
                    translate(40px, -60px);
            }

        }


        @keyframes travelFour {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(-20px, 70px);
            }

            100% {
                transform:
                    translate(50px, 30px);
            }

        }


        @keyframes travelFive {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(70px, 55px);
            }

            100% {
                transform:
                    translate(20px, -30px);
            }

        }


        @keyframes travelSix {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(60px, -70px);
            }

            100% {
                transform:
                    translate(120px, -20px);
            }

        }


        @keyframes travelSeven {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(-90px, -50px);
            }

            100% {
                transform:
                    translate(-40px, 70px);
            }

        }


        @keyframes travelEight {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(70px, -45px);
            }

            100% {
                transform:
                    translate(-60px, 55px);
            }

        }


        @keyframes travelNine {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(80px, -60px);
            }

            100% {
                transform:
                    translate(140px, 15px);
            }

        }


        @keyframes travelTen {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(-70px, -50px);
            }

            100% {
                transform:
                    translate(-110px, 30px);
            }

        }


        @keyframes travelEleven {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(-80px, 70px);
            }

            100% {
                transform:
                    translate(50px, 110px);
            }

        }


        @keyframes travelTwelve {

            0% {
                transform:
                    translate(0, 0);
            }

            50% {
                transform:
                    translate(-80px, -45px);
            }

            100% {
                transform:
                    translate(60px, 35px);
            }

        }


        /* =====================================================
           MOVING DOTS
           ===================================================== */

        .bg-dot {
            position: absolute;

            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: rgba(59, 124, 139, .25);
        }


        .dot-one {
            top: 160px;
            left: 40%;

            animation:
                dotPathOne 9s linear infinite;
        }


        .dot-two {
            top: 350px;
            right: 25%;

            width: 5px;
            height: 5px;

            animation:
                dotPathTwo 11s linear infinite;
        }


        .dot-three {
            top: 480px;
            left: 24%;

            width: 6px;
            height: 6px;

            animation:
                dotPathThree 13s linear infinite;
        }


        .dot-four {
            bottom: 110px;
            right: 35%;

            width: 8px;
            height: 8px;

            animation:
                dotPathFour 10s linear infinite;
        }


        .dot-five {
            top: 250px;
            right: 43%;

            width: 4px;
            height: 4px;

            animation:
                dotPathFive 8s linear infinite;
        }


        .dot-six {
            top: 520px;
            left: 42%;

            width: 5px;
            height: 5px;

            animation:
                dotPathSix 12s linear infinite;
        }


        .dot-seven {
            top: 200px;
            right: 8%;

            width: 6px;
            height: 6px;

            animation:
                dotPathSeven 10s linear infinite;
        }


        @keyframes dotPathOne {

            0% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(70px, 35px);
            }

            50% {
                transform: translate(130px, -15px);
            }

            75% {
                transform: translate(60px, -65px);
            }

            100% {
                transform: translate(0, 0);
            }

        }


        @keyframes dotPathTwo {

            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-100px, 55px);
            }

            100% {
                transform: translate(0, 0);
            }

        }


        @keyframes dotPathThree {

            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(90px, -80px);
            }

            100% {
                transform: translate(0, 0);
            }

        }


        @keyframes dotPathFour {

            0% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(-60px, -35px);
            }

            50% {
                transform: translate(-120px, 20px);
            }

            75% {
                transform: translate(-40px, 75px);
            }

            100% {
                transform: translate(0, 0);
            }

        }


        @keyframes dotPathFive {

            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(55px, 85px);
            }

            100% {
                transform: translate(0, 0);
            }

        }


        @keyframes dotPathSix {

            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-80px, -65px);
            }

            100% {
                transform: translate(0, 0);
            }

        }


        @keyframes dotPathSeven {

            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-65px, 70px);
            }

            100% {
                transform: translate(0, 0);
            }

        }


        /* =====================================================
           FLOATING TASK ICONS
           ===================================================== */

        .bg-task {
            position: absolute;

            width: 36px;
            height: 36px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(59, 124, 139, .10);

            border-radius: 9px;

            background: rgba(255, 255, 255, .48);

            color: rgba(32, 89, 104, .30);

            font-size: 13px;
            font-weight: 700;

            box-shadow:
                0 5px 20px rgba(32, 89, 104, .04);
        }


        .task-one {
            top: 180px;
            left: 52%;

            animation:
                taskPathOne 12s ease-in-out infinite;
        }


        .task-two {
            top: 420px;
            left: 20%;

            animation:
                taskPathTwo 15s ease-in-out infinite;
        }


        .task-three {
            bottom: 110px;
            right: 18%;

            animation:
                taskPathThree 11s ease-in-out infinite;
        }


        @keyframes taskPathOne {

            0% {
                transform:
                    translate(0, 0)
                    rotate(0deg);
            }

            25% {
                transform:
                    translate(50px, -25px)
                    rotate(5deg);
            }

            50% {
                transform:
                    translate(100px, 20px)
                    rotate(-4deg);
            }

            75% {
                transform:
                    translate(65px, 70px)
                    rotate(6deg);
            }

            100% {
                transform:
                    translate(0, 0)
                    rotate(0deg);
            }

        }


        @keyframes taskPathTwo {

            0% {
                transform:
                    translate(0, 0)
                    rotate(0deg);
            }

            25% {
                transform:
                    translate(65px, -30px)
                    rotate(-5deg);
            }

            50% {
                transform:
                    translate(120px, 25px)
                    rotate(5deg);
            }

            75% {
                transform:
                    translate(55px, 80px)
                    rotate(-4deg);
            }

            100% {
                transform:
                    translate(0, 0)
                    rotate(0deg);
            }

        }


        @keyframes taskPathThree {

            0% {
                transform:
                    translate(0, 0)
                    rotate(0deg);
            }

            30% {
                transform:
                    translate(-70px, -30px)
                    rotate(5deg);
            }

            60% {
                transform:
                    translate(-130px, 20px)
                    rotate(-5deg);
            }

            100% {
                transform:
                    translate(0, 0)
                    rotate(0deg);
            }

        }


        /* =====================================================
           CONTENT ABOVE BACKGROUND
           ===================================================== */

        .main-area {
            position: relative;
            z-index: 1;
        }


        .page-content {
            position: relative;
            z-index: 2;
        }


        /* =====================================================
           TODAY BADGE
           ===================================================== */

        .today-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;

            padding: 6px 10px;

            margin-bottom: 10px;

            background: #eaf5f6;
            color: #205968;

            border-radius: 20px;

            font-size: 10px;
            font-weight: 700;
        }


        .today-dot {
            width: 6px;
            height: 6px;

            background: #3b7c8b;

            border-radius: 50%;
        }


        /* =====================================================
           STAT EXTRA
           ===================================================== */

        .stat-extra {
            margin-top: 5px;

            color: #718087;

            font-size: 10px;
        }


        /* =====================================================
           TASK ROWS
           ===================================================== */

        .dashboard-task {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            padding: 16px 20px;

            border-bottom:
                1px solid #edf1f2;

            transition:
                background .2s ease;
        }


        .dashboard-task:last-child {
            border-bottom: 0;
        }


        .dashboard-task:hover {
            background: #f9fbfb;
        }


        .dashboard-task-info {
            display: flex;
            align-items: center;

            gap: 12px;
        }


        .dashboard-task-icon {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 8px;

            background: #f0f4f5;

            color: #718087;

            font-size: 12px;
        }


        .dashboard-task-icon.completed {
            background: #e8f5ef;
            color: #247a59;
        }


        .dashboard-task-name {
            font-size: 13px;
            font-weight: 600;

            color: #35454b;
        }


        .dashboard-task-date {
            margin-top: 2px;

            color: #8a979c;

            font-size: 10px;
        }


        /* =====================================================
           DASHBOARD ADD TASK BUTTON
           ===================================================== */

        .dashboard-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;
        }


        .dashboard-add-task {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 5px;

            padding: 7px 11px;

            border-radius: 7px;

            background: #205968;
            color: #ffffff;

            font-size: 10px;
            font-weight: 700;

            text-decoration: none;

            white-space: nowrap;

            transition:
                all .2s ease;
        }


        .dashboard-add-task:hover {
            background: #174b58;

            transform: translateY(-1px);

            box-shadow:
                0 4px 10px rgba(32, 89, 104, .18);
        }


        .dashboard-add-task-icon {
            font-size: 12px;
            line-height: 1;
        }


        /* =====================================================
           PROGRESS
           ===================================================== */

        .progress-area {
            margin-top: 20px;
        }


        .progress-label {
            display: flex;
            justify-content: space-between;

            margin-bottom: 7px;

            color: #718087;

            font-size: 10px;
            font-weight: 600;
        }


        .progress-bar {
            width: 100%;

            height: 7px;

            background: #edf1f2;

            border-radius: 10px;

            overflow: hidden;
        }


        .progress-fill {
            height: 100%;

            width: <?= $completionRate ?>%;

            background: #3b7c8b;

            border-radius: 10px;

            transition:
                width .5s ease;
        }


        /* =====================================================
           MOBILE
           ===================================================== */

        @media (max-width: 600px) {

            .dashboard-card-header {
                align-items: flex-start;
            }


            .dashboard-add-task {
                flex-shrink: 0;
            }


            .dashboard-task {
                align-items: flex-start;

                flex-direction: column;

                gap: 10px;
            }

        }


        /* =====================================================
           REDUCE MOTION
           ===================================================== */

        @media (prefers-reduced-motion: reduce) {

            .dashboard-background * {
                animation: none !important;
            }

        }

    </style>


    <link rel="stylesheet" href="<?= base_url('css/app-theme.css?v=20261005') ?>">

</head>


<body>

<div class="app-layout">


    <!-- =================================================
         MOVING BACKGROUND
         ================================================= -->

    <div class="dashboard-background">


        <!-- CIRCLES -->

        <div class="bg-orb orb-one"></div>
        <div class="bg-orb orb-two"></div>
        <div class="bg-orb orb-three"></div>
        <div class="bg-orb orb-four"></div>

        <div class="bg-orb orb-five"></div>
        <div class="bg-orb orb-six"></div>
        <div class="bg-orb orb-seven"></div>
        <div class="bg-orb orb-eight"></div>

        <div class="bg-orb orb-nine"></div>
        <div class="bg-orb orb-ten"></div>
        <div class="bg-orb orb-eleven"></div>
        <div class="bg-orb orb-twelve"></div>


        <!-- DOTS -->

        <div class="bg-dot dot-one"></div>
        <div class="bg-dot dot-two"></div>
        <div class="bg-dot dot-three"></div>
        <div class="bg-dot dot-four"></div>
        <div class="bg-dot dot-five"></div>
        <div class="bg-dot dot-six"></div>
        <div class="bg-dot dot-seven"></div>


        <!-- TASK SYMBOLS -->

        <div class="bg-task task-one">
            ✓
        </div>

        <div class="bg-task task-two">
            □
        </div>

        <div class="bg-task task-three">
            ✓
        </div>


    </div>


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


                <div class="today-badge">

                    <span class="today-dot"></span>

                    TODAY

                </div>


                <h1>
                    <?= session('isLoggedIn') ? 'Good day, Angel.' : 'Welcome to Tasks for Today.' ?>
                </h1>


                <p>

                    Here's what's on your task list for

                    <?= date('F d, Y') ?>.

                </p>


            </section>


            <!-- STAT CARDS -->

            <section class="stats-grid">


                <!-- TOTAL TASKS -->

                <div class="stat-card">

                    <span class="stat-label">
                        Today's Tasks
                    </span>

                    <span class="stat-number">
                        <?= $totalTasks ?>
                    </span>

                    <div class="stat-extra">
                        Total scheduled today
                    </div>

                </div>


                <!-- PENDING -->

                <div class="stat-card">

                    <span class="stat-label">
                        Pending
                    </span>

                    <span class="stat-number">
                        <?= $pendingTasks ?>
                    </span>

                    <div class="stat-extra">
                        Tasks still to complete
                    </div>

                </div>


                <!-- COMPLETED -->

                <div class="stat-card">

                    <span class="stat-label">
                        Completed
                    </span>

                    <span class="stat-number">
                        <?= $completedTasks ?>
                    </span>

                    <div class="stat-extra">
                        <?= $completionRate ?>% completion rate
                    </div>

                </div>


            </section>


            <!-- TODAY'S TASKS -->

            <section class="content-card">


                <div class="card-header dashboard-card-header">


                    <div>

                        <h2 class="card-title">
                            Today's Tasks
                        </h2>

                        <p class="card-description">
                            Your scheduled tasks for today
                        </p>

                    </div>


                    <!-- SMALL ADD TASK BUTTON -->

                    <?php if (session('isLoggedIn')): ?>
                    <a
                        href="<?= base_url('tasks/new') ?>"
                        class="dashboard-add-task"
                    >

                        <span class="dashboard-add-task-icon">
                            +
                        </span>

                        Add Task

                    </a>
                    <?php endif; ?>


                </div>


                <?php if (!empty($tasks)): ?>


                    <?php foreach ($tasks as $task): ?>


                        <div class="dashboard-task">


                            <!-- TASK INFORMATION -->

                            <div class="dashboard-task-info">


                                <div
                                    class="dashboard-task-icon <?= $task['status'] === 'completed' ? 'completed' : '' ?>"
                                >

                                    <?= $task['status'] === 'completed'
                                        ? '✓'
                                        : '○'
                                    ?>

                                </div>


                                <div>


                                    <div class="dashboard-task-name">

                                        <?= esc($task['title']) ?>

                                    </div>


                                    <div class="dashboard-task-date">

                                        <?= date(
                                            'M d, Y',
                                            strtotime($task['task_date'])
                                        ) ?>

                                    </div>


                                </div>


                            </div>


                            <!-- STATUS -->

                            <div>

                                <?php if (
                                    $task['status'] === 'completed'
                                ): ?>

                                    <span
                                        class="status status-completed"
                                    >
                                        Completed
                                    </span>

                                <?php else: ?>

                                    <span
                                        class="status status-pending"
                                    >
                                        Pending
                                    </span>

                                <?php endif; ?>

                            </div>


                        </div>


                    <?php endforeach; ?>


                <?php else: ?>


                    <div
                        style="
                            padding: 40px;
                            text-align: center;
                            color: #718087;
                        "
                    >

                        No tasks scheduled for today.

                    </div>


                <?php endif; ?>


                <!-- PROGRESS -->

                <?php if ($totalTasks > 0): ?>


                    <div
                        style="
                            padding: 0 20px 20px;
                        "
                    >

                        <div class="progress-area">


                            <div class="progress-label">

                                <span>
                                    Today's progress
                                </span>

                                <span>
                                    <?= $completionRate ?>%
                                </span>

                            </div>


                            <div class="progress-bar">

                                <div class="progress-fill"></div>

                            </div>


                        </div>

                    </div>


                <?php endif; ?>


            </section>


        </main>


    </div>


</div>

</body>

</html>
