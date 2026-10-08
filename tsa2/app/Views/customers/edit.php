<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Customer | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        /* =====================================================
           EDIT CUSTOMER — CUSTOMER MANAGEMENT CENTER
           ===================================================== */

        .customer-form-page {
            max-width: 1180px;
            margin: 0 auto;
        }


        /* =====================================================
           HEADER
           ===================================================== */

        .cf-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 25px;
            margin-bottom: 25px;
        }


        .cf-header-copy h1 {
            margin: 6px 0 7px;
            font-size: 31px;
            letter-spacing: -0.6px;
            color: #263238;
        }


        .cf-header-copy p {
            margin: 0;
            color: #718087;
            font-size: 14px;
        }


        .cf-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 15px;
            border: 1px solid #dfe7e9;
            border-radius: 9px;
            background: #ffffff;
            color: #52666d;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: .2s ease;
        }


        .cf-back:hover {
            color: #205968;
            border-color: #bcd3d8;
            transform: translateY(-1px);
        }


        /* =====================================================
           GRID
           ===================================================== */

        .cf-grid {
            display: grid;
            grid-template-columns:
                minmax(0, 1.7fr)
                minmax(280px, .8fr);
            gap: 20px;
            align-items: start;
        }


        /* =====================================================
           CARD
           ===================================================== */

        .cf-card {
            background: #ffffff;
            border: 1px solid #e3eaec;
            border-radius: 16px;
            box-shadow:
                0 8px 28px rgba(24, 63, 72, 0.06);
            overflow: hidden;
        }


        .cf-card-header {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 21px 24px;
            border-bottom: 1px solid #edf1f2;
        }


        .cf-card-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: #eaf5f6;
            color: #205968;
            font-size: 18px;
            font-weight: 800;
        }


        .cf-card-header h2 {
            margin: 0;
            color: #263238;
            font-size: 16px;
        }


        .cf-card-header p {
            margin: 3px 0 0;
            color: #8a989d;
            font-size: 11px;
        }


        .cf-form {
            padding: 26px 24px;
        }


        /* =====================================================
           ERROR BOX
           ===================================================== */

        .cf-errors {
            margin-bottom: 22px;
            padding: 14px 16px;
            border: 1px solid #f2c7c3;
            border-radius: 10px;
            background: #fff5f4;
            color: #b42318;
            font-size: 12px;
        }


        .cf-errors-title {
            margin-bottom: 6px;
            font-weight: 800;
        }


        .cf-errors p {
            margin: 4px 0;
        }


        /* =====================================================
           FORM
           ===================================================== */

        .cf-field {
            margin-bottom: 21px;
        }


        .cf-label-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
        }


        .cf-label {
            color: #34474e;
            font-size: 12px;
            font-weight: 800;
        }


        .cf-required {
            color: #b42318;
            font-size: 10px;
            font-weight: 700;
        }


        .cf-optional {
            color: #9aa7ac;
            font-size: 10px;
        }


        .cf-input-wrap {
            position: relative;
        }


        .cf-input-icon {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            color: #829197;
            font-size: 14px;
            pointer-events: none;
        }


        .cf-input {
            width: 100%;
            box-sizing: border-box;
            min-height: 45px;
            padding: 11px 13px 11px 39px;
            border: 1px solid #dce5e7;
            border-radius: 9px;
            background: #fbfcfc;
            color: #263238;
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }


        .cf-input:hover {
            border-color: #bfd1d5;
            background: #ffffff;
        }


        .cf-input:focus {
            border-color: #3b7c8b;
            background: #ffffff;
            box-shadow:
                0 0 0 3px rgba(59, 124, 139, .10);
        }


        .cf-help {
            margin-top: 6px;
            color: #8b999e;
            font-size: 10px;
        }


        /* =====================================================
           AVATAR UPLOAD
           ===================================================== */

        .cf-avatar-upload {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 14px;
            border: 1px dashed #cbdadd;
            border-radius: 11px;
            background: #fbfcfc;
            transition: .2s ease;
        }


        .cf-avatar-upload:hover {
            border-color: #8fb5bd;
            background: #f7fafb;
        }


        .cf-avatar-upload-preview {
            width: 64px;
            height: 64px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 17px;
            background: #eaf5f6;
            color: #205968;
            font-size: 19px;
            font-weight: 800;
            border: 1px solid #d6e6e8;
        }


        .cf-avatar-upload-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .cf-avatar-upload-content {
            flex: 1;
            min-width: 0;
        }


        .cf-avatar-upload-content strong {
            display: block;
            margin-bottom: 4px;
            color: #34474e;
            font-size: 12px;
        }


        .cf-avatar-upload-content span {
            display: block;
            margin-bottom: 9px;
            color: #8b999e;
            font-size: 10px;
        }


        .cf-file-input {
            width: 100%;
            max-width: 100%;
            color: #61737a;
            font-family: inherit;
            font-size: 11px;
        }


        .cf-file-input::file-selector-button {
            margin-right: 8px;
            padding: 7px 10px;
            border: 1px solid #cddcdf;
            border-radius: 7px;
            background: #ffffff;
            color: #205968;
            font-family: inherit;
            font-size: 10px;
            font-weight: 800;
            cursor: pointer;
        }


        .cf-file-input::file-selector-button:hover {
            background: #eaf5f6;
        }


        .cf-file-error {
            display: none;
            margin-top: 7px;
            color: #b42318;
            font-size: 10px;
            font-weight: 700;
        }


        /* =====================================================
           CURRENT AVATAR LABEL
           ===================================================== */

        .cf-current-avatar {
            margin-top: 7px;
            color: #8b999e;
            font-size: 10px;
        }


        /* =====================================================
           ACTIONS
           ===================================================== */

        .cf-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            padding-top: 7px;
            margin-top: 7px;
            border-top: 1px solid #edf1f2;
        }


        .cf-save {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 43px;
            padding: 0 19px;
            border: 0;
            border-radius: 9px;
            background: #205968;
            color: #ffffff;
            font-family: inherit;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
            box-shadow:
                0 5px 14px rgba(32, 89, 104, .17);
            transition: .2s ease;
        }


        .cf-save:hover {
            background: #174957;
            transform: translateY(-2px);
            box-shadow:
                0 8px 18px rgba(32, 89, 104, .22);
        }


        .cf-save:active {
            transform: translateY(0);
        }


        .cf-cancel {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 43px;
            padding: 0 17px;
            border: 1px solid #dce5e7;
            border-radius: 9px;
            background: #ffffff;
            color: #65767c;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: .2s ease;
        }


        .cf-cancel:hover {
            background: #f5f8f9;
            color: #263238;
        }


        /* =====================================================
           CUSTOMER PROFILE PANEL
           ===================================================== */

        .cf-profile {
            position: sticky;
            top: 25px;
            background: #205968;
            border-radius: 16px;
            padding: 24px;
            color: #ffffff;
            overflow: hidden;
            box-shadow:
                0 12px 30px rgba(32, 89, 104, .16);
        }


        .cf-profile::before {
            content: "";
            position: absolute;
            width: 190px;
            height: 190px;
            right: -80px;
            top: -75px;
            border-radius: 50%;
            border: 30px solid rgba(255,255,255,.045);
        }


        .cf-profile-label {
            position: relative;
            z-index: 2;
            color: rgba(255,255,255,.55);
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }


        .cf-avatar {
            position: relative;
            z-index: 2;
            width: 78px;
            height: 78px;
            margin: 27px auto 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 23px;
            background: rgba(255,255,255,.13);
            border: 1px solid rgba(255,255,255,.13);
            color: #ffffff;
            font-size: 25px;
            font-weight: 800;
        }


        .cf-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .cf-profile-name {
            position: relative;
            z-index: 2;
            margin: 0;
            text-align: center;
            color: #ffffff;
            font-size: 19px;
            font-weight: 800;
            word-break: break-word;
        }


        .cf-profile-id {
            position: relative;
            z-index: 2;
            margin: 6px 0 20px;
            text-align: center;
            color: rgba(255,255,255,.55);
            font-size: 10px;
        }


        .cf-status {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            width: fit-content;
            margin: 0 auto 20px;
            padding: 6px 10px;
            border-radius: 20px;
            background: rgba(116,213,168,.11);
            color: #a5e7c5;
            font-size: 10px;
            font-weight: 800;
        }


        .cf-status-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #74d5a8;
            box-shadow:
                0 0 7px rgba(116,213,168,.6);
        }


        .cf-profile-line {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 12px 0;
            border-top: 1px solid rgba(255,255,255,.10);
            color: rgba(255,255,255,.72);
            font-size: 11px;
            word-break: break-word;
        }


        .cf-profile-icon {
            width: 28px;
            height: 28px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: rgba(255,255,255,.08);
            color: #ffffff;
        }


        .cf-profile-note {
            position: relative;
            z-index: 2;
            margin-top: 18px;
            padding: 12px;
            border-radius: 9px;
            background: rgba(255,255,255,.07);
            color: rgba(255,255,255,.58);
            font-size: 10px;
            line-height: 1.5;
        }


        /* =====================================================
           RESPONSIVE
           ===================================================== */

        @media (max-width: 900px) {

            .cf-grid {
                grid-template-columns: 1fr;
            }


            .cf-profile {
                position: relative;
                top: auto;
            }

        }


        @media (max-width: 600px) {

            .cf-header {
                align-items: stretch;
                flex-direction: column;
            }


            .cf-back {
                justify-content: center;
            }


            .cf-form {
                padding: 21px 18px;
            }


            .cf-card-header {
                padding: 18px;
            }


            .cf-avatar-upload {
                align-items: flex-start;
            }


            .cf-actions {
                flex-direction: column;
                align-items: stretch;
            }


            .cf-save,
            .cf-cancel {
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

            <div class="customer-form-page">


                <!-- =================================================
                     HEADER
                     ================================================= -->

                <section class="cf-header">

                    <div class="cf-header-copy">

                        <span class="eyebrow">
                            CUSTOMER MANAGEMENT
                        </span>

                        <h1>
                            Edit Customer
                        </h1>

                        <p>
                            Update the customer's information and keep the record accurate.
                        </p>

                    </div>


                    <a
                        href="<?= base_url('customers') ?>"
                        class="cf-back"
                    >
                        ← Back to Customers
                    </a>

                </section>


                <!-- =================================================
                     CONTENT
                     ================================================= -->

                <section class="cf-grid">


                    <!-- =================================================
                         FORM
                         ================================================= -->

                    <div class="cf-card">

                        <div class="cf-card-header">

                            <div class="cf-card-icon">
                                ✎
                            </div>

                            <div>

                                <h2>
                                    Customer Information
                                </h2>

                                <p>
                                    Update the customer's basic details.
                                </p>

                            </div>

                        </div>


                        <div class="cf-form">


                            <?php if ($errors = session()->getFlashdata('errors')): ?>

                                <div class="cf-errors">

                                    <div class="cf-errors-title">
                                        Please check the following:
                                    </div>

                                    <?php foreach ($errors as $error): ?>

                                        <p>
                                            <?= esc($error) ?>
                                        </p>

                                    <?php endforeach; ?>

                                </div>

                            <?php endif; ?>


                            <form
                                action="<?= base_url('customers/update/' . $customer['id']) ?>"
                                method="post"
                                enctype="multipart/form-data"
                                id="customerForm"
                            >

                                <?= csrf_field() ?>


                                <!-- FULL NAME -->

                                <div class="cf-field">

                                    <div class="cf-label-row">

                                        <label
                                            for="full_name"
                                            class="cf-label"
                                        >
                                            Full Name
                                        </label>

                                        <span class="cf-required">
                                            REQUIRED
                                        </span>

                                    </div>


                                    <div class="cf-input-wrap">

                                        <span class="cf-input-icon">
                                            ♙
                                        </span>

                                        <input
                                            type="text"
                                            id="full_name"
                                            name="full_name"
                                            class="cf-input"
                                            value="<?= old('full_name', $customer['full_name']) ?>"
                                            placeholder="Enter customer's full name"
                                            autocomplete="name"
                                            required
                                        >

                                    </div>

                                </div>


                                <!-- EMAIL -->

                                <div class="cf-field">

                                    <div class="cf-label-row">

                                        <label
                                            for="email"
                                            class="cf-label"
                                        >
                                            Email Address
                                        </label>

                                        <span class="cf-required">
                                            REQUIRED
                                        </span>

                                    </div>


                                    <div class="cf-input-wrap">

                                        <span class="cf-input-icon">
                                            @
                                        </span>

                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            class="cf-input"
                                            value="<?= old('email', $customer['email']) ?>"
                                            placeholder="customer@email.com"
                                            autocomplete="email"
                                            required
                                        >

                                    </div>

                                </div>


                                <!-- PHONE -->

                                <div class="cf-field">

                                    <div class="cf-label-row">

                                        <label
                                            for="phone"
                                            class="cf-label"
                                        >
                                            Phone Number
                                        </label>

                                        <span class="cf-optional">
                                            OPTIONAL
                                        </span>

                                    </div>


                                    <div class="cf-input-wrap">

                                        <span class="cf-input-icon">
                                            ☎
                                        </span>

                                        <input
                                            type="text"
                                            id="phone"
                                            name="phone"
                                            class="cf-input"
                                            value="<?= old('phone', $customer['phone']) ?>"
                                            placeholder="09XX XXX XXXX"
                                            autocomplete="tel"
                                        >

                                    </div>


                                    <div class="cf-help">
                                        Update the phone number if the customer's contact information has changed.
                                    </div>

                                </div>


                                <!-- CUSTOMER AVATAR -->

                                <div class="cf-field">

                                    <div class="cf-label-row">

                                        <label
                                            for="avatar"
                                            class="cf-label"
                                        >
                                            Customer Avatar
                                        </label>

                                        <span class="cf-optional">
                                            OPTIONAL
                                        </span>

                                    </div>


                                    <div class="cf-avatar-upload">

                                        <div
                                            class="cf-avatar-upload-preview"
                                            id="uploadPreview"
                                        >

                                            <?php if (!empty($customer['avatar'])): ?>

                                                <?php
                                                    $avatarPath =
                                                        FCPATH .
                                                        'uploads/customers/' .
                                                        $customer['avatar'];
                                                ?>

                                                <?php if (is_file($avatarPath)): ?>

                                                    <img
                                                        src="<?= base_url('uploads/customers/' . $customer['avatar']) ?>"
                                                        alt="Current Customer Avatar"
                                                    >

                                                <?php else: ?>

                                                    <span id="uploadInitials">
                                                        <?php
                                                            $nameParts =
                                                                preg_split(
                                                                    '/\s+/',
                                                                    trim($customer['full_name'])
                                                                );

                                                            if (count($nameParts) >= 2) {

                                                                echo esc(
                                                                    strtoupper(
                                                                        substr($nameParts[0], 0, 1) .
                                                                        substr(
                                                                            $nameParts[count($nameParts) - 1],
                                                                            0,
                                                                            1
                                                                        )
                                                                    )
                                                                );

                                                            } else {

                                                                echo esc(
                                                                    strtoupper(
                                                                        substr(
                                                                            $customer['full_name'],
                                                                            0,
                                                                            2
                                                                        )
                                                                    )
                                                                );

                                                            }
                                                        ?>
                                                    </span>

                                                <?php endif; ?>

                                            <?php else: ?>

                                                <span id="uploadInitials">
                                                    <?php
                                                        $nameParts =
                                                            preg_split(
                                                                '/\s+/',
                                                                trim($customer['full_name'])
                                                            );

                                                        if (count($nameParts) >= 2) {

                                                            echo esc(
                                                                strtoupper(
                                                                    substr($nameParts[0], 0, 1) .
                                                                    substr(
                                                                        $nameParts[count($nameParts) - 1],
                                                                        0,
                                                                        1
                                                                    )
                                                                )
                                                            );

                                                        } else {

                                                            echo esc(
                                                                strtoupper(
                                                                    substr(
                                                                        $customer['full_name'],
                                                                        0,
                                                                        2
                                                                    )
                                                                )
                                                            );

                                                        }
                                                    ?>
                                                </span>

                                            <?php endif; ?>

                                        </div>


                                        <div class="cf-avatar-upload-content">

                                            <strong>
                                                Change customer photo
                                            </strong>

                                            <span>
                                                JPG or PNG only • Maximum 2 MB
                                            </span>

                                            <input
                                                type="file"
                                                id="avatar"
                                                name="avatar"
                                                class="cf-file-input"
                                                accept="image/jpeg,image/png"
                                            >


                                            <?php if (!empty($customer['avatar'])): ?>

                                                <div class="cf-current-avatar">
                                                    A new photo will replace the current avatar.
                                                </div>

                                            <?php else: ?>

                                                <div class="cf-current-avatar">
                                                    This customer currently has no avatar.
                                                </div>

                                            <?php endif; ?>


                                            <div
                                                class="cf-file-error"
                                                id="fileError"
                                            ></div>

                                        </div>

                                    </div>

                                </div>


                                <!-- ACTIONS -->

                                <div class="cf-actions">

                                    <button
                                        type="submit"
                                        class="cf-save"
                                    >
                                        ✓
                                        Update Customer
                                    </button>


                                    <a
                                        href="<?= base_url('customers') ?>"
                                        class="cf-cancel"
                                    >
                                        Cancel
                                    </a>

                                </div>


                            </form>

                        </div>

                    </div>


                    <!-- =================================================
                         PROFILE
                         ================================================= -->

                    <aside class="cf-profile">

                        <div class="cf-profile-label">
                            Customer Profile
                        </div>


                        <div class="cf-avatar">

                            <?php if (!empty($customer['avatar'])): ?>

                                <?php
                                    $profileAvatarPath =
                                        FCPATH .
                                        'uploads/customers/' .
                                        $customer['avatar'];
                                ?>

                                <?php if (is_file($profileAvatarPath)): ?>

                                    <img
                                        id="profileAvatarImage"
                                        src="<?= base_url('uploads/customers/' . $customer['avatar']) ?>"
                                        alt="Customer Avatar"
                                    >

                                <?php else: ?>

                                    <?php
                                        $nameParts =
                                            preg_split(
                                                '/\s+/',
                                                trim($customer['full_name'])
                                            );

                                        if (count($nameParts) >= 2) {

                                            echo esc(
                                                strtoupper(
                                                    substr($nameParts[0], 0, 1) .
                                                    substr(
                                                        $nameParts[count($nameParts) - 1],
                                                        0,
                                                        1
                                                    )
                                                )
                                            );

                                        } else {

                                            echo esc(
                                                strtoupper(
                                                    substr(
                                                        $customer['full_name'],
                                                        0,
                                                        2
                                                    )
                                                )
                                            );

                                        }
                                    ?>

                                <?php endif; ?>

                            <?php else: ?>

                                <?php
                                    $nameParts =
                                        preg_split(
                                            '/\s+/',
                                            trim($customer['full_name'])
                                        );

                                    if (count($nameParts) >= 2) {

                                        echo esc(
                                            strtoupper(
                                                substr($nameParts[0], 0, 1) .
                                                substr(
                                                    $nameParts[count($nameParts) - 1],
                                                    0,
                                                    1
                                                )
                                            )
                                        );

                                    } else {

                                        echo esc(
                                            strtoupper(
                                                substr(
                                                    $customer['full_name'],
                                                    0,
                                                    2
                                                )
                                            )
                                        );

                                    }
                                ?>

                            <?php endif; ?>

                        </div>


                        <h2 class="cf-profile-name">
                            <?= esc($customer['full_name']) ?>
                        </h2>


                        <div class="cf-profile-id">
                            Customer #<?= esc($customer['id']) ?>
                        </div>


                        <div class="cf-status">

                            <span class="cf-status-dot"></span>

                            Active Customer

                        </div>


                        <!-- EMAIL -->

                        <div class="cf-profile-line">

                            <span class="cf-profile-icon">
                                @
                            </span>

                            <span>
                                <?= esc($customer['email']) ?>
                            </span>

                        </div>


                        <!-- PHONE -->

                        <div class="cf-profile-line">

                            <span class="cf-profile-icon">
                                ☎
                            </span>

                            <span>

                                <?=

                                    !empty($customer['phone'])

                                        ? esc($customer['phone'])

                                        : 'No phone number'

                                ?>

                            </span>

                        </div>


                        <!-- ID -->

                        <div class="cf-profile-line">

                            <span class="cf-profile-icon">
                                #
                            </span>

                            <span>
                                Record ID: <?= esc($customer['id']) ?>
                            </span>

                        </div>


                        <div class="cf-profile-note">

                            You are editing this customer's existing record.

                            Changes will be saved when you select
                            <strong>Update Customer</strong>.

                        </div>


                    </aside>


                </section>


            </div>

        </main>

    </div>

</div>


<script>

    const nameInput =
        document.getElementById('full_name');

    const avatarInput =
        document.getElementById('avatar');

    const uploadPreview =
        document.getElementById('uploadPreview');

    const fileError =
        document.getElementById('fileError');


    /* =====================================================
       GET INITIALS
       ===================================================== */

    function getInitials(name) {

        if (!name.trim()) {
            return 'C';
        }


        const words =
            name.trim().split(/\s+/);


        if (words.length === 1) {

            return words[0]
                .substring(0, 2)
                .toUpperCase();

        }


        return (
            words[0][0] +
            words[words.length - 1][0]
        ).toUpperCase();

    }


    /* =====================================================
       SHOW FILE ERROR
       ===================================================== */

    function showFileError(message) {

        fileError.textContent =
            message;

        fileError.style.display =
            'block';

    }


    /* =====================================================
       RESET UPLOAD PREVIEW
       ===================================================== */

    function resetUploadPreview() {

        const initials =
            getInitials(nameInput.value);


        uploadPreview.innerHTML =
            '<span>' +
            initials +
            '</span>';

    }


    /* =====================================================
       AVATAR FILE CHANGE
       ===================================================== */

    avatarInput.addEventListener(
        'change',
        function () {

            fileError.style.display =
                'none';

            fileError.textContent =
                '';


            const file =
                this.files[0];


            if (!file) {

                resetUploadPreview();

                return;

            }


            const allowedTypes = [
                'image/jpeg',
                'image/png'
            ];


            if (!allowedTypes.includes(file.type)) {

                showFileError(
                    'Please select a JPG or PNG image.'
                );

                this.value = '';

                return;

            }


            if (file.size > 2 * 1024 * 1024) {

                showFileError(
                    'The image must not be larger than 2 MB.'
                );

                this.value = '';

                return;

            }


            const reader =
                new FileReader();


            reader.onload =
                function (event) {

                    uploadPreview.innerHTML =
                        '<img src="' +
                        event.target.result +
                        '" alt="New Customer Avatar">';

                };


            reader.readAsDataURL(file);

        }
    );


    /* =====================================================
       FORM VALIDATION
       ===================================================== */

    document
        .getElementById('customerForm')
        .addEventListener(
            'submit',
            function (event) {

                const file =
                    avatarInput.files[0];


                if (!file) {
                    return;
                }


                const allowedTypes = [
                    'image/jpeg',
                    'image/png'
                ];


                if (!allowedTypes.includes(file.type)) {

                    event.preventDefault();

                    showFileError(
                        'Please select a JPG or PNG image.'
                    );

                    return;

                }


                if (file.size > 2 * 1024 * 1024) {

                    event.preventDefault();

                    showFileError(
                        'The image must not be larger than 2 MB.'
                    );

                }

            }
        );

</script>


</body>

</html>