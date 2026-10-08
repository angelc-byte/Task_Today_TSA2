<?php
$currentPath = trim(uri_string(), '/');
?>

<aside class="sidebar">

    <style>

        /* =====================================================
           SIDEBAR — ORIGINAL ACCENT THEME
           ===================================================== */

        .sidebar {
            width: 250px;
            min-width: 250px;
            height: 100vh;

            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;

            background: #205968;
            color: #ffffff;

            display: flex;
            flex-direction: column;

            padding: 22px 15px;

            box-sizing: border-box;

            box-shadow:
                5px 0 20px rgba(24, 63, 72, 0.08);
        }


        /* =====================================================
           BRAND
           ===================================================== */

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 5px 9px 24px;
            margin-bottom: 8px;
        }


        .sidebar-logo {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background: rgba(255, 255, 255, 0.14);

            color: #ffffff;

            font-size: 20px;
            font-weight: 800;

            border: 1px solid rgba(255, 255, 255, 0.10);

            box-shadow:
                0 6px 15px rgba(0, 0, 0, 0.08);
        }


        .sidebar-brand-text {
            min-width: 0;
        }


        .sidebar-brand-text strong {
            display: block;

            color: #ffffff;

            font-size: 15px;
            font-weight: 800;

            line-height: 1.2;

            letter-spacing: -0.2px;
        }


        .sidebar-brand-text span {
            display: block;

            margin-top: 4px;

            color: rgba(255, 255, 255, 0.62);

            font-size: 10px;

            letter-spacing: 0.2px;
        }


        /* =====================================================
           SECTION LABEL
           ===================================================== */

        .sidebar-section-label {
            padding: 13px 11px 8px;

            color: rgba(255, 255, 255, 0.43);

            font-size: 9px;
            font-weight: 800;

            letter-spacing: 1.1px;

            text-transform: uppercase;
        }


        /* =====================================================
           NAVIGATION
           ===================================================== */

        .sidebar-nav {
            display: flex;
            flex-direction: column;

            gap: 5px;
        }


        .sidebar-link {
            position: relative;

            display: flex;
            align-items: center;

            gap: 12px;

            min-height: 46px;

            padding: 0 12px;

            border-radius: 11px;

            color: rgba(255, 255, 255, 0.70);

            text-decoration: none;

            font-size: 13px;
            font-weight: 600;

            transition:
                background .2s ease,
                color .2s ease,
                transform .2s ease,
                box-shadow .2s ease;
        }


        /* HOVER */

        .sidebar-link:hover {
            background: rgba(255, 255, 255, 0.09);

            color: #ffffff;

            transform: translateX(2px);
        }


        /* ACTIVE */

        .sidebar-link.active {
            background: rgba(255, 255, 255, 0.15);

            color: #ffffff;

            font-weight: 800;

            box-shadow:
                inset 0 0 0 1px rgba(255, 255, 255, 0.05);
        }


        /* ACTIVE INDICATOR */

        .sidebar-link.active::before {
            content: "";

            position: absolute;

            left: -15px;
            top: 10px;

            width: 3px;
            height: 26px;

            background: #ffffff;

            border-radius: 0 4px 4px 0;

            box-shadow:
                0 0 10px rgba(255, 255, 255, 0.25);
        }


        /* =====================================================
           NAV ICON
           ===================================================== */

        .sidebar-icon {
            width: 30px;
            height: 30px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 8px;

            background: rgba(255, 255, 255, 0.07);

            color: rgba(255, 255, 255, 0.76);

            font-size: 14px;

            transition:
                background .2s ease,
                color .2s ease,
                transform .2s ease;
        }


        .sidebar-link:hover .sidebar-icon {
            background: rgba(255, 255, 255, 0.12);

            color: #ffffff;

            transform: scale(1.04);
        }


        .sidebar-link.active .sidebar-icon {
            background: rgba(255, 255, 255, 0.16);

            color: #ffffff;
        }


        /* =====================================================
           DIVIDER
           ===================================================== */

        .sidebar-divider {
            height: 1px;

            background: rgba(255, 255, 255, 0.09);

            margin: 15px 9px 7px;
        }


        /* =====================================================
           BOTTOM AREA
           ===================================================== */

        .sidebar-bottom {
            margin-top: auto;
        }


        .sidebar-system {
            margin: 15px 5px 0;

            padding: 14px;

            background: rgba(255, 255, 255, 0.07);

            border: 1px solid rgba(255, 255, 255, 0.08);

            border-radius: 12px;
        }


        .sidebar-system-label {
            color: rgba(255, 255, 255, 0.42);

            font-size: 9px;
            font-weight: 800;

            letter-spacing: .8px;

            text-transform: uppercase;
        }


        .sidebar-system-name {
            margin-top: 4px;

            color: #ffffff;

            font-size: 12px;
            font-weight: 700;
        }


        .sidebar-system-status {
            display: flex;
            align-items: center;

            gap: 6px;

            margin-top: 8px;

            color: rgba(255, 255, 255, 0.62);

            font-size: 10px;
            font-weight: 700;
        }


        .sidebar-status-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #74d5a8;

            box-shadow:
                0 0 7px rgba(116, 213, 168, 0.55);
        }


        /* =====================================================
           MOBILE
           ===================================================== */

        @media (max-width: 800px) {

            .sidebar {
                width: 220px;
                min-width: 220px;
            }

        }

    </style>


    <!-- =====================================================
         BRAND
         ===================================================== -->

    <div class="sidebar-brand">

        <div class="sidebar-logo">
            ✓
        </div>

        <div class="sidebar-brand-text">

            <strong>
                Tasks for Today
            </strong>

            <span>
                Management System
            </span>

        </div>

    </div>


    <!-- =====================================================
         MAIN MENU
         ===================================================== -->

    <div class="sidebar-section-label">
        Main Menu
    </div>


    <nav class="sidebar-nav">


        <!-- DASHBOARD -->

        <a
            href="<?= base_url('/') ?>"
            class="sidebar-link <?= $currentPath === '' ? 'active' : '' ?>"
        >

            <span class="sidebar-icon">
                ▦
            </span>

            <span>
                Dashboard
            </span>

        </a>


        <!-- CUSTOMERS -->

        <a
            href="<?= base_url('customers') ?>"
            class="sidebar-link <?= $currentPath === 'customers' || strpos($currentPath, 'customers/') === 0 ? 'active' : '' ?>"
        >

            <span class="sidebar-icon">
                ♙
            </span>

            <span>
                Customers
            </span>

        </a>


        <!-- TASKS -->

        <a
            href="<?= base_url('tasks') ?>"
            class="sidebar-link <?= $currentPath === 'tasks' || strpos($currentPath, 'tasks/') === 0 ? 'active' : '' ?>"
        >

            <span class="sidebar-icon">
                ✓
            </span>

            <span>
                Tasks
            </span>

        </a>


        <!-- USERS -->

        <a
            href="<?= base_url('users') ?>"
            class="sidebar-link <?= $currentPath === 'users' || strpos($currentPath, 'users/') === 0 ? 'active' : '' ?>"
        >

            <span class="sidebar-icon">
                ♙
            </span>

            <span>
                Users
            </span>

        </a>


    </nav>


    <!-- =====================================================
         DIVIDER
         ===================================================== -->

    <div class="sidebar-divider"></div>


    <!-- =====================================================
         ACCOUNT
         ===================================================== -->

    <div class="sidebar-section-label">
        Account
    </div>


    <nav class="sidebar-nav">


        <!-- PROFILE -->

        <a
            href="<?= base_url('profile') ?>"
            class="sidebar-link <?= $currentPath === 'profile' ? 'active' : '' ?>"
        >

            <span class="sidebar-icon">
                ◎
            </span>

            <span>
                Profile
            </span>

        </a>


        <!-- ABOUT -->

        <a
            href="<?= base_url('about') ?>"
            class="sidebar-link <?= $currentPath === 'about' ? 'active' : '' ?>"
        >

            <span class="sidebar-icon">
                ⓘ
            </span>

            <span>
                About
            </span>

        </a>


    </nav>


    <!-- =====================================================
         SYSTEM STATUS
         ===================================================== -->

    <div class="sidebar-bottom">

        <div class="sidebar-system">

            <div class="sidebar-system-label">
                System
            </div>

            <div class="sidebar-system-name">
                Tasks for Today
            </div>

            <div class="sidebar-system-status">

                <span class="sidebar-status-dot"></span>

                System Online

            </div>

        </div>

    </div>


</aside>