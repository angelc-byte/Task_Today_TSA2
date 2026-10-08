<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>About | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        /* =====================================================
           ABOUT PAGE
           ===================================================== */

        .about-page {

            width: 100%;

            max-width: 930px;

            margin: 0 auto;

            padding: 0 0 40px;

        }


        .about-page .page-heading {

            width: 100%;

            margin-bottom: 24px;

        }


        /* =====================================================
           ABOUT CARD
           ===================================================== */

        .about-card {

            position: relative;

            width: 100%;

            box-sizing: border-box;

            padding: 27px 28px 25px;

            border: 1px solid #dfe8ea;

            border-radius: 16px;

            background: #ffffff;

            box-shadow:
                0 8px 25px rgba(24, 63, 72, .07);

            overflow: hidden;

            transition:
                transform .25s ease,
                box-shadow .25s ease;

        }


        .about-card:hover {

            transform: translateY(-2px);

            box-shadow:
                0 13px 30px rgba(24, 63, 72, .10);

        }


        /* LEFT ACCENT */

        .about-card::before {

            content: "";

            position: absolute;

            top: 0;

            left: 0;

            width: 4px;

            height: 100%;

            background:
                linear-gradient(
                    180deg,
                    #205968,
                    #3c8b82,
                    #247a59
                );

        }


        .about-card-content {

            position: relative;

            z-index: 2;

        }


        /* =====================================================
           TITLE
           ===================================================== */

        .about-title {

            margin: 0 0 11px;

            color: #205968;

            font-size: 21px;

            line-height: 1.25;

        }


        .about-description {

            margin: 0 0 8px;

            color: #718087;

            font-size: 12px;

            line-height: 1.5;

        }


        /* =====================================================
           FEATURE CARDS
           ===================================================== */

        .about-features {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 11px;

            margin-top: 17px;

        }


        .about-feature {

            min-height: 78px;

            padding: 13px 14px;

            box-sizing: border-box;

            border: 1px solid #e1e9eb;

            border-radius: 11px;

            background: #f9fbfb;

            transition:
                transform .22s ease,
                background .22s ease,
                box-shadow .22s ease,
                border-color .22s ease;

        }


        .about-feature:hover {

            transform: translateY(-3px);

            background: #ffffff;

            border-color: #c8dadd;

            box-shadow:
                0 7px 18px rgba(24, 63, 72, .07);

        }


        .about-feature-icon {

            width: 31px;

            height: 31px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 7px;

            border-radius: 8px;

            background: #eaf5f6;

            color: #205968;

            font-size: 13px;

            transition:
                transform .22s ease;

        }


        .about-feature:hover
        .about-feature-icon {

            transform:
                scale(1.08)
                rotate(-4deg);

        }


        .about-feature h3 {

            margin: 0 0 3px;

            color: #263238;

            font-size: 10px;

            font-weight: 700;

        }


        .about-feature p {

            margin: 0;

            color: #8a979c;

            font-size: 8px;

            line-height: 1.45;

        }


        /* =====================================================
           DEVELOPER SECTION
           ===================================================== */

        .developer-section {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;

            margin-top: 15px;

            padding-top: 15px;

            border-top:
                1px solid #e3eaec;

        }


        .developer-header {

            display: flex;

            align-items: center;

            gap: 11px;

            min-width: 255px;

        }


        .developer-avatar {

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            flex-shrink: 0;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #205968,
                    #3d8b82
                );

            color: #ffffff;

            font-size: 14px;

            font-weight: 800;

            box-shadow:
                0 5px 12px rgba(32, 89, 104, .16);

            transition:
                transform .25s ease;

        }


        .developer-header:hover
        .developer-avatar {

            transform:
                scale(1.06);

        }


        .developer-label {

            display: block;

            margin-bottom: 2px;

            color: #718087;

            font-size: 7px;

            font-weight: 800;

            letter-spacing: 1.3px;

        }


        .developer-name {

            margin: 0;

            color: #205968;

            font-size: 15px;

        }


        .developer-role {

            margin: 2px 0 0;

            color: #8a979c;

            font-size: 9px;

        }


        /* =====================================================
           TECHNOLOGIES
           ===================================================== */

        .technology-section {

            flex: 1;

        }


        .technology-label {

            margin-bottom: 6px;

            color: #718087;

            font-size: 7px;

            font-weight: 800;

            letter-spacing: 1.2px;

        }


        .technology-list {

            display: flex;

            flex-wrap: wrap;

            gap: 5px;

        }


        .technology-badge {

            display: inline-flex;

            align-items: center;

            gap: 4px;

            padding: 5px 8px;

            border: 1px solid #dfe8ea;

            border-radius: 18px;

            background: #f8fbfb;

            color: #205968;

            font-size: 8px;

            font-weight: 700;

            transition:
                transform .2s ease,
                box-shadow .2s ease;

        }


        .technology-badge::before {

            content: "";

            width: 4px;

            height: 4px;

            border-radius: 50%;

            background: #35a66f;

        }


        .technology-badge:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 5px 12px rgba(24, 63, 72, .07);

        }


        /* =====================================================
           SYSTEM STATUS
           ===================================================== */

        .about-status {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-top: 13px;

            padding: 8px 11px;

            border: 1px solid #dfeae5;

            border-radius: 8px;

            background: #f7fbf9;

        }


        .about-status-left {

            display: flex;

            align-items: center;

            gap: 7px;

            color: #247a59;

            font-size: 8px;

            font-weight: 700;

        }


        .about-status-dot {

            width: 6px;

            height: 6px;

            border-radius: 50%;

            background: #35a66f;

            animation:
                statusPulse 2s ease-in-out infinite;

        }


        @keyframes statusPulse {

            0%,
            100% {

                opacity: 1;

                transform: scale(1);

            }

            50% {

                opacity: .5;

                transform: scale(.75);

            }

        }


        .about-status-right {

            color: #8a979c;

            font-size: 7px;

        }


        /* =====================================================
           RESPONSIVE
           ===================================================== */

        @media (max-width: 950px) {

            .about-page {

                max-width: 100%;

            }

        }


        @media (max-width: 750px) {

            .about-features {

                grid-template-columns: 1fr;

            }


            .developer-section {

                align-items: flex-start;

                flex-direction: column;

                gap: 15px;

            }


            .developer-header {

                min-width: 0;

            }


            .technology-section {

                width: 100%;

            }

        }


        @media (max-width: 500px) {

            .about-card {

                padding: 22px 19px;

            }


            .about-title {

                font-size: 19px;

            }


            .about-status {

                align-items: flex-start;

                flex-direction: column;

                gap: 6px;

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


            <div class="about-page">


                <!-- PAGE HEADING -->

                <section class="page-heading">

                    <span class="eyebrow">
                        INFORMATION
                    </span>

                    <h1>
                        About
                    </h1>

                    <p>
                        Learn more about this task management application.
                    </p>

                </section>


                <!-- ABOUT CARD -->

                <section class="about-card">


                    <div class="about-card-content">


                        <!-- TITLE -->

                        <h2 class="about-title">
                            Tasks for Today Management System
                        </h2>


                        <!-- DESCRIPTION -->

                        <p class="about-description">
                            The Tasks for Today Management System is a simple
                            web-based application designed to organize and
                            display daily tasks.
                        </p>


                        <p class="about-description">
                            The system allows users to view today's tasks,
                            browse the complete task list, and view the
                            registered user's profile information.
                        </p>


                        <!-- FEATURES -->

                        <div class="about-features">


                            <div class="about-feature">

                                <div class="about-feature-icon">
                                    ✓
                                </div>

                                <h3>
                                    Task Organization
                                </h3>

                                <p>
                                    Keep daily tasks organized and easy
                                    to view.
                                </p>

                            </div>


                            <div class="about-feature">

                                <div class="about-feature-icon">
                                    ◉
                                </div>

                                <h3>
                                    Secure Task Management
                                </h3>

                                <p>
                                    Sign in to create, update, and archive
                                    task records.
                                </p>

                            </div>


                            <div class="about-feature">

                                <div class="about-feature-icon">
                                    ▣
                                </div>

                                <h3>
                                    Daily Overview
                                </h3>

                                <p>
                                    Quickly browse tasks according to
                                    their scheduled dates.
                                </p>

                            </div>


                        </div>


                        <!-- DEVELOPER + TECHNOLOGIES -->

                        <div class="developer-section">


                            <div class="developer-header">


                                <div class="developer-avatar">
                                    AT
                                </div>


                                <div>

                                    <span class="developer-label">
                                        DEVELOPED BY
                                    </span>

                                    <h3 class="developer-name">
                                        Angel Clarise C. Tolentino
                                    </h3>

                                    <p class="developer-role">
                                        Developer
                                    </p>

                                </div>


                            </div>


                            <!-- TECHNOLOGIES -->

                            <div class="technology-section">


                                <div class="technology-label">
                                    TECHNOLOGIES USED
                                </div>


                                <div class="technology-list">


                                    <span class="technology-badge">
                                        CodeIgniter 4
                                    </span>


                                    <span class="technology-badge">
                                        MySQL
                                    </span>


                                    <span class="technology-badge">
                                        PHP
                                    </span>


                                    <span class="technology-badge">
                                        HTML
                                    </span>


                                    <span class="technology-badge">
                                        CSS
                                    </span>


                                    <span class="technology-badge">
                                        JavaScript
                                    </span>


                                </div>


                            </div>


                        </div>


                        <!-- SYSTEM STATUS -->

                        <div class="about-status">


                            <div class="about-status-left">

                                <span class="about-status-dot"></span>

                                System Online

                            </div>


                            <div class="about-status-right">

                                Tasks for Today Management System

                            </div>


                        </div>


                    </div>


                </section>


            </div>


        </main>


    </div>


</div>


</body>

</html>
