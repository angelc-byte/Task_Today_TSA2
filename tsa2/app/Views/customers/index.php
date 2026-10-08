<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Customers | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        :root {
            --cc-primary: #205968;
            --cc-primary-dark: #174957;
            --cc-primary-soft: #eaf5f6;
            --cc-accent: #3b7c8b;
            --cc-white: #ffffff;
            --cc-text: #263238;
            --cc-muted: #718087;
            --cc-border: #e3eaec;
            --cc-green: #247a59;
            --cc-green-bg: #e8f5ef;
            --cc-red: #b42318;
            --cc-red-bg: #fff1f0;
            --cc-shadow: 0 8px 28px rgba(24, 63, 72, 0.07);
        }

        .cc-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 25px;
            margin-bottom: 20px;
        }

        .cc-header h1 {
            margin: 5px 0 7px;
            font-size: 31px;
            letter-spacing: -0.6px;
            color: var(--cc-text);
        }

        .cc-header p {
            margin: 0;
            color: var(--cc-muted);
            font-size: 14px;
        }

        .cc-primary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 12px 18px;
            background: var(--cc-primary);
            color: white !important;
            border-radius: 9px;
            text-decoration: none !important;
            font-size: 14px;
            font-weight: 700;
            box-shadow: 0 5px 14px rgba(32, 89, 104, .18);
            transition: .2s ease;
        }

        .cc-primary-button:hover {
            background: var(--cc-primary-dark);
            transform: translateY(-2px);
        }

        .cc-plus {
            font-size: 20px;
        }

        .cc-alert {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 22px;
            padding: 13px 15px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
            animation: alertSlide .3s ease;
        }

        .cc-alert-success {
            background: var(--cc-green-bg);
            border: 1px solid #c9e8d9;
            color: var(--cc-green);
        }

        .cc-alert-error {
            background: var(--cc-red-bg);
            border: 1px solid #f0c8c4;
            color: var(--cc-red);
        }

        .cc-alert-icon {
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 50%;
            background: rgba(255,255,255,.65);
            font-size: 12px;
        }

        @keyframes alertSlide {
            from {
                opacity: 0;
                transform: translateY(-8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cc-stat-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 22px;
        }

        .cc-stat-card {
            position: relative;
            overflow: hidden;
            background: white;
            border: 1px solid var(--cc-border);
            border-radius: 14px;
            padding: 21px;
            box-shadow: 0 4px 16px rgba(24,63,72,.035);
            transition: .25s ease;
            text-decoration: none;
        }

        .cc-stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--cc-shadow);
        }

        .cc-stat-top {
            display: flex;
            justify-content: space-between;
        }

        .cc-stat-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: var(--cc-primary-soft);
            color: var(--cc-primary);
            font-size: 17px;
            font-weight: 700;
        }

        .cc-stat-label {
            color: var(--cc-muted);
            font-size: 12px;
            font-weight: 600;
            margin-top: 15px;
        }

        .cc-stat-number {
            color: var(--cc-text);
            font-size: 28px;
            font-weight: 750;
            line-height: 1;
            margin-top: 5px;
        }

        .cc-stat-note {
            color: var(--cc-muted);
            font-size: 11px;
            margin-top: 8px;
        }

        .cc-quick-actions {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-bottom: 22px;
        }

        .cc-quick-action {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 16px 18px;
            background: white;
            border: 1px solid var(--cc-border);
            border-radius: 12px;
            text-decoration: none !important;
            transition: .22s ease;
        }

        .cc-quick-action:hover {
            transform: translateY(-3px);
            border-color: #cbdde0;
            box-shadow: var(--cc-shadow);
        }

        .cc-quick-icon {
            width: 39px;
            height: 39px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
            background: #f1f6f7;
            color: var(--cc-primary);
            font-size: 17px;
            font-weight: 700;
        }

        .cc-quick-text strong {
            display: block;
            color: var(--cc-text);
            font-size: 13px;
            margin-bottom: 3px;
        }

        .cc-quick-text span {
            color: var(--cc-muted);
            font-size: 11px;
        }

        .cc-quick-arrow {
            margin-left: auto;
            color: #9aa8ad;
        }

        .cc-directory {
            background: white;
            border: 1px solid var(--cc-border);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(24,63,72,.045);
            overflow: hidden;
        }

        .cc-directory-head {
            padding: 22px 24px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--cc-border);
        }

        .cc-directory-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cc-directory-title h2 {
            margin: 0;
            color: var(--cc-text);
            font-size: 16px;
        }

        .cc-directory-badge {
            padding: 4px 8px;
            background: var(--cc-primary-soft);
            color: var(--cc-primary);
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .cc-search-area {
            padding: 18px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            background: #fbfcfc;
            border-bottom: 1px solid var(--cc-border);
        }

        .cc-search {
            position: relative;
            flex: 1;
        }

        .cc-search input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px 43px 12px 16px;
            border: 1px solid #dce5e7;
            border-radius: 9px;
            background: white;
            color: var(--cc-text);
            font-size: 13px;
        }

        .cc-search input:focus {
            outline: none;
            border-color: var(--cc-accent);
            box-shadow: 0 0 0 3px rgba(59,124,139,.10);
        }

        .cc-results {
            flex-shrink: 0;
            color: var(--cc-muted);
            font-size: 12px;
        }

        .cc-customer-row {
            display: grid;
            grid-template-columns:
                52px
                minmax(180px, 1.5fr)
                minmax(180px, 1.3fr)
                110px
                150px;
            align-items: center;
            gap: 15px;
            padding: 17px 24px;
            border-bottom: 1px solid #edf1f2;
            cursor: pointer;
            transition: .2s ease;
        }

        .cc-customer-row:last-child {
            border-bottom: none;
        }

        .cc-customer-row:hover {
            background: #f9fbfb;
        }

        .cc-avatar {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 12px;
            background: linear-gradient(145deg,#eaf5f6,#dcecef);
            color: var(--cc-primary);
            font-size: 13px;
            font-weight: 800;
        }

        .cc-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .cc-customer-name {
            color: var(--cc-text);
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .cc-customer-id {
            color: #9aa8ad;
            font-size: 10px;
        }

        .cc-contact,
        .cc-phone {
            color: #53646a;
            font-size: 12px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .cc-status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 9px;
            background: var(--cc-green-bg);
            color: var(--cc-green);
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .cc-status-dot {
            width: 6px;
            height: 6px;
            background: #2b9a70;
            border-radius: 50%;
        }

        .cc-row-actions {
            display: flex;
            justify-content: flex-end;
            gap: 5px;
        }

        .cc-action {
            width: 31px;
            height: 31px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--cc-border);
            border-radius: 7px;
            background: white;
            color: var(--cc-primary);
            text-decoration: none !important;
            font-size: 13px;
            cursor: pointer;
            transition: .2s ease;
        }

        .cc-action:hover {
            background: var(--cc-primary-soft);
            transform: translateY(-1px);
        }

        .cc-delete-action {
            color: var(--cc-red);
        }

        .cc-delete-action:hover {
            background: var(--cc-red-bg);
            border-color: #f0c8c4;
        }

        .cc-empty {
            display: none;
            padding: 55px 25px;
            text-align: center;
        }

        .cc-empty-icon {
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 14px;
            border-radius: 15px;
            background: var(--cc-primary-soft);
            color: var(--cc-primary);
            font-size: 22px;
        }

        .cc-empty h3 {
            margin: 0 0 5px;
            color: var(--cc-text);
            font-size: 15px;
        }

        .cc-empty p {
            margin: 0;
            color: var(--cc-muted);
            font-size: 12px;
        }

        .cc-overlay {
            position: fixed;
            inset: 0;
            background: rgba(20,42,48,.28);
            backdrop-filter: blur(2px);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: .25s ease;
        }

        .cc-overlay.open {
            opacity: 1;
            visibility: visible;
        }

        .cc-profile-panel {
            position: fixed;
            top: 0;
            right: 0;
            width: min(420px,92vw);
            height: 100vh;
            background: white;
            z-index: 1001;
            box-shadow: -15px 0 40px rgba(20,50,58,.14);
            transform: translateX(105%);
            transition: transform .35s ease;
            overflow-y: auto;
        }

        .cc-profile-panel.open {
            transform: translateX(0);
        }

        .cc-profile-top {
            padding: 22px;
            display: flex;
            justify-content: flex-end;
        }

        .cc-close {
            width: 34px;
            height: 34px;
            border: none;
            border-radius: 9px;
            background: #f2f5f6;
            color: #64747a;
            cursor: pointer;
            font-size: 20px;
        }

        .cc-profile-body {
            padding: 5px 30px 35px;
        }

        .cc-profile-avatar {
            width: 78px;
            height: 78px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 17px;
            border-radius: 22px;
            background: linear-gradient(145deg,#eaf5f6,#d7e9ec);
            color: var(--cc-primary);
            font-size: 23px;
            font-weight: 800;
        }

        .cc-profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cc-profile-body h2 {
            margin: 0;
            color: var(--cc-text);
            font-size: 22px;
        }

        .cc-profile-id {
            margin-top: 5px;
            color: #9aa8ad;
            font-size: 11px;
        }

        .cc-profile-section {
            margin-top: 30px;
        }

        .cc-profile-section-title {
            margin-bottom: 11px;
            color: #8a989d;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .8px;
        }

        .cc-detail {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 0;
            border-bottom: 1px solid #edf1f2;
        }

        .cc-detail-icon {
            width: 33px;
            height: 33px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: #f2f6f7;
            color: var(--cc-primary);
        }

        .cc-detail-label {
            color: #9aa8ad;
            font-size: 10px;
            margin-bottom: 2px;
        }

        .cc-detail-value {
            color: var(--cc-text);
            font-size: 12px;
            font-weight: 600;
            word-break: break-word;
        }

        .cc-profile-edit {
            display: flex;
            justify-content: center;
            padding: 13px;
            margin-top: 28px;
            background: var(--cc-primary);
            color: white !important;
            border-radius: 9px;
            text-decoration: none !important;
            font-size: 13px;
            font-weight: 700;
        }

        .cc-delete-overlay {
            position: fixed;
            inset: 0;
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(20,42,48,.42);
            backdrop-filter: blur(3px);
            opacity: 0;
            visibility: hidden;
            transition: .2s ease;
        }

        .cc-delete-overlay.open {
            opacity: 1;
            visibility: visible;
        }

        .cc-delete-modal {
            width: min(420px,100%);
            background: white;
            border-radius: 16px;
            padding: 26px;
            box-shadow: 0 20px 60px rgba(20,50,58,.20);
            transform: translateY(12px) scale(.97);
            transition: .2s ease;
        }

        .cc-delete-overlay.open .cc-delete-modal {
            transform: translateY(0) scale(1);
        }

        .cc-delete-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            border-radius: 12px;
            background: var(--cc-red-bg);
            color: var(--cc-red);
            font-size: 21px;
            font-weight: 800;
        }

        .cc-delete-modal h3 {
            margin: 0 0 8px;
            color: var(--cc-text);
            font-size: 18px;
        }

        .cc-delete-modal p {
            margin: 0;
            color: var(--cc-muted);
            font-size: 12px;
            line-height: 1.6;
        }

        .cc-delete-name {
            color: var(--cc-text);
            font-weight: 800;
        }

        .cc-delete-warning {
            margin-top: 14px !important;
            padding: 11px 12px;
            border-radius: 8px;
            background: #fff8f7;
            color: #8f3028 !important;
            font-size: 11px !important;
        }

        .cc-delete-actions {
            display: flex;
            justify-content: flex-end;
            gap: 9px;
            margin-top: 22px;
        }

        .cc-delete-cancel,
        .cc-delete-confirm {
            min-height: 40px;
            padding: 0 15px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
        }

        .cc-delete-cancel {
            border: 1px solid var(--cc-border);
            background: white;
            color: #65767c;
        }

        .cc-delete-confirm {
            border: none;
            background: var(--cc-red);
            color: white;
        }

        .cc-delete-confirm:hover {
            background: #941c13;
        }

        @media (max-width: 1050px) {
            .cc-stat-grid {
                grid-template-columns: repeat(2,1fr);
            }

            .cc-customer-row {
                grid-template-columns:
                    52px
                    minmax(160px,1.5fr)
                    minmax(150px,1.2fr)
                    100px
                    120px;
            }
        }

        @media (max-width: 760px) {
            .cc-header {
                align-items: stretch;
                flex-direction: column;
            }

            .cc-stat-grid {
                grid-template-columns: 1fr 1fr;
            }

            .cc-quick-actions {
                grid-template-columns: 1fr;
            }

            .cc-search-area {
                align-items: stretch;
                flex-direction: column;
            }

            .cc-results {
                text-align: right;
            }

            .cc-customer-row {
                grid-template-columns: 45px 1fr auto;
            }

            .cc-contact,
            .cc-phone,
            .cc-status {
                display: none;
            }

            .cc-row-actions {
                opacity: 1;
            }
        }

        @media (max-width: 500px) {
            .cc-stat-grid {
                grid-template-columns: 1fr;
            }

            .cc-delete-actions {
                flex-direction: column-reverse;
            }

            .cc-delete-cancel,
            .cc-delete-confirm {
                width: 100%;
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

            <section class="cc-header">

                <div>

                    <span class="eyebrow">
                        CUSTOMER MANAGEMENT
                    </span>

                    <h1>
                        Customers
                    </h1>

                    <p>
                        Manage customer records and contact information.
                    </p>

                </div>

            </section>

            <?php if (session()->getFlashdata('success')): ?>

                <div class="cc-alert cc-alert-success">

                    <span class="cc-alert-icon">
                        ✓
                    </span>

                    <span>
                        <?= esc(session()->getFlashdata('success')) ?>
                    </span>

                </div>

            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>

                <div class="cc-alert cc-alert-error">

                    <span class="cc-alert-icon">
                        !
                    </span>

                    <span>
                        <?= esc(session()->getFlashdata('error')) ?>
                    </span>

                </div>

            <?php endif; ?>

            <?php

                $customerTotal =
                    count($customers ?? []);

                $contactReady = 0;

                $thisMonth = 0;

                $currentMonth =
                    date('Y-m');

                foreach (($customers ?? []) as $customer) {

                    if (
                        !empty($customer['email']) &&
                        !empty($customer['phone'])
                    ) {
                        $contactReady++;
                    }

                    if (
                        !empty($customer['created_at']) &&
                        strpos(
                            $customer['created_at'],
                            $currentMonth
                        ) === 0
                    ) {
                        $thisMonth++;
                    }

                }

            ?>

            <section class="cc-stat-grid">

                <div class="cc-stat-card">

                    <div class="cc-stat-top">

                        <div class="cc-stat-icon">
                            ♙
                        </div>

                    </div>

                    <div class="cc-stat-label">
                        TOTAL CUSTOMERS
                    </div>

                    <div class="cc-stat-number">
                        <?= $customerTotal ?>
                    </div>

                    <div class="cc-stat-note">
                        Customer records in directory
                    </div>

                </div>

                <div class="cc-stat-card">

                    <div class="cc-stat-top">

                        <div class="cc-stat-icon">
                            ✓
                        </div>

                    </div>

                    <div class="cc-stat-label">
                        CONTACT READY
                    </div>

                    <div class="cc-stat-number">
                        <?= $contactReady ?>
                    </div>

                    <div class="cc-stat-note">
                        Email and phone available
                    </div>

                </div>

                <div class="cc-stat-card">

                    <div class="cc-stat-top">

                        <div class="cc-stat-icon">
                            ✦
                        </div>

                    </div>

                    <div class="cc-stat-label">
                        ADDED THIS MONTH
                    </div>

                    <div class="cc-stat-number">
                        <?= $thisMonth ?>
                    </div>

                    <div class="cc-stat-note">
                        Newly recorded customers
                    </div>

                </div>

                <a
                    href="<?= base_url('customers/new') ?>"
                    class="cc-stat-card"
                >

                    <div class="cc-stat-top">

                        <div class="cc-stat-icon">
                            +
                        </div>

                    </div>

                    <div class="cc-stat-label">
                        QUICK ACTION
                    </div>

                    <div
                        class="cc-stat-number"
                        style="font-size:20px;"
                    >
                        Add New
                    </div>

                    <div class="cc-stat-note">
                        Create a customer record →
                    </div>

                </a>

            </section>

            <section class="cc-directory">

                <div class="cc-directory-head">

                    <div class="cc-directory-title">

                        <h2>
                            Customer Directory
                        </h2>

                        <span
                            class="cc-directory-badge"
                            id="directoryBadge"
                        >
                            <?= $customerTotal ?> RECORDS
                        </span>

                    </div>

                </div>

                <div class="cc-search-area">

                    <div class="cc-search">

                        <input
                            type="text"
                            id="customerSearch"
                            placeholder="Search by name, email, or phone..."
                            autocomplete="off"
                        >

                    </div>

                    <div class="cc-results">

                        <span id="resultCount">
                            <?= $customerTotal ?>
                        </span>

                        shown

                    </div>

                </div>

                <div
                    class="cc-customer-list"
                    id="customerList"
                >

                    <?php if (!empty($customers)): ?>

                        <?php foreach ($customers as $customer): ?>

                            <?php

                                $name =
                                    $customer['full_name']
                                    ?? 'Unknown Customer';

                                $words =
                                    preg_split(
                                        '/\s+/',
                                        trim($name)
                                    );

                                $initials = '';

                                if (!empty($words[0])) {

                                    $initials .=
                                        strtoupper(
                                            substr(
                                                $words[0],
                                                0,
                                                1
                                            )
                                        );

                                }

                                if (count($words) > 1) {

                                    $initials .=
                                        strtoupper(
                                            substr(
                                                $words[
                                                    count($words) - 1
                                                ],
                                                0,
                                                1
                                            )
                                        );

                                }

                                $avatarPath = '';

                                if (!empty($customer['avatar'])) {

                                    $avatarFile =
                                        FCPATH .
                                        'uploads/customers/' .
                                        $customer['avatar'];

                                    if (is_file($avatarFile)) {

                                        $avatarPath =
                                            base_url(
                                                'uploads/customers/' .
                                                $customer['avatar']
                                            );

                                    }

                                }

                            ?>

                            <div
                                class="cc-customer-row"
                                data-name="<?= esc(strtolower($name)) ?>"
                                data-email="<?= esc(strtolower($customer['email'] ?? '')) ?>"
                                data-phone="<?= esc(strtolower($customer['phone'] ?? '')) ?>"
                                data-id="<?= esc($customer['id']) ?>"
                                data-fullname="<?= esc($name) ?>"
                                data-email-display="<?= esc($customer['email'] ?? 'Not provided') ?>"
                                data-phone-display="<?= esc($customer['phone'] ?? 'Not provided') ?>"
                                data-created="<?= esc($customer['created_at'] ?? 'Not available') ?>"
                                data-avatar="<?= esc($avatarPath) ?>"
                            >

                                <div class="cc-avatar">

                                    <?php if (!empty($avatarPath)): ?>

                                        <img
                                            src="<?= esc($avatarPath) ?>"
                                            alt="<?= esc($name) ?>"
                                            onerror="this.parentElement.innerHTML='<?= esc($initials) ?>';"
                                        >

                                    <?php else: ?>

                                        <?= esc($initials) ?>

                                    <?php endif; ?>

                                </div>

                                <div>

                                    <div class="cc-customer-name">

                                        <?= esc($name) ?>

                                    </div>

                                    <div class="cc-customer-id">

                                        Customer #<?= esc($customer['id']) ?>

                                    </div>

                                </div>

                                <div class="cc-contact">

                                    <?= esc($customer['email'] ?? 'No email') ?>

                                </div>

                                <div class="cc-phone">

                                    <span class="cc-status">

                                        <span class="cc-status-dot"></span>

                                        Active

                                    </span>

                                </div>

                                <div class="cc-row-actions">

                                    <a
                                        href="<?= base_url('customers/edit/' . $customer['id']) ?>"
                                        class="cc-action"
                                        title="Edit customer"
                                        onclick="event.stopPropagation();"
                                    >
                                        ✎
                                    </a>

                                    <button
                                        type="button"
                                        class="cc-action"
                                        title="View customer"
                                        onclick="event.stopPropagation(); openCustomer(this.closest('.cc-customer-row'));"
                                    >
                                        →
                                    </button>

                                    <button
                                        type="button"
                                        class="cc-action cc-delete-action"
                                        title="Delete customer"
                                        onclick="event.stopPropagation(); openDeleteModal(
                                            <?= esc($customer['id']) ?>,
                                            <?= htmlspecialchars(json_encode($name), ENT_QUOTES, 'UTF-8') ?>
                                        );"
                                    >
                                        ×
                                    </button>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>

                <div
                    class="cc-empty"
                    id="emptyState"
                >

                    <div class="cc-empty-icon">
                        ⌕
                    </div>

                    <h3>
                        No customers found
                    </h3>

                    <p>
                        Try a different name, email, or phone number.
                    </p>

                </div>

            </section>

        </main>

    </div>

</div>

<div
    class="cc-overlay"
    id="profileOverlay"
    onclick="closeCustomer()"
></div>

<aside
    class="cc-profile-panel"
    id="profilePanel"
>

    <div class="cc-profile-top">

        <button
            type="button"
            class="cc-close"
            onclick="closeCustomer()"
        >
            ×
        </button>

    </div>

    <div class="cc-profile-body">

        <div
            class="cc-profile-avatar"
            id="profileAvatar"
        >
            AC
        </div>

        <h2 id="profileName">
            Customer
        </h2>

        <div
            class="cc-profile-id"
            id="profileId"
        >
            Customer #000
        </div>

        <div class="cc-profile-section">

            <div class="cc-profile-section-title">
                Contact Information
            </div>

            <div class="cc-detail">

                <div class="cc-detail-icon">
                    @
                </div>

                <div>

                    <div class="cc-detail-label">
                        EMAIL
                    </div>

                    <div
                        class="cc-detail-value"
                        id="profileEmail"
                    >
                        -
                    </div>

                </div>

            </div>

            <div class="cc-detail">

                <div class="cc-detail-icon">
                    ☎
                </div>

                <div>

                    <div class="cc-detail-label">
                        PHONE
                    </div>

                    <div
                        class="cc-detail-value"
                        id="profilePhone"
                    >
                        -
                    </div>

                </div>

            </div>

        </div>

        <div class="cc-profile-section">

            <div class="cc-profile-section-title">
                Account Information
            </div>

            <div class="cc-detail">

                <div class="cc-detail-icon">
                    #
                </div>

                <div>

                    <div class="cc-detail-label">
                        CUSTOMER ID
                    </div>

                    <div
                        class="cc-detail-value"
                        id="profileCustomerId"
                    >
                        -
                    </div>

                </div>

            </div>

            <div class="cc-detail">

                <div class="cc-detail-icon">
                    ◷
                </div>

                <div>

                    <div class="cc-detail-label">
                        CREATED
                    </div>

                    <div
                        class="cc-detail-value"
                        id="profileCreated"
                    >
                        -
                    </div>

                </div>

            </div>

        </div>

        <a
            href="#"
            class="cc-profile-edit"
            id="profileEdit"
        >
            Edit Customer
        </a>

    </div>

</aside>

<div
    class="cc-delete-overlay"
    id="deleteOverlay"
>

    <div class="cc-delete-modal">

        <div class="cc-delete-icon">
            !
        </div>

        <h3>
            Delete Customer?
        </h3>

        <p>

            Are you sure you want to delete

            <span
                class="cc-delete-name"
                id="deleteCustomerName"
            >
                this customer
            </span>?

        </p>

        <p class="cc-delete-warning">

            This action cannot be undone. The customer record and their uploaded avatar will be permanently deleted.

        </p>

        <div class="cc-delete-actions">

            <button
                type="button"
                class="cc-delete-cancel"
                onclick="closeDeleteModal()"
            >
                Cancel
            </button>

            <button
                type="button"
                class="cc-delete-confirm"
                id="confirmDeleteButton"
            >
                Delete Customer
            </button>

        </div>

    </div>

</div>

<script>

    const searchInput =
        document.getElementById('customerSearch');

    const resultCount =
        document.getElementById('resultCount');

    const directoryBadge =
        document.getElementById('directoryBadge');

    const emptyState =
        document.getElementById('emptyState');

    const customerRows =
        document.querySelectorAll('.cc-customer-row');

    function filterCustomers() {

        const value =
            searchInput.value
                .toLowerCase()
                .trim();

        let visible = 0;

        customerRows.forEach(function(row) {

            const name =
                row.dataset.name || '';

            const email =
                row.dataset.email || '';

            const phone =
                row.dataset.phone || '';

            const id =
                row.dataset.id || '';

            const match =
                name.includes(value) ||
                email.includes(value) ||
                phone.includes(value) ||
                id.includes(value);

            if (match) {

                row.style.display = 'grid';

                visible++;

            } else {

                row.style.display = 'none';

            }

        });

        resultCount.textContent =
            visible;

        directoryBadge.textContent =
            visible +
            (
                visible === 1
                    ? ' RECORD'
                    : ' RECORDS'
            );

        emptyState.style.display =
            visible === 0
                ? 'block'
                : 'none';

    }

    searchInput.addEventListener(
        'input',
        filterCustomers
    );

    const profilePanel =
        document.getElementById('profilePanel');

    const profileOverlay =
        document.getElementById('profileOverlay');

    function openCustomer(row) {

        if (!row) {
            return;
        }

        const fullName =
            row.dataset.fullname || 'Customer';

        const email =
            row.dataset.emailDisplay ||
            'Not provided';

        const phone =
            row.dataset.phoneDisplay ||
            'Not provided';

        const customerId =
            row.dataset.id || '';

        const created =
            row.dataset.created ||
            'Not available';

        const avatar =
            row.dataset.avatar || '';

        const avatarElement =
            document.getElementById('profileAvatar');

        document.getElementById(
            'profileName'
        ).textContent = fullName;

        if (avatar) {

            avatarElement.innerHTML =
                '<img src="' +
                avatar +
                '" alt="Customer Avatar">';

        } else {

            avatarElement.textContent =
                getInitials(fullName);

        }

        document.getElementById(
            'profileId'
        ).textContent =
            'Customer #' + customerId;

        document.getElementById(
            'profileEmail'
        ).textContent = email;

        document.getElementById(
            'profilePhone'
        ).textContent = phone;

        document.getElementById(
            'profileCustomerId'
        ).textContent = customerId;

        document.getElementById(
            'profileCreated'
        ).textContent = created;

        document.getElementById(
            'profileEdit'
        ).href =
            '<?= base_url('customers/edit/') ?>' +
            customerId;

        profilePanel.classList.add('open');

        profileOverlay.classList.add('open');

        document.body.style.overflow = 'hidden';

    }

    function closeCustomer() {

        profilePanel.classList.remove('open');

        profileOverlay.classList.remove('open');

        document.body.style.overflow = '';

    }

    function getInitials(name) {

        const words =
            name.trim().split(/\s+/);

        if (words.length === 1) {

            return words[0]
                .substring(0,2)
                .toUpperCase();

        }

        return (
            words[0][0] +
            words[words.length - 1][0]
        ).toUpperCase();

    }

    customerRows.forEach(function(row) {

        row.addEventListener(
            'click',
            function(event) {

                if (
                    event.target.closest('.cc-action')
                ) {
                    return;
                }

                openCustomer(row);

            }
        );

    });

    const deleteOverlay =
        document.getElementById('deleteOverlay');

    const deleteCustomerName =
        document.getElementById('deleteCustomerName');

    const confirmDeleteButton =
        document.getElementById('confirmDeleteButton');

    function openDeleteModal(id, name) {

        deleteCustomerName.textContent =
            name;

        confirmDeleteButton.onclick =
            function() {

                const form =
                    document.createElement('form');

                form.method = 'POST';

                form.action =
                    '<?= base_url('customers/delete/') ?>' +
                    id;

                const csrfInput =
                    document.createElement('input');

                csrfInput.type = 'hidden';

                csrfInput.name =
                    '<?= csrf_token() ?>';

                csrfInput.value =
                    '<?= csrf_hash() ?>';

                form.appendChild(csrfInput);

                document.body.appendChild(form);

                form.submit();

            };

        deleteOverlay.classList.add('open');

        document.body.style.overflow =
            'hidden';

    }

    function closeDeleteModal() {

        deleteOverlay.classList.remove('open');

        document.body.style.overflow =
            '';

    }

    deleteOverlay.addEventListener(
        'click',
        function(event) {

            if (
                event.target === deleteOverlay
            ) {

                closeDeleteModal();

            }

        }
    );

    document.addEventListener(
        'keydown',
        function(event) {

            if (event.key === 'Escape') {

                closeCustomer();

                closeDeleteModal();

            }

        }
    );

    setTimeout(function() {

        const alert =
            document.querySelector('.cc-alert');

        if (alert) {

            alert.style.opacity = '0';

            alert.style.transform =
                'translateY(-8px)';

            alert.style.transition =
                'opacity .3s ease, transform .3s ease';

            setTimeout(function() {

                alert.remove();

            }, 300);

        }

    }, 4000);

</script>

</body>

</html>