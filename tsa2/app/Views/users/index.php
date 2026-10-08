<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css?v=20261005') ?>">

    <style>
        .users-page {
            padding: 30px;
            animation: pageIn .35s ease;
        }

        @keyframes pageIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .users-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 20px;
            margin-bottom: 24px;
        }

        .users-eyebrow {
            display: inline-block;
            margin-bottom: 6px;
            color: #205968;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .users-title h1 {
            margin: 0;
            color: #183f4b;
            font-size: 30px;
            font-weight: 750;
            letter-spacing: -.5px;
        }

        .users-title p {
            margin: 7px 0 0;
            color: #71808a;
            font-size: 14px;
        }

        .add-user-btn {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 12px 18px;
            border-radius: 10px;
            background: #205968;
            color: #fff !important;
            text-decoration: none !important;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 5px 14px rgba(32, 89, 104, .18);
            transition: .2s;
        }

        .add-user-btn:hover {
            background: #174752;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(32, 89, 104, .25);
        }

        .add-user-icon {
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            background: rgba(255, 255, 255, .16);
            font-size: 16px;
        }

        .users-alert {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 15px;
            margin-bottom: 18px;
            border-radius: 10px;
            font-size: 13px;
            animation: alertIn .3s ease;
        }

        @keyframes alertIn {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .users-alert-success {
            background: #eaf7ef;
            color: #267344;
            border: 1px solid #ccebd7;
        }

        .users-alert-error {
            background: #fff0f0;
            color: #a73535;
            border: 1px solid #f2cccc;
        }

        .users-alert-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 800;
            flex-shrink: 0;
        }

        .users-alert-success .users-alert-icon {
            background: #d5efde;
        }

        .users-alert-error .users-alert-icon {
            background: #f8d8d8;
        }

        .users-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .user-stat-card {
            position: relative;
            overflow: hidden;
            padding: 18px;
            background: #fff;
            border: 1px solid #edf0f2;
            border-radius: 13px;
            box-shadow: 0 3px 14px rgba(0, 0, 0, .045);
            cursor: pointer;
            transition: .2s;
        }

        .user-stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 22px rgba(0, 0, 0, .08);
            border-color: #cfe0e4;
        }

        .user-stat-card.active-stat {
            border-color: #8fbec8;
            box-shadow:
                0 0 0 3px rgba(32, 89, 104, .08),
                0 8px 22px rgba(0, 0, 0, .07);
        }

        .user-stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-stat-label {
            color: #7b8990;
            font-size: 11px;
            font-weight: 750;
            text-transform: uppercase;
            letter-spacing: .65px;
        }

        .user-stat-icon {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
            background: #edf5f7;
            color: #205968;
            font-size: 16px;
        }

        .user-stat-number {
            margin-top: 9px;
            color: #183f4b;
            font-size: 25px;
            font-weight: 750;
        }

        .user-stat-note {
            margin-top: 3px;
            color: #89959b;
            font-size: 12px;
        }

        .stat-decoration {
            position: absolute;
            right: -20px;
            bottom: -25px;
            width: 85px;
            height: 85px;
            border-radius: 50%;
            background: #f5f9fa;
        }

        .users-card {
            overflow: hidden;
            background: #fff;
            border: 1px solid #edf0f2;
            border-radius: 15px;
            box-shadow: 0 5px 22px rgba(0, 0, 0, .055);
        }

        .users-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 19px 20px;
            border-bottom: 1px solid #edf0f2;
        }

        .directory-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .directory-title h2 {
            margin: 0;
            color: #29434d;
            font-size: 18px;
            font-weight: 700;
        }

        .directory-subtitle {
            margin-top: 4px;
            color: #8a969c;
            font-size: 11px;
        }

        .directory-badge {
            padding: 5px 9px;
            border-radius: 20px;
            background: #edf5f7;
            color: #205968;
            font-size: 10px;
            font-weight: 750;
        }

        .result-count {
            color: #7b8990;
            font-size: 11px;
            white-space: nowrap;
        }

        .result-count strong {
            color: #205968;
        }

        .users-toolbar {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 20px;
            border-bottom: 1px solid #edf0f2;
            background: #fcfdfd;
        }

        .search-box {
            position: relative;
            flex: 1;
            min-width: 220px;
        }

        .search-box input {
            width: 100%;
            height: 40px;
            padding: 0 40px;
            border: 1px solid #dce3e6;
            border-radius: 9px;
            outline: none;
            background: #fff;
            color: #34464e;
            font-size: 13px;
            transition: .2s;
            box-sizing: border-box;
        }

        .search-box input:focus {
            border-color: #205968;
            box-shadow: 0 0 0 3px rgba(32, 89, 104, .08);
        }

        .search-icon {
            position: absolute;
            left: 13px;
            top: 10px;
            color: #849198;
            font-size: 17px;
            pointer-events: none;
        }

        .clear-search {
            display: none;
            position: absolute;
            right: 7px;
            top: 6px;
            width: 28px;
            height: 28px;
            border: none;
            border-radius: 7px;
            background: transparent;
            color: #7b8990;
            cursor: pointer;
            font-size: 17px;
        }

        .clear-search.show {
            display: block;
        }

        .clear-search:hover {
            background: #edf1f3;
        }

        .view-status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            height: 40px;
            padding: 0 12px;
            border: 1px solid #dce3e6;
            border-radius: 8px;
            background: #fff;
            color: #66767d;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        .view-status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #205968;
        }

        .reset-view-btn {
            height: 40px;
            padding: 0 12px;
            border: 1px solid #dce3e6;
            border-radius: 8px;
            background: #fff;
            color: #66767d;
            cursor: pointer;
            font-size: 11px;
            font-weight: 700;
            transition: .18s;
            white-space: nowrap;
        }

        .reset-view-btn:hover {
            border-color: #9dbcc4;
            color: #205968;
            background: #f8fbfb;
        }

        .sort-select {
            height: 40px;
            padding: 0 30px 0 11px;
            border: 1px solid #dce3e6;
            border-radius: 8px;
            background: #fff;
            color: #66767d;
            outline: none;
            font-size: 11px;
            cursor: pointer;
        }

        .sort-select:focus {
            border-color: #205968;
            box-shadow: 0 0 0 3px rgba(32, 89, 104, .08);
        }

        .users-table-wrapper {
            overflow-x: auto;
        }

        .users-table {
            width: 100%;
            border-collapse: collapse;
        }

        .users-table th {
            padding: 12px 20px;
            background: #f8fafb;
            color: #71808a;
            border-bottom: 1px solid #edf0f2;
            text-align: left;
            font-size: 10px;
            font-weight: 750;
            text-transform: uppercase;
            letter-spacing: .65px;
            white-space: nowrap;
        }

        .users-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f0f2f3;
            color: #34464e;
            font-size: 13px;
            vertical-align: middle;
        }

        .user-row {
            cursor: pointer;
            transition: background .18s;
        }

        .user-row:hover {
            background: #f9fcfc;
        }

        .user-row.selected-row {
            background: #f0f7f8;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 190px;
        }

        .user-avatar {
            width: 42px;
            height: 42px;
            min-width: 42px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 50%;
            background: linear-gradient(145deg, #205968, #174752);
            color: #fff;
            font-size: 13px;
            font-weight: 750;
            box-shadow: 0 3px 8px rgba(32, 89, 104, .18);
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            border-radius: 50%;
        }

        .avatar-fallback {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .username {
            color: #183f4b;
            font-weight: 700;
            line-height: 1.3;
        }

        .user-subtitle {
            margin-top: 3px;
            color: #909ba0;
            font-size: 10px;
        }

        .email-text {
            color: #56666e;
        }

        .no-email {
            color: #a3adb1;
            font-style: italic;
        }

        .id-badge {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 7px;
            background: #f3f6f7;
            color: #63737b;
            font-size: 11px;
            font-weight: 650;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 9px;
            border-radius: 20px;
            background: #eaf7ef;
            color: #28764a;
            font-size: 10px;
            font-weight: 700;
        }

        .status-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #2ea463;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }

        .action-btn {
            min-height: 32px;
            padding: 6px 10px;
            border: none;
            border-radius: 7px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
            transition: .18s;
        }

        .action-btn:hover {
            transform: translateY(-1px);
        }

        .view-btn {
            background: #f3f7f8;
            color: #205968;
        }

        .view-btn:hover {
            background: #e5f0f2;
        }

        .edit-btn {
            background: #edf5f7;
            color: #205968;
        }

        .edit-btn:hover {
            background: #dcebef;
        }

        .delete-btn {
            background: #fff0f0;
            color: #c43d3d;
        }

        .delete-btn:hover {
            background: #ffe0e0;
        }

        .empty-state {
            padding: 60px 20px !important;
            text-align: center !important;
        }

        .empty-icon {
            width: 55px;
            height: 55px;
            margin: 0 auto 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #edf5f7;
            color: #205968;
            font-size: 22px;
        }

        .empty-title {
            color: #4c6069;
            font-size: 15px;
            font-weight: 700;
        }

        .empty-text {
            margin-top: 4px;
            color: #8a969c;
            font-size: 12px;
        }

        .hidden-row {
            display: none !important;
        }

        .user-drawer-overlay {
            position: fixed;
            inset: 0;
            z-index: 9997;
            display: none;
            background: rgba(18, 35, 41, .35);
            backdrop-filter: blur(2px);
        }

        .user-drawer-overlay.show {
            display: block;
        }

        .user-drawer {
            position: fixed;
            top: 0;
            right: -430px;
            z-index: 9998;
            width: 400px;
            max-width: 92vw;
            height: 100vh;
            padding: 25px;
            overflow-y: auto;
            box-sizing: border-box;
            background: #fff;
            box-shadow: -15px 0 40px rgba(0, 0, 0, .14);
            transition: right .3s ease;
        }

        .user-drawer.show {
            right: 0;
        }

        .drawer-close {
            position: absolute;
            top: 18px;
            right: 18px;
            width: 34px;
            height: 34px;
            border: none;
            border-radius: 8px;
            background: #f1f4f5;
            color: #617078;
            cursor: pointer;
            font-size: 19px;
            transition: .18s;
        }

        .drawer-close:hover {
            background: #e5eaec;
        }

        .drawer-profile {
            padding-top: 28px;
            text-align: center;
        }

        .drawer-avatar {
            width: 82px;
            height: 82px;
            margin: 0 auto 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 50%;
            background: linear-gradient(145deg, #205968, #174752);
            color: #fff;
            font-size: 25px;
            font-weight: 800;
            box-shadow: 0 8px 20px rgba(32, 89, 104, .2);
        }

        .drawer-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .drawer-profile h2 {
            margin: 0;
            color: #183f4b;
            font-size: 21px;
        }

        .drawer-profile p {
            margin: 5px 0 0;
            color: #89959b;
            font-size: 12px;
        }

        .drawer-status {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            margin-top: 12px;
            padding: 6px 10px;
            border-radius: 20px;
            background: #eaf7ef;
            color: #28764a;
            font-size: 10px;
            font-weight: 700;
        }

        .drawer-section {
            margin-top: 28px;
        }

        .drawer-section-title {
            margin-bottom: 10px;
            color: #8a969c;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .8px;
        }

        .drawer-info {
            overflow: hidden;
            border: 1px solid #edf0f2;
            border-radius: 11px;
        }

        .drawer-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            padding: 13px 14px;
            border-bottom: 1px solid #edf0f2;
        }

        .drawer-info-row:last-child {
            border-bottom: none;
        }

        .drawer-info-label {
            color: #8a969c;
            font-size: 11px;
        }

        .drawer-info-value {
            color: #33474f;
            font-size: 12px;
            font-weight: 650;
            text-align: right;
            word-break: break-word;
        }

        .drawer-copy {
            border: none;
            background: transparent;
            color: #205968;
            cursor: pointer;
            font-size: 11px;
            font-weight: 700;
        }

        .drawer-copy:hover {
            text-decoration: underline;
        }

        .drawer-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 9px;
            margin-top: 25px;
        }

        .drawer-action {
            min-height: 42px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
        }

        .drawer-edit {
            background: #edf5f7;
            color: #205968;
        }

        .drawer-edit:hover {
            background: #dcebef;
        }

        .drawer-delete {
            border: none;
            background: #fff0f0;
            color: #c43d3d;
            cursor: pointer;
        }

        .drawer-delete:hover {
            background: #ffe0e0;
        }

        .delete-modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 10000;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(20, 35, 40, .58);
            backdrop-filter: blur(3px);
        }

        .delete-modal.show {
            display: flex;
        }

        .delete-modal-box {
            width: 100%;
            max-width: 430px;
            padding: 30px;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 20px 55px rgba(0, 0, 0, .23);
            text-align: center;
            animation: modalIn .2s ease;
            box-sizing: border-box;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: translateY(14px) scale(.97);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .delete-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #fff0f0;
            color: #c43d3d;
            font-size: 24px;
            font-weight: 800;
        }

        .delete-modal-box h3 {
            margin: 0 0 8px;
            color: #263d45;
            font-size: 20px;
        }

        .delete-modal-box p {
            margin: 0;
            color: #74828a;
            line-height: 1.6;
            font-size: 13px;
        }

        .delete-user-name {
            color: #263d45;
            font-weight: 750;
        }

        .modal-actions {
            display: flex;
            justify-content: center;
            gap: 9px;
            margin-top: 24px;
        }

        .modal-btn {
            min-width: 115px;
            padding: 10px 17px;
            border: none;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .18s;
        }

        .modal-btn:hover {
            transform: translateY(-1px);
        }

        .cancel-delete {
            background: #edf1f3;
            color: #4d5d64;
        }

        .confirm-delete {
            background: #c43d3d;
            color: #fff;
        }

        .confirm-delete:hover {
            background: #a93232;
        }

        .users-toast {
            position: fixed;
            right: 25px;
            bottom: 25px;
            z-index: 11000;
            display: flex;
            align-items: center;
            gap: 9px;
            max-width: 300px;
            padding: 12px 15px;
            border-radius: 9px;
            background: #183f4b;
            color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
            font-size: 12px;
            opacity: 0;
            transform: translateY(15px);
            pointer-events: none;
            transition: .25s;
        }

        .users-toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 1000px) {
            .users-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .users-toolbar {
                flex-wrap: wrap;
            }

            .search-box {
                flex-basis: 100%;
            }
        }

        @media (max-width: 750px) {
            .users-page {
                padding: 20px 15px;
            }

            .users-header {
                flex-direction: column;
                align-items: stretch;
            }

            .users-stats {
                grid-template-columns: 1fr;
            }

            .users-card-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .users-toolbar {
                align-items: stretch;
                flex-direction: column;
            }

            .view-status,
            .reset-view-btn,
            .sort-select {
                width: 100%;
                box-sizing: border-box;
            }

            .result-count {
                text-align: left;
            }

            .actions {
                flex-direction: column;
                align-items: stretch;
            }

            .action-btn {
                width: 72px;
            }
        }

        @media (max-width: 500px) {
            .users-title h1 {
                font-size: 25px;
            }

            .add-user-btn {
                justify-content: center;
            }

            .user-drawer {
                width: 100%;
                max-width: 100%;
            }

            .delete-modal-box {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

<div class="app-layout">

    <?= view('layout/sidebar') ?>

    <div class="main-area">

        <?= view('layout/topbar') ?>

        <main class="page-content">

            <div class="users-page">

                <section class="users-header">

                    <div class="users-title">

                        <span class="users-eyebrow">USER MANAGEMENT</span>

                        <h1>Users</h1>

                        <p>Manage accounts, user information, and system access.</p>

                    </div>

                    <a
                        href="<?= base_url('users/new') ?>"
                        class="add-user-btn"
                    >
                        <span class="add-user-icon">+</span>
                        Add New User
                    </a>

                </section>


                <?php if (session()->getFlashdata('success')): ?>

                    <div class="users-alert users-alert-success">

                        <span class="users-alert-icon">✓</span>

                        <span>
                            <?= esc(session()->getFlashdata('success')) ?>
                        </span>

                    </div>

                <?php endif; ?>


                <?php if (session()->getFlashdata('error')): ?>

                    <div class="users-alert users-alert-error">

                        <span class="users-alert-icon">!</span>

                        <span>
                            <?= esc(session()->getFlashdata('error')) ?>
                        </span>

                    </div>

                <?php endif; ?>


                <?php

                    $totalUsers = count($users ?? []);

                    $usersWithoutAvatar = 0;

                    $recentlyAdded = 0;

                    $sevenDaysAgo = strtotime('-7 days');

                    foreach (($users ?? []) as $user) {

                        $avatar = trim($user['avatar'] ?? '');

                        if ($avatar === '') {
                            $usersWithoutAvatar++;
                        }

                        $createdAt = !empty($user['created_at'])
                            ? strtotime($user['created_at'])
                            : false;

                        if (
                            $createdAt !== false &&
                            $createdAt >= $sevenDaysAgo
                        ) {
                            $recentlyAdded++;
                        }
                    }

                ?>


                <section class="users-stats">

                    <div
                        class="user-stat-card active-stat"
                        data-filter-stat="all"
                    >

                        <div class="user-stat-top">

                            <div class="user-stat-label">
                                Total Users
                            </div>

                            <div class="user-stat-icon">
                                ♙
                            </div>

                        </div>

                        <div
                            class="user-stat-number"
                            data-number="<?= $totalUsers ?>"
                        >
                            0
                        </div>

                        <div class="user-stat-note">
                            Registered accounts
                        </div>

                        <div class="stat-decoration"></div>

                    </div>


                    <div
                        class="user-stat-card"
                        data-filter-stat="no-avatar"
                    >

                        <div class="user-stat-top">

                            <div class="user-stat-label">
                                Without Avatar
                            </div>

                            <div class="user-stat-icon">
                                !
                            </div>

                        </div>

                        <div
                            class="user-stat-number"
                            data-number="<?= $usersWithoutAvatar ?>"
                        >
                            0
                        </div>

                        <div class="user-stat-note">
                            Accounts without profile photo
                        </div>

                        <div class="stat-decoration"></div>

                    </div>


                    <div
                        class="user-stat-card"
                        data-filter-stat="recent"
                    >

                        <div class="user-stat-top">

                            <div class="user-stat-label">
                                Recently Added
                            </div>

                            <div class="user-stat-icon">
                                +
                            </div>

                        </div>

                        <div
                            class="user-stat-number"
                            data-number="<?= $recentlyAdded ?>"
                        >
                            0
                        </div>

                        <div class="user-stat-note">
                            Added in the last 7 days
                        </div>

                        <div class="stat-decoration"></div>

                    </div>

                </section>


                <section class="users-card">

                    <div class="users-card-header">

                        <div>

                            <div class="directory-title">

                                <h2>User Directory</h2>

                                <span class="directory-badge">
                                    <?= $totalUsers ?> RECORDS
                                </span>

                            </div>

                            <div class="directory-subtitle">
                                Click a user to view detailed information.
                            </div>

                        </div>

                        <div class="result-count">

                            Showing
                            <strong id="userCount">
                                <?= $totalUsers ?>
                            </strong>
                            of <?= $totalUsers ?>

                        </div>

                    </div>


                    <div class="users-toolbar">

                        <div class="search-box">

                            <span class="search-icon">⌕</span>

                            <input
                                type="text"
                                id="userSearch"
                                placeholder="Search full name, username, email, or account ID..."
                                autocomplete="off"
                            >

                            <button
                                type="button"
                                id="clearSearch"
                                class="clear-search"
                                aria-label="Clear search"
                            >
                                ×
                            </button>

                        </div>


                        <div
                            class="view-status"
                            id="viewStatus"
                        >
                            <span class="view-status-dot"></span>
                            Viewing: All Users
                        </div>


                        <button
                            type="button"
                            class="reset-view-btn"
                            id="resetView"
                        >
                            ↻ Reset View
                        </button>


                        <select
                            id="sortUsers"
                            class="sort-select"
                        >
                            <option value="default">
                                Sort: Default
                            </option>

                            <option value="name-asc">
                                Name: A–Z
                            </option>

                            <option value="name-desc">
                                Name: Z–A
                            </option>

                            <option value="id-asc">
                                ID: Low–High
                            </option>

                            <option value="id-desc">
                                ID: High–Low
                            </option>
                        </select>

                    </div>


                    <div class="users-table-wrapper">

                        <table class="users-table">

                            <thead>

                                <tr>

                                    <th>User</th>

                                    <th>Email</th>

                                    <th>Account ID</th>

                                    <th>Status</th>

                                    <th>Actions</th>

                                </tr>

                            </thead>


                            <tbody id="usersTableBody">

                                <?php if (!empty($users)): ?>

                                    <?php foreach ($users as $user): ?>

                                        <?php

                                            $username = $user['username']
                                                ?? 'Unknown User';

                                            $fullName = trim(
                                                $user['full_name'] ?? ''
                                            );

                                            if ($fullName === '') {
                                                $fullName = $username;
                                            }

                                            $email = $user['email'] ?? '';

                                            $userId = $user['id'] ?? 0;

                                            $avatar = trim(
                                                $user['avatar'] ?? ''
                                            );

                                            $createdAtTimestamp =
                                                !empty($user['created_at'])
                                                    ? strtotime(
                                                        $user['created_at']
                                                    )
                                                    : false;

                                            $isRecent =
                                                $createdAtTimestamp !== false &&
                                                $createdAtTimestamp >= strtotime(
                                                    '-7 days'
                                                );

                                            $avatarFilter =
                                                !empty($avatar)
                                                    ? 'avatar'
                                                    : 'no-avatar';


                                            $words = preg_split(
                                                '/\s+/',
                                                trim($fullName)
                                            );

                                            $initials = '';


                                            if (!empty($words[0])) {

                                                $initials .= strtoupper(
                                                    substr(
                                                        $words[0],
                                                        0,
                                                        1
                                                    )
                                                );

                                            }


                                            if (count($words) > 1) {

                                                $initials .= strtoupper(
                                                    substr(
                                                        $words[
                                                            count($words) - 1
                                                        ],
                                                        0,
                                                        1
                                                    )
                                                );

                                            }


                                            if (empty($initials)) {
                                                $initials = 'U';
                                            }


                                            $searchData = strtolower(
                                                $fullName .
                                                ' ' .
                                                $username .
                                                ' ' .
                                                $email .
                                                ' ' .
                                                $userId
                                            );

                                        ?>


                                        <tr
                                            class="user-row"
                                            data-original-index="<?= esc($userId) ?>"
                                            data-search="<?= esc($searchData) ?>"
                                            data-filter="<?= esc($avatarFilter) ?>"
                                            data-recent="<?= $isRecent ? '1' : '0' ?>"
                                            data-name="<?= esc(strtolower($fullName)) ?>"
                                            data-id="<?= esc($userId) ?>"
                                            data-user-id="<?= esc($userId) ?>"
                                            data-user-name="<?= esc($username) ?>"
                                            data-user-full-name="<?= esc($fullName) ?>"
                                            data-user-email="<?= esc($email) ?>"
                                            data-user-avatar="<?= esc($avatar) ?>"
                                        >

                                            <td>

                                                <div class="user-info">

                                                    <div class="user-avatar">

                                                        <?php if (!empty($avatar)): ?>

                                                            <img
                                                                src="<?= base_url('uploads/avatars/' . $avatar) ?>"
                                                                alt="<?= esc($fullName) ?>"
                                                                onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
                                                            >

                                                            <span
                                                                class="avatar-fallback"
                                                                style="display:none;"
                                                            >
                                                                <?= esc($initials) ?>
                                                            </span>

                                                        <?php else: ?>

                                                            <span class="avatar-fallback">
                                                                <?= esc($initials) ?>
                                                            </span>

                                                        <?php endif; ?>

                                                    </div>


                                                    <div>

                                                        <div class="username">
                                                            <?= esc($fullName) ?>
                                                        </div>

                                                        <div class="user-subtitle">
                                                            @<?= esc($username) ?>
                                                        </div>

                                                    </div>

                                                </div>

                                            </td>


                                            <td>

                                                <?php if (!empty($email)): ?>

                                                    <span class="email-text">
                                                        <?= esc($email) ?>
                                                    </span>

                                                <?php else: ?>

                                                    <span class="no-email">
                                                        No email
                                                    </span>

                                                <?php endif; ?>

                                            </td>


                                            <td>

                                                <span class="id-badge">
                                                    #<?= esc($userId) ?>
                                                </span>

                                            </td>


                                            <td>

                                                <span class="status-pill">

                                                    <span class="status-dot"></span>

                                                    Active

                                                </span>

                                            </td>


                                            <td>

                                                <div class="actions">

                                                    <button
                                                        type="button"
                                                        class="action-btn view-btn view-user-button"
                                                    >
                                                        ◉ View
                                                    </button>


                                                    <a
                                                        href="<?= base_url('users/edit/' . $userId) ?>"
                                                        class="action-btn edit-btn"
                                                    >
                                                        ✎ Edit
                                                    </a>


                                                    <button
                                                        type="button"
                                                        class="action-btn delete-btn delete-user-button"
                                                        data-user-id="<?= esc($userId) ?>"
                                                        data-user-name="<?= esc($fullName) ?>"
                                                    >
                                                        × Delete
                                                    </button>

                                                </div>

                                            </td>

                                        </tr>


                                    <?php endforeach; ?>

                                <?php else: ?>

                                    <tr>

                                        <td
                                            colspan="5"
                                            class="empty-state"
                                        >

                                            <div class="empty-icon">
                                                ♙
                                            </div>

                                            <div class="empty-title">
                                                No users found
                                            </div>

                                            <div class="empty-text">
                                                Add a new user to get started.
                                            </div>

                                        </td>

                                    </tr>

                                <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </section>

            </div>

        </main>

    </div>

</div>


<!-- USER DETAILS DRAWER -->

<div
    class="user-drawer-overlay"
    id="userDrawerOverlay"
></div>


<aside
    class="user-drawer"
    id="userDrawer"
    aria-hidden="true"
>

    <button
        type="button"
        class="drawer-close"
        id="drawerClose"
        aria-label="Close"
    >
        ×
    </button>


    <div class="drawer-profile">

        <div
            class="drawer-avatar"
            id="drawerAvatar"
        >
            U
        </div>


        <h2 id="drawerUsername">
            User
        </h2>


        <p id="drawerProfileUsername">
            @username
        </p>


        <span class="drawer-status">

            <span class="status-dot"></span>

            Active Account

        </span>

    </div>


    <div class="drawer-section">

        <div class="drawer-section-title">
            Account Information
        </div>


        <div class="drawer-info">

            <div class="drawer-info-row">

                <span class="drawer-info-label">
                    Account ID
                </span>

                <span
                    class="drawer-info-value"
                    id="drawerId"
                >
                    —
                </span>

            </div>


            <div class="drawer-info-row">

                <span class="drawer-info-label">
                    Full Name
                </span>

                <span
                    class="drawer-info-value"
                    id="drawerFullName"
                >
                    —
                </span>

            </div>


            <div class="drawer-info-row">

                <span class="drawer-info-label">
                    Username
                </span>

                <span
                    class="drawer-info-value"
                    id="drawerUsernameValue"
                >
                    —
                </span>

            </div>


            <div class="drawer-info-row">

                <span class="drawer-info-label">
                    Email
                </span>

                <span
                    class="drawer-info-value"
                    id="drawerEmail"
                >
                    —
                </span>

            </div>

        </div>

    </div>


    <div class="drawer-section">

        <div class="drawer-section-title">
            Quick Actions
        </div>


        <div class="drawer-actions">

            <a
                href="#"
                id="drawerEdit"
                class="drawer-action drawer-edit"
            >
                ✎ Edit User
            </a>


            <button
                type="button"
                id="drawerDelete"
                class="drawer-action drawer-delete"
            >
                × Delete User
            </button>

        </div>

    </div>


    <div class="drawer-section">

        <div class="drawer-section-title">
            Contact
        </div>


        <div class="drawer-info">

            <div class="drawer-info-row">

                <span class="drawer-info-label">
                    Email
                </span>

                <button
                    type="button"
                    class="drawer-copy"
                    id="copyEmail"
                >
                    Copy Email
                </button>

            </div>

        </div>

    </div>

</aside>


<!-- DELETE MODAL -->

<div
    class="delete-modal"
    id="deleteModal"
    aria-hidden="true"
>

    <div
        class="delete-modal-box"
        role="dialog"
        aria-modal="true"
    >

        <div class="delete-icon">
            !
        </div>


        <h3>
            Delete User?
        </h3>


        <p>

            Are you sure you want to delete

            <span
                class="delete-user-name"
                id="deleteUserName"
            ></span>

            ?

            <br>

            This action cannot be undone.

        </p>


        <div class="modal-actions">

            <button
                type="button"
                class="modal-btn cancel-delete"
                id="cancelDelete"
            >
                Cancel
            </button>


            <button
                type="button"
                class="modal-btn confirm-delete"
                id="confirmDelete"
            >
                Delete User
            </button>

        </div>

    </div>

</div>


<!-- TOAST -->

<div
    class="users-toast"
    id="usersToast"
>
    ✓

    <span id="toastMessage">
        Done
    </span>

</div>


<script>

(function () {

    'use strict';


    const searchInput =
        document.getElementById('userSearch');

    const clearSearch =
        document.getElementById('clearSearch');

    const statCards =
        document.querySelectorAll('[data-filter-stat]');

    const sortUsers =
        document.getElementById('sortUsers');

    const tableBody =
        document.getElementById('usersTableBody');

    const userCount =
        document.getElementById('userCount');

    const viewStatus =
        document.getElementById('viewStatus');

    const resetView =
        document.getElementById('resetView');


    let currentFilter = 'all';


    /* NUMBER ANIMATION */

    document
        .querySelectorAll('.user-stat-number')
        .forEach(function (numberElement) {

            const target = parseInt(
                numberElement.dataset.number || '0',
                10
            );

            let current = 0;

            const duration = 650;

            const startTime =
                performance.now();


            function animateNumber(time) {

                const progress =
                    Math.min(
                        (time - startTime) / duration,
                        1
                    );


                current =
                    Math.floor(
                        progress * target
                    );


                numberElement.textContent =
                    current;


                if (progress < 1) {

                    requestAnimationFrame(
                        animateNumber
                    );

                } else {

                    numberElement.textContent =
                        target;

                }

            }


            requestAnimationFrame(
                animateNumber
            );

        });


    /* FILTER + SEARCH */

    function filterUsers() {

        const search =
            searchInput.value
                .toLowerCase()
                .trim();


        let visibleCount = 0;


        const rows =
            Array.from(
                tableBody.querySelectorAll('.user-row')
            );


        rows.forEach(function (row) {

            const searchable =
                (
                    row.dataset.search || ''
                ).toLowerCase();


            const rowFilter =
                row.dataset.filter || '';


            const isRecent =
                row.dataset.recent === '1';


            const matchesSearch =
                searchable.includes(search);


            const matchesFilter =
                currentFilter === 'all' ||

                (
                    currentFilter === 'no-avatar' &&
                    rowFilter === 'no-avatar'
                ) ||

                (
                    currentFilter === 'recent' &&
                    isRecent
                );


            if (
                matchesSearch &&
                matchesFilter
            ) {

                row.classList.remove(
                    'hidden-row'
                );

                visibleCount++;

            } else {

                row.classList.add(
                    'hidden-row'
                );

            }

        });


        userCount.textContent =
            visibleCount;


        if (search.length > 0) {

            clearSearch.classList.add(
                'show'
            );

        } else {

            clearSearch.classList.remove(
                'show'
            );

        }

    }


    searchInput.addEventListener(
        'input',
        filterUsers
    );


    clearSearch.addEventListener(
        'click',
        function () {

            searchInput.value = '';

            filterUsers();

            searchInput.focus();

        }
    );


    /* VIEW STATUS */

    function updateViewStatus() {

        const labels = {

            all: 'All Users',

            'no-avatar': 'Without Avatar',

            recent: 'Recently Added'

        };


        viewStatus.innerHTML =
            '<span class="view-status-dot"></span>' +
            ' Viewing: ' +
            (
                labels[currentFilter] ||
                'All Users'
            );


        statCards.forEach(function (card) {

            card.classList.toggle(
                'active-stat',
                card.dataset.filterStat ===
                currentFilter
            );

        });

    }


    /* STAT CARD FILTERS */

    statCards.forEach(function (card) {

        card.addEventListener(
            'click',
            function () {

                currentFilter =
                    this.dataset.filterStat ||
                    'all';


                updateViewStatus();

                filterUsers();


                showToast(

                    currentFilter === 'no-avatar'

                        ? 'Showing users without avatars.'

                        : currentFilter === 'recent'

                            ? 'Showing users added in the last 7 days.'

                            : 'Showing all users.'

                );

            }
        );

    });


    /* RESET VIEW */

    resetView.addEventListener(
        'click',
        function () {

            currentFilter = 'all';

            searchInput.value = '';

            sortUsers.value = 'default';


            const rows =
                Array.from(
                    tableBody.querySelectorAll(
                        '.user-row'
                    )
                );


            rows.sort(function (a, b) {

                return (
                    Number(
                        a.dataset.originalIndex || 0
                    ) -

                    Number(
                        b.dataset.originalIndex || 0
                    )
                );

            });


            rows.forEach(function (row) {

                tableBody.appendChild(row);

            });


            updateViewStatus();

            filterUsers();


            showToast(
                'View reset.'
            );

        }
    );


    /* SORTING */

    sortUsers.addEventListener(
        'change',
        function () {

            const sortType =
                this.value;


            const rows =
                Array.from(
                    tableBody.querySelectorAll(
                        '.user-row'
                    )
                );


            if (sortType === 'default') {

                rows.sort(function (a, b) {

                    return (
                        Number(
                            a.dataset.originalIndex || 0
                        ) -

                        Number(
                            b.dataset.originalIndex || 0
                        )
                    );

                });


            } else if (sortType === 'name-asc') {

                rows.sort(function (a, b) {

                    return (
                        a.dataset.name || ''
                    ).localeCompare(
                        b.dataset.name || '',
                        undefined,
                        {
                            numeric: true,
                            sensitivity: 'base'
                        }
                    );

                });


            } else if (sortType === 'name-desc') {

                rows.sort(function (a, b) {

                    return (
                        b.dataset.name || ''
                    ).localeCompare(
                        a.dataset.name || '',
                        undefined,
                        {
                            numeric: true,
                            sensitivity: 'base'
                        }
                    );

                });


            } else if (sortType === 'id-asc') {

                rows.sort(function (a, b) {

                    return (
                        Number(
                            a.dataset.id || 0
                        ) -

                        Number(
                            b.dataset.id || 0
                        )
                    );

                });


            } else if (sortType === 'id-desc') {

                rows.sort(function (a, b) {

                    return (
                        Number(
                            b.dataset.id || 0
                        ) -

                        Number(
                            a.dataset.id || 0
                        )
                    );

                });

            }


            rows.forEach(function (row) {

                tableBody.appendChild(row);

            });


            filterUsers();

        }
    );


    /* INITIAL VIEW */

    updateViewStatus();

    filterUsers();


    /* USER DRAWER */

    const drawer =
        document.getElementById(
            'userDrawer'
        );

    const drawerOverlay =
        document.getElementById(
            'userDrawerOverlay'
        );

    const drawerClose =
        document.getElementById(
            'drawerClose'
        );

    const drawerAvatar =
        document.getElementById(
            'drawerAvatar'
        );

    const drawerUsername =
        document.getElementById(
            'drawerUsername'
        );

    const drawerProfileUsername =
        document.getElementById(
            'drawerProfileUsername'
        );

    const drawerFullName =
        document.getElementById(
            'drawerFullName'
        );

    const drawerUsernameValue =
        document.getElementById(
            'drawerUsernameValue'
        );

    const drawerEmail =
        document.getElementById(
            'drawerEmail'
        );

    const drawerId =
        document.getElementById(
            'drawerId'
        );

    const drawerEdit =
        document.getElementById(
            'drawerEdit'
        );

    const drawerDelete =
        document.getElementById(
            'drawerDelete'
        );

    const copyEmail =
        document.getElementById(
            'copyEmail'
        );


    let selectedDrawerRow = null;


    function openDrawer(row) {

        if (!row) {
            return;
        }


        selectedDrawerRow =
            row;


        const username =
            row.dataset.userName ||
            'User';

        const fullName =
            row.dataset.userFullName ||
            username;

        const email =
            row.dataset.userEmail ||
            '';

        const userId =
            row.dataset.userId ||
            '';

        const avatar =
            row.dataset.userAvatar ||
            '';


        const words =
            fullName
                .trim()
                .split(/\s+/);


        let initials =
            words[0]
                ? words[0]
                    .charAt(0)
                    .toUpperCase()
                : 'U';


        if (words.length > 1) {

            initials +=
                words[
                    words.length - 1
                ]
                .charAt(0)
                .toUpperCase();

        }


        /* DRAWER AVATAR */

        drawerAvatar.innerHTML = '';


        if (avatar) {

            const image =
                document.createElement(
                    'img'
                );


            image.src =
                '<?= base_url('uploads/avatars/') ?>' +
                avatar;


            image.alt =
                fullName;


            image.onerror =
                function () {

                    this.remove();

                    drawerAvatar.textContent =
                        initials;

                };


            drawerAvatar.appendChild(
                image
            );


        } else {

            drawerAvatar.textContent =
                initials;

        }


        drawerUsername.textContent =
            fullName;


        drawerProfileUsername.textContent =
            '@' + username;


        drawerFullName.textContent =
            fullName;


        drawerUsernameValue.textContent =
            username;


        drawerId.textContent =
            '#' + userId;


        drawerEmail.textContent =
            email ||
            'No email';


        drawerEdit.href =
            '<?= base_url('users/edit/') ?>' +
            userId;


        drawer.classList.add(
            'show'
        );


        drawerOverlay.classList.add(
            'show'
        );


        drawer.setAttribute(
            'aria-hidden',
            'false'
        );


        document.body.style.overflow =
            'hidden';


        document
            .querySelectorAll('.user-row')
            .forEach(function (item) {

                item.classList.remove(
                    'selected-row'
                );

            });


        row.classList.add(
            'selected-row'
        );

    }


    function closeDrawer() {

        drawer.classList.remove(
            'show'
        );


        drawerOverlay.classList.remove(
            'show'
        );


        drawer.setAttribute(
            'aria-hidden',
            'true'
        );


        document.body.style.overflow =
            '';


        if (selectedDrawerRow) {

            selectedDrawerRow.classList.remove(
                'selected-row'
            );

        }


        selectedDrawerRow = null;

    }


    document
        .querySelectorAll('.user-row')
        .forEach(function (row) {

            row.addEventListener(
                'click',
                function (event) {

                    if (
                        event.target.closest('a') ||
                        event.target.closest('button')
                    ) {
                        return;
                    }


                    openDrawer(row);

                }
            );

        });


    document
        .querySelectorAll('.view-user-button')
        .forEach(function (button) {

            button.addEventListener(
                'click',
                function (event) {

                    event.stopPropagation();


                    const row =
                        this.closest(
                            '.user-row'
                        );


                    openDrawer(row);

                }
            );

        });


    drawerClose.addEventListener(
        'click',
        closeDrawer
    );


    drawerOverlay.addEventListener(
        'click',
        closeDrawer
    );


    /* COPY EMAIL */

    copyEmail.addEventListener(
        'click',
        function () {

            const email =
                drawerEmail.textContent.trim();


            if (
                !email ||
                email === 'No email'
            ) {

                showToast(
                    'This user has no email address.'
                );

                return;

            }


            navigator.clipboard
                .writeText(email)
                .then(function () {

                    showToast(
                        'Email copied to clipboard.'
                    );

                })
                .catch(function () {

                    showToast(
                        'Unable to copy email.'
                    );

                });

        }
    );


    /* DELETE */

    const deleteModal =
        document.getElementById(
            'deleteModal'
        );

    const deleteUserName =
        document.getElementById(
            'deleteUserName'
        );

    const cancelDelete =
        document.getElementById(
            'cancelDelete'
        );

    const confirmDelete =
        document.getElementById(
            'confirmDelete'
        );

    const deleteButtons =
        document.querySelectorAll(
            '.delete-user-button'
        );


    let selectedUserId = null;


    function openDeleteModal(
        userId,
        username
    ) {

        selectedUserId =
            userId;


        deleteUserName.textContent =
            username;


        deleteModal.classList.add(
            'show'
        );


        deleteModal.setAttribute(
            'aria-hidden',
            'false'
        );


        document.body.style.overflow =
            'hidden';


        setTimeout(
            function () {

                confirmDelete.focus();

            },
            50
        );

    }


    function closeDeleteModal() {

        selectedUserId = null;


        deleteModal.classList.remove(
            'show'
        );


        deleteModal.setAttribute(
            'aria-hidden',
            'true'
        );


        document.body.style.overflow =
            '';

    }


    deleteButtons.forEach(
        function (button) {

            button.addEventListener(
                'click',
                function (event) {

                    event.stopPropagation();


                    openDeleteModal(
                        this.dataset.userId,
                        this.dataset.userName
                    );

                }
            );

        }
    );


    cancelDelete.addEventListener(
        'click',
        closeDeleteModal
    );


    drawerDelete.addEventListener(
        'click',
        function () {

            if (!selectedDrawerRow) {
                return;
            }


            const userId =
                selectedDrawerRow.dataset.userId;


            const fullName =
                selectedDrawerRow.dataset.userFullName ||
                selectedDrawerRow.dataset.userName;


            closeDrawer();


            openDeleteModal(
                userId,
                fullName
            );

        }
    );


    confirmDelete.addEventListener(
        'click',
        function () {

            if (!selectedUserId) {
                return;
            }


            const form =
                document.createElement(
                    'form'
                );


            form.method =
                'POST';


            form.action =
                '<?= base_url('users/delete/') ?>' +
                selectedUserId;


            const csrfInput =
                document.createElement(
                    'input'
                );


            csrfInput.type =
                'hidden';


            csrfInput.name =
                '<?= csrf_token() ?>';


            csrfInput.value =
                '<?= csrf_hash() ?>';


            form.appendChild(
                csrfInput
            );


            document.body.appendChild(
                form
            );


            confirmDelete.disabled =
                true;


            confirmDelete.textContent =
                'Deleting...';


            form.submit();

        }
    );


    deleteModal.addEventListener(
        'click',
        function (event) {

            if (
                event.target ===
                deleteModal
            ) {

                closeDeleteModal();

            }

        }
    );


    /* TOAST */

    const toast =
        document.getElementById(
            'usersToast'
        );

    const toastMessage =
        document.getElementById(
            'toastMessage'
        );

    let toastTimer;


    function showToast(message) {

        toastMessage.textContent =
            message;


        toast.classList.add(
            'show'
        );


        clearTimeout(
            toastTimer
        );


        toastTimer =
            setTimeout(
                function () {

                    toast.classList.remove(
                        'show'
                    );

                },
                2500
            );

    }


    /* KEYBOARD SHORTCUTS */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === '/' &&
                document.activeElement !== searchInput
            ) {

                event.preventDefault();

                searchInput.focus();

            }


            if (
                event.key === 'Escape' &&
                document.activeElement === searchInput &&
                searchInput.value
            ) {

                searchInput.value = '';

                filterUsers();

                searchInput.blur();

                showToast(
                    'Search cleared.'
                );

                return;

            }


            if (
                event.key === 'Escape'
            ) {

                if (
                    drawer.classList.contains(
                        'show'
                    )
                ) {

                    closeDrawer();

                }


                if (
                    deleteModal.classList.contains(
                        'show'
                    )
                ) {

                    closeDeleteModal();

                }

            }

        }
    );


    /* AUTO-HIDE FLASH MESSAGE */

    document
        .querySelectorAll('.users-alert')
        .forEach(function (alert) {

            setTimeout(
                function () {

                    alert.style.transition =
                        'opacity .4s ease, transform .4s ease';

                    alert.style.opacity =
                        '0';

                    alert.style.transform =
                        'translateY(-5px)';

                },
                4500
            );

        });


})();

</script>

</body>

</html>