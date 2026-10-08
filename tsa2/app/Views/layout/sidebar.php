<?php
$currentPath = trim(uri_string(), '/');
?>

<aside class="sidebar">

    <style>
        /* =====================================================
           SHARED APP SIDEBAR — USERS PAGE THEME
           This sidebar is shared by every authenticated page.
        ===================================================== */

        .sidebar {
            width: 250px !important;
            min-width: 250px !important;
            height: 100vh !important;
            position: fixed !important;
            left: 0 !important;
            top: 0 !important;
            bottom: 0 !important;
            z-index: 1000 !important;
            background: linear-gradient(180deg, #172f5d 0%, #21457f 55%, #294f91 100%) !important;
            color: #ffffff !important;
            display: flex !important;
            flex-direction: column !important;
            padding: 20px 13px !important;
            box-sizing: border-box !important;
            box-shadow: 4px 0 18px rgba(20, 48, 93, .16) !important;
            overflow: hidden !important;
        }

        .sidebar::after {
            content: "";
            position: absolute;
            width: 230px;
            height: 230px;
            left: -95px;
            top: 90px;
            border-radius: 50%;
            background: rgba(92, 139, 220, .12);
            pointer-events: none;
        }

        .sidebar-brand {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 4px 9px 20px !important;
            margin-bottom: 9px !important;
            border-bottom: 1px solid rgba(255,255,255,.10) !important;
        }

        .sidebar-logo {
            width: 43px !important;
            height: 43px !important;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px !important;
            background: rgba(255,255,255,.16) !important;
            border: 1px solid rgba(255,255,255,.12) !important;
            color: #ffffff !important;
            font-size: 20px !important;
            font-weight: 800 !important;
            box-shadow: 0 7px 18px rgba(0,0,0,.10) !important;
        }

        .sidebar-brand-text { min-width: 0; }

        .sidebar-brand-text strong {
            display: block;
            color: #ffffff !important;
            font-size: 15px !important;
            font-weight: 800 !important;
            line-height: 1.2;
            letter-spacing: -.2px;
        }

        .sidebar-brand-text span {
            display: block;
            margin-top: 4px;
            color: rgba(255,255,255,.62) !important;
            font-size: 10px !important;
            letter-spacing: .2px;
        }

        .sidebar-section-label {
            position: relative;
            z-index: 1;
            padding: 13px 11px 8px !important;
            color: rgba(255,255,255,.42) !important;
            font-size: 9px !important;
            font-weight: 800 !important;
            letter-spacing: 1.1px !important;
            text-transform: uppercase;
        }

        .sidebar-nav {
            position: relative;
            z-index: 1;
            display: flex !important;
            flex-direction: column !important;
            gap: 5px !important;
        }

        .sidebar-link {
            position: relative;
            display: flex !important;
            align-items: center !important;
            gap: 12px !important;
            min-height: 46px !important;
            padding: 0 12px !important;
            border-radius: 11px !important;
            color: rgba(255,255,255,.72) !important;
            text-decoration: none !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            transition: background .2s ease, color .2s ease, transform .2s ease, box-shadow .2s ease !important;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,.09) !important;
            color: #ffffff !important;
            transform: translateX(2px);
        }

        .sidebar-link.active {
            background: linear-gradient(90deg, rgba(255,255,255,.18), rgba(113,160,231,.20)) !important;
            color: #ffffff !important;
            font-weight: 800 !important;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,.08), 0 5px 16px rgba(12,37,78,.10) !important;
        }

        .sidebar-link.active::before {
            content: "";
            position: absolute;
            left: -13px;
            top: 10px;
            width: 3px;
            height: 26px;
            background: #69a9ff;
            border-radius: 0 4px 4px 0;
            box-shadow: 0 0 10px rgba(105,169,255,.55);
        }

        .sidebar-icon {
            width: 30px !important;
            height: 30px !important;
            flex-shrink: 0;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 8px !important;
            background: rgba(255,255,255,.08) !important;
            color: rgba(255,255,255,.78) !important;
            font-size: 14px !important;
            transition: background .2s ease, color .2s ease, transform .2s ease !important;
        }

        .sidebar-link:hover .sidebar-icon,
        .sidebar-link.active .sidebar-icon {
            background: rgba(255,255,255,.14) !important;
            color: #ffffff !important;
            transform: scale(1.03);
        }

        .sidebar-divider {
            height: 1px !important;
            background: rgba(255,255,255,.09) !important;
            margin: 15px 9px 7px !important;
        }

        .sidebar-bottom {
            position: relative;
            z-index: 1;
            margin-top: auto !important;
        }

        .sidebar-system {
            margin: 15px 5px 0 !important;
            padding: 14px !important;
            background: rgba(255,255,255,.09) !important;
            border: 1px solid rgba(255,255,255,.10) !important;
            border-radius: 12px !important;
            box-shadow: inset 0 1px 0 rgba(255,255,255,.04) !important;
        }

        .sidebar-system-label {
            color: rgba(255,255,255,.43) !important;
            font-size: 9px !important;
            font-weight: 800 !important;
            letter-spacing: .8px !important;
            text-transform: uppercase;
        }

        .sidebar-system-name {
            margin-top: 4px;
            color: #ffffff !important;
            font-size: 12px !important;
            font-weight: 700 !important;
        }

        .sidebar-system-status {
            display: flex !important;
            align-items: center !important;
            gap: 6px !important;
            margin-top: 8px !important;
            color: rgba(255,255,255,.66) !important;
            font-size: 10px !important;
            font-weight: 700 !important;
        }

        .sidebar-status-dot {
            width: 6px !important;
            height: 6px !important;
            border-radius: 50% !important;
            background: #69dfa5 !important;
            box-shadow: 0 0 7px rgba(105,223,165,.55) !important;
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 220px !important;
                min-width: 220px !important;
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

    <button type="button" class="sidebar-close" id="sidebarClose" aria-label="Close navigation">×</button>


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
