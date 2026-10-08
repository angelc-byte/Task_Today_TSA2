<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Edit User | Tasks for Today
    </title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >


    <style>

        /* =========================================================
           EDIT USER PAGE
           ========================================================= */

        .edit-user-page {
            padding: 32px;
            animation: editPageIn .35s ease;
        }


        @keyframes editPageIn {

            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* =========================================================
           PAGE HEADER
           ========================================================= */

        .edit-user-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            gap: 20px;

            margin-bottom: 25px;
        }


        .edit-user-eyebrow {
            display: inline-flex;
            align-items: center;

            gap: 6px;

            margin-bottom: 7px;

            color: #4f8d99;

            font-size: 10px;

            font-weight: 850;

            letter-spacing: 1.2px;

            text-transform: uppercase;
        }


        .edit-user-eyebrow::before {
            content: "";

            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #205968;
        }


        .edit-user-heading h1 {
            margin: 0;

            color: #183f4b;

            font-size: 29px;

            font-weight: 780;

            letter-spacing: -.5px;
        }


        .edit-user-heading p {
            margin: 7px 0 0;

            color: #7b8a91;

            font-size: 13px;
        }


        .back-users-btn {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 10px 14px;

            border: 1px solid #dfe7e9;

            border-radius: 9px;

            background: #fff;

            color: #53676f;

            text-decoration: none;

            font-size: 11px;

            font-weight: 700;

            transition: .2s ease;
        }


        .back-users-btn:hover {
            border-color: #bcd1d6;

            background: #f7fafb;

            color: #205968;

            transform: translateY(-1px);
        }


        /* =========================================================
           ALERTS
           ========================================================= */

        .edit-alert {
            display: flex;

            align-items: flex-start;

            gap: 10px;

            padding: 13px 15px;

            margin-bottom: 18px;

            border-radius: 10px;

            font-size: 12px;

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


        .edit-alert-error {
            color: #a83c3c;

            background: #fff1f1;

            border: 1px solid #f2d0d0;
        }


        .edit-alert-icon {
            width: 23px;
            height: 23px;

            min-width: 23px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: #f8dada;

            font-weight: 800;
        }


        .edit-alert ul {
            margin: 0;

            padding-left: 18px;
        }


        .edit-alert li {
            margin-bottom: 3px;
        }


        .edit-alert li:last-child {
            margin-bottom: 0;
        }


        /* =========================================================
           MAIN GRID
           ========================================================= */

        .edit-user-grid {
            display: grid;

            grid-template-columns: minmax(280px, 330px) minmax(0, 1fr);

            gap: 20px;

            align-items: start;
        }


        /* =========================================================
           PROFILE CARD
           ========================================================= */

        .edit-profile-card {
            position: sticky;

            top: 20px;

            overflow: hidden;

            border: 1px solid #e6edef;

            border-radius: 15px;

            background: #fff;

            box-shadow:
                0 5px 22px rgba(0, 0, 0, .055);
        }


        .profile-card-cover {
            position: relative;

            height: 92px;

            background:
                linear-gradient(
                    135deg,
                    #174752,
                    #205968,
                    #4f8d99
                );

            overflow: hidden;
        }


        .profile-card-cover::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            right: -70px;
            top: -90px;

            border-radius: 50%;

            background: rgba(255, 255, 255, .08);
        }


        .profile-card-cover::after {
            content: "";

            position: absolute;

            width: 100px;
            height: 100px;

            left: -35px;
            bottom: -60px;

            border-radius: 50%;

            background: rgba(255, 255, 255, .08);
        }


        .profile-card-content {
            position: relative;

            padding: 0 22px 23px;

            text-align: center;
        }


        .edit-avatar-wrapper {
            position: relative;

            width: 100px;
            height: 100px;

            margin: -50px auto 13px;
        }


        .edit-avatar-preview {
            width: 100px;
            height: 100px;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;

            border: 5px solid #fff;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #205968,
                    #174752
                );

            color: #fff;

            font-size: 28px;

            font-weight: 800;

            box-shadow:
                0 7px 20px rgba(24, 63, 75, .18);

            box-sizing: border-box;
        }


        .edit-avatar-preview img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;
        }


        .avatar-status {
            position: absolute;

            right: 4px;
            bottom: 5px;

            width: 17px;
            height: 17px;

            border: 3px solid #fff;

            border-radius: 50%;

            background: #35ad6b;

            box-shadow:
                0 2px 6px rgba(0, 0, 0, .12);
        }


        .profile-card-content h2 {
            margin: 0;

            color: #203f49;

            font-size: 19px;

            font-weight: 750;
        }


        .profile-card-username {
            margin-top: 4px;

            color: #8b989e;

            font-size: 11px;
        }


        .profile-status {
            display: inline-flex;

            align-items: center;

            gap: 5px;

            margin-top: 12px;

            padding: 5px 10px;

            border-radius: 20px;

            background: #eaf7ef;

            color: #28764a;

            font-size: 9px;

            font-weight: 750;
        }


        .profile-status-dot {
            width: 5px;
            height: 5px;

            border-radius: 50%;

            background: #2ea463;
        }


        .profile-divider {
            height: 1px;

            margin: 20px 0;

            background: #edf0f2;
        }


        .profile-info-item {
            display: flex;

            align-items: center;

            gap: 10px;

            padding: 8px 0;

            text-align: left;
        }


        .profile-info-icon {
            width: 31px;
            height: 31px;

            min-width: 31px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 8px;

            background: #edf5f7;

            color: #205968;

            font-size: 12px;
        }


        .profile-info-text {
            min-width: 0;
        }


        .profile-info-label {
            color: #929da2;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: .5px;
        }


        .profile-info-value {
            margin-top: 2px;

            color: #435861;

            font-size: 11px;

            font-weight: 650;

            overflow: hidden;

            text-overflow: ellipsis;

            white-space: nowrap;
        }


        /* =========================================================
           FORM CARD
           ========================================================= */

        .edit-form-card {
            overflow: hidden;

            border: 1px solid #e6edef;

            border-radius: 15px;

            background: #fff;

            box-shadow:
                0 5px 22px rgba(0, 0, 0, .055);
        }


        .form-card-header {
            padding: 20px 22px;

            border-bottom: 1px solid #edf0f2;

            background: #fcfdfd;
        }


        .form-card-header h2 {
            margin: 0;

            color: #29434d;

            font-size: 16px;

            font-weight: 750;
        }


        .form-card-header p {
            margin: 5px 0 0;

            color: #89969c;

            font-size: 11px;
        }


        .edit-form {
            padding: 23px;
        }


        /* =========================================================
           FORM SECTIONS
           ========================================================= */

        .form-section {
            margin-bottom: 25px;
        }


        .form-section:last-of-type {
            margin-bottom: 0;
        }


        .form-section-heading {
            display: flex;

            align-items: center;

            gap: 9px;

            margin-bottom: 15px;

            padding-bottom: 10px;

            border-bottom: 1px solid #edf0f2;
        }


        .form-section-icon {
            width: 27px;
            height: 27px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 7px;

            background: #edf5f7;

            color: #205968;

            font-size: 11px;

            font-weight: 800;
        }


        .form-section-title {
            color: #3d555e;

            font-size: 12px;

            font-weight: 750;
        }


        .form-section-description {
            margin-left: auto;

            color: #a0aaae;

            font-size: 9px;
        }


        /* =========================================================
           FIELD GRID
           ========================================================= */

        .field-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 16px;
        }


        .form-field {
            position: relative;
        }


        .form-field.full-width {
            grid-column: 1 / -1;
        }


        .form-label {
            display: flex;

            align-items: center;

            gap: 4px;

            margin-bottom: 7px;

            color: #334a53;

            font-size: 11px;

            font-weight: 750;
        }


        .required-mark {
            color: #d15454;

            font-size: 11px;
        }


        .optional-mark {
            color: #9ca7ab;

            font-size: 9px;

            font-weight: 500;
        }


        .input-wrapper {
            position: relative;
        }


        .input-icon {
            position: absolute;

            left: 13px;

            top: 50%;

            transform: translateY(-50%);

            color: #8b989e;

            font-size: 13px;

            pointer-events: none;

            z-index: 1;
        }


        .form-input {
            width: 100%;

            height: 43px;

            padding: 0 13px 0 38px;

            border: 1px solid #dce5e7;

            border-radius: 9px;

            outline: none;

            background: #fff;

            color: #344b54;

            font-size: 12px;

            box-sizing: border-box;

            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }


        .form-input.no-icon {
            padding-left: 13px;
        }


        .form-input:hover {
            border-color: #c5d6da;
        }


        .form-input:focus {
            border-color: #205968;

            background: #fcfefe;

            box-shadow:
                0 0 0 3px rgba(32, 89, 104, .08);
        }


        .form-input.input-error {
            border-color: #d85b5b;

            box-shadow:
                0 0 0 3px rgba(216, 91, 91, .08);
        }


        .field-help {
            margin-top: 5px;

            color: #98a3a8;

            font-size: 9px;

            line-height: 1.4;
        }


        /* =========================================================
           PASSWORD FIELD
           ========================================================= */

        .password-toggle {
            position: absolute;

            right: 8px;
            top: 6px;

            width: 31px;
            height: 31px;

            border: none;

            border-radius: 7px;

            background: transparent;

            color: #849298;

            cursor: pointer;

            font-size: 13px;

            transition: .15s ease;
        }


        .password-toggle:hover {
            background: #edf5f7;

            color: #205968;
        }


        .password-strength {
            display: none;

            margin-top: 8px;
        }


        .password-strength.show {
            display: block;
        }


        .strength-bar {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 4px;

            margin-bottom: 5px;
        }


        .strength-segment {
            height: 4px;

            border-radius: 5px;

            background: #e7edef;

            transition: .2s ease;
        }


        .strength-label {
            color: #8e9ba0;

            font-size: 9px;
        }


        /* =========================================================
           AVATAR UPLOAD
           ========================================================= */

        .avatar-upload-box {
            padding: 17px;

            border: 1px dashed #cddde1;

            border-radius: 11px;

            background: #fbfdfd;

            transition: .2s ease;
        }


        .avatar-upload-box.dragging {
            border-color: #205968;

            background: #f0f7f8;

            box-shadow:
                0 0 0 3px rgba(32, 89, 104, .07);
        }


        .upload-content {
            display: flex;

            align-items: center;

            gap: 15px;
        }


        .upload-icon {
            width: 42px;
            height: 42px;

            min-width: 42px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background: #eaf3f5;

            color: #205968;

            font-size: 17px;
        }


        .upload-text {
            flex: 1;

            min-width: 0;
        }


        .upload-title {
            color: #405860;

            font-size: 11px;

            font-weight: 750;
        }


        .upload-description {
            margin-top: 3px;

            color: #96a1a6;

            font-size: 9px;

            line-height: 1.4;
        }


        .choose-file-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 8px 12px;

            border-radius: 7px;

            background: #205968;

            color: #fff;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;

            transition: .18s ease;

            white-space: nowrap;
        }


        .choose-file-btn:hover {
            background: #174752;

            transform: translateY(-1px);
        }


        .file-name {
            display: none;

            margin-top: 10px;

            padding: 8px 10px;

            border-radius: 7px;

            background: #edf5f7;

            color: #205968;

            font-size: 10px;

            font-weight: 650;
        }


        .file-name.show {
            display: block;
        }


        /* =========================================================
           FORM FOOTER
           ========================================================= */

        .form-footer {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin-top: 27px;

            padding-top: 18px;

            border-top: 1px solid #edf0f2;
        }


        .form-footer-note {
            color: #98a3a8;

            font-size: 9px;

            line-height: 1.5;
        }


        .form-actions {
            display: flex;

            align-items: center;

            gap: 8px;
        }


        .cancel-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            height: 40px;

            padding: 0 15px;

            border: 1px solid #dce5e7;

            border-radius: 8px;

            background: #fff;

            color: #65757c;

            text-decoration: none;

            font-size: 11px;

            font-weight: 700;

            transition: .18s ease;
        }


        .cancel-btn:hover {
            background: #f5f8f9;

            color: #405860;
        }


        .update-btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            height: 40px;

            padding: 0 17px;

            border: none;

            border-radius: 8px;

            background:
                linear-gradient(
                    135deg,
                    #205968,
                    #174752
                );

            color: #fff;

            font-size: 11px;

            font-weight: 750;

            cursor: pointer;

            box-shadow:
                0 5px 12px rgba(32, 89, 104, .17);

            transition: .2s ease;
        }


        .update-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 17px rgba(32, 89, 104, .23);
        }


        .update-btn:disabled {
            opacity: .65;

            cursor: wait;

            transform: none;
        }


        .button-spinner {
            display: none;

            width: 12px;
            height: 12px;

            border: 2px solid rgba(255,255,255,.35);

            border-top-color: #fff;

            border-radius: 50%;

            animation: buttonSpin .7s linear infinite;
        }


        .update-btn.loading .button-spinner {
            display: block;
        }


        @keyframes buttonSpin {

            to {
                transform: rotate(360deg);
            }

        }


        /* =========================================================
           UNSAVED CHANGES
           ========================================================= */

        .unsaved-indicator {
            display: none;

            align-items: center;

            gap: 6px;

            color: #b47727;

            font-size: 9px;

            font-weight: 650;
        }


        .unsaved-indicator.show {
            display: inline-flex;
        }


        .unsaved-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #d69a43;
        }


        /* =========================================================
           RESPONSIVE
           ========================================================= */

        @media (max-width: 900px) {

            .edit-user-page {
                padding: 25px 20px;
            }

            .edit-user-grid {
                grid-template-columns: 1fr;
            }

            .edit-profile-card {
                position: static;
            }

        }


        @media (max-width: 650px) {

            .edit-user-page {
                padding: 20px 15px;
            }

            .edit-user-heading {
                flex-direction: column;

                align-items: stretch;
            }

            .back-users-btn {
                width: fit-content;
            }

            .field-grid {
                grid-template-columns: 1fr;
            }

            .form-field.full-width {
                grid-column: auto;
            }

            .upload-content {
                align-items: flex-start;

                flex-direction: column;
            }

            .choose-file-btn {
                width: 100%;
            }

            .form-footer {
                align-items: stretch;

                flex-direction: column;
            }

            .form-actions {
                width: 100%;
            }

            .cancel-btn,
            .update-btn {
                flex: 1;
            }

        }


        @media (max-width: 450px) {

            .edit-user-heading h1 {
                font-size: 25px;
            }

            .edit-form {
                padding: 18px;
            }

            .form-card-header {
                padding: 18px;
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


            <div class="edit-user-page">


                <!-- =================================================
                     PAGE HEADER
                     ================================================= -->

                <section class="edit-user-heading">

                    <div>

                        <span class="edit-user-eyebrow">
                            ACCOUNT
                        </span>

                        <h1>
                            Edit User
                        </h1>

                        <p>
                            Update the user's account information,
                            security, and profile appearance.
                        </p>

                    </div>


                    <a
                        href="<?= base_url('users') ?>"
                        class="back-users-btn"
                    >
                        ← Back to Users
                    </a>

                </section>


                <!-- =================================================
                     VALIDATION ERRORS
                     ================================================= -->

                <?php if ($errors = session()->getFlashdata('errors')): ?>

                    <div class="edit-alert edit-alert-error">

                        <div class="edit-alert-icon">
                            !
                        </div>

                        <div>

                            <strong>
                                Please check the following:
                            </strong>

                            <ul>

                                <?php foreach ($errors as $error): ?>

                                    <li>
                                        <?= esc($error) ?>
                                    </li>

                                <?php endforeach; ?>

                            </ul>

                        </div>

                    </div>

                <?php endif; ?>


                <?php if ($error = session()->getFlashdata('error')): ?>

                    <div class="edit-alert edit-alert-error">

                        <div class="edit-alert-icon">
                            !
                        </div>

                        <div>
                            <?= esc($error) ?>
                        </div>

                    </div>

                <?php endif; ?>


                <!-- =================================================
                     MAIN GRID
                     ================================================= -->

                <div class="edit-user-grid">


                    <!-- =================================================
                         PROFILE PREVIEW
                         ================================================= -->

                    <aside class="edit-profile-card">


                        <div class="profile-card-cover"></div>


                        <div class="profile-card-content">


                            <div class="edit-avatar-wrapper">

                                <div
                                    class="edit-avatar-preview"
                                    id="avatarPreview"
                                >

                                    <?php

                                        $fullName =
                                            $user['full_name']
                                            ?? $user['username']
                                            ?? 'User';

                                        $nameParts =
                                            preg_split(
                                                '/\s+/',
                                                trim($fullName)
                                            );

                                        $initials = '';

                                        if (
                                            !empty(
                                                $nameParts[0]
                                            )
                                        ) {

                                            $initials .=
                                                strtoupper(
                                                    substr(
                                                        $nameParts[0],
                                                        0,
                                                        1
                                                    )
                                                );

                                        }

                                        if (
                                            count($nameParts) > 1
                                        ) {

                                            $initials .=
                                                strtoupper(
                                                    substr(
                                                        $nameParts[
                                                            count($nameParts) - 1
                                                        ],
                                                        0,
                                                        1
                                                    )
                                                );

                                        }

                                        if (
                                            empty($initials)
                                        ) {

                                            $initials = 'U';

                                        }

                                    ?>


                                    <?php if (!empty($user['avatar'])): ?>

                                        <img
                                            src="<?= base_url('uploads/avatars/' . esc($user['avatar'])) ?>"
                                            alt="Current Avatar"
                                            id="avatarPreviewImage"
                                            onerror="this.style.display='none';document.getElementById('avatarInitials').style.display='flex';"
                                        >

                                        <span
                                            id="avatarInitials"
                                            style="display:none;"
                                        >
                                            <?= esc($initials) ?>
                                        </span>

                                    <?php else: ?>

                                        <span id="avatarInitials">
                                            <?= esc($initials) ?>
                                        </span>

                                    <?php endif; ?>

                                </div>


                                <span class="avatar-status"></span>

                            </div>


                            <h2 id="profilePreviewName">
                                <?= esc($fullName) ?>
                            </h2>


                            <div
                                class="profile-card-username"
                                id="profilePreviewUsername"
                            >
                                @<?= esc($user['username'] ?? '') ?>
                            </div>


                            <span class="profile-status">

                                <span class="profile-status-dot"></span>

                                Active Account

                            </span>


                            <div class="profile-divider"></div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    @
                                </div>

                                <div class="profile-info-text">

                                    <div class="profile-info-label">
                                        Email
                                    </div>

                                    <div
                                        class="profile-info-value"
                                        id="profilePreviewEmail"
                                    >
                                        <?= esc(
                                            $user['email']
                                            ?? 'No email'
                                        ) ?>
                                    </div>

                                </div>

                            </div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    #
                                </div>

                                <div class="profile-info-text">

                                    <div class="profile-info-label">
                                        Account ID
                                    </div>

                                    <div class="profile-info-value">
                                        #<?= esc(
                                            $user['id']
                                            ?? ''
                                        ) ?>
                                    </div>

                                </div>

                            </div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    ✓
                                </div>

                                <div class="profile-info-text">

                                    <div class="profile-info-label">
                                        Account Status
                                    </div>

                                    <div class="profile-info-value">
                                        Active
                                    </div>

                                </div>

                            </div>


                        </div>

                    </aside>


                    <!-- =================================================
                         FORM
                         ================================================= -->

                    <section class="edit-form-card">


                        <div class="form-card-header">

                            <h2>
                                Account Information
                            </h2>

                            <p>
                                Update the information below and
                                save your changes.
                            </p>

                        </div>


                        <form
                            id="editUserForm"
                            class="edit-form"
                            action="<?= base_url('users/update/' . $user['id']) ?>"
                            method="post"
                            enctype="multipart/form-data"
                        >


                            <?= csrf_field() ?>


                            <!-- =================================================
                                 BASIC INFORMATION
                                 ================================================= -->

                            <div class="form-section">


                                <div class="form-section-heading">

                                    <div class="form-section-icon">
                                        ♙
                                    </div>

                                    <span class="form-section-title">
                                        Basic Information
                                    </span>

                                    <span class="form-section-description">
                                        Required information
                                    </span>

                                </div>


                                <div class="field-grid">


                                    <!-- USERNAME -->

                                    <div class="form-field">

                                        <label
                                            for="username"
                                            class="form-label"
                                        >

                                            Username

                                            <span class="required-mark">
                                                *
                                            </span>

                                        </label>


                                        <div class="input-wrapper">

                                            <span class="input-icon">
                                                @
                                            </span>

                                            <input
                                                type="text"
                                                id="username"
                                                name="username"
                                                class="form-input"
                                                value="<?= old(
                                                    'username',
                                                    $user['username'] ?? ''
                                                ) ?>"
                                                required
                                                autocomplete="username"
                                                placeholder="Enter username"
                                            >

                                        </div>

                                        <div class="field-help">
                                            This will be used as the account username.
                                        </div>

                                    </div>


                                    <!-- FULL NAME -->

                                    <div class="form-field">

                                        <label
                                            for="full_name"
                                            class="form-label"
                                        >

                                            Full Name

                                            <span class="required-mark">
                                                *
                                            </span>

                                        </label>


                                        <div class="input-wrapper">

                                            <span class="input-icon">
                                                ♙
                                            </span>

                                            <input
                                                type="text"
                                                id="full_name"
                                                name="full_name"
                                                class="form-input"
                                                value="<?= old(
                                                    'full_name',
                                                    $user['full_name'] ?? ''
                                                ) ?>"
                                                required
                                                placeholder="Enter full name"
                                            >

                                        </div>

                                        <div class="field-help">
                                            The name displayed in the user profile.
                                        </div>

                                    </div>


                                    <!-- EMAIL -->

                                    <div class="form-field full-width">

                                        <label
                                            for="email"
                                            class="form-label"
                                        >

                                            Email Address

                                            <span class="required-mark">
                                                *
                                            </span>

                                        </label>


                                        <div class="input-wrapper">

                                            <span class="input-icon">
                                                @
                                            </span>

                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                class="form-input"
                                                value="<?= old(
                                                    'email',
                                                    $user['email'] ?? ''
                                                ) ?>"
                                                required
                                                autocomplete="email"
                                                placeholder="example@email.com"
                                            >

                                        </div>

                                        <div class="field-help">
                                            Used for account contact and communication.
                                        </div>

                                    </div>


                                </div>

                            </div>


                            <!-- =================================================
                                 AVATAR
                                 ================================================= -->

                            <div class="form-section">


                                <div class="form-section-heading">

                                    <div class="form-section-icon">
                                        ◉
                                    </div>

                                    <span class="form-section-title">
                                        Profile Photo
                                    </span>

                                    <span class="form-section-description">
                                        Optional
                                    </span>

                                </div>


                                <div
                                    class="avatar-upload-box"
                                    id="avatarUploadBox"
                                >

                                    <div class="upload-content">


                                        <div class="upload-icon">
                                            ↑
                                        </div>


                                        <div class="upload-text">

                                            <div class="upload-title">
                                                Change profile photo
                                            </div>

                                            <div class="upload-description">
                                                Upload a JPG or PNG image.
                                                Maximum file size is 2 MB.
                                            </div>

                                        </div>


                                        <label
                                            for="avatar"
                                            class="choose-file-btn"
                                        >
                                            Choose Image
                                        </label>


                                    </div>


                                    <input
                                        type="file"
                                        id="avatar"
                                        name="avatar"
                                        accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                        hidden
                                    >


                                    <div
                                        class="file-name"
                                        id="fileName"
                                    ></div>

                                </div>


                            </div>


                            <!-- =================================================
                                 PASSWORD
                                 ================================================= -->

                            <div class="form-section">


                                <div class="form-section-heading">

                                    <div class="form-section-icon">
                                        ◆
                                    </div>

                                    <span class="form-section-title">
                                        Account Security
                                    </span>

                                    <span class="form-section-description">
                                        Optional
                                    </span>

                                </div>


                                <div class="field-grid">


                                    <div class="form-field full-width">

                                        <label
                                            for="password"
                                            class="form-label"
                                        >

                                            New Password

                                            <span class="optional-mark">
                                                Leave blank to keep current password
                                            </span>

                                        </label>


                                        <div class="input-wrapper">

                                            <span class="input-icon">
                                                •
                                            </span>

                                            <input
                                                type="password"
                                                id="password"
                                                name="password"
                                                class="form-input"
                                                autocomplete="new-password"
                                                placeholder="Enter a new password"
                                                minlength="6"
                                                style="padding-right:45px;"
                                            >


                                            <button
                                                type="button"
                                                class="password-toggle"
                                                id="passwordToggle"
                                                aria-label="Show password"
                                            >
                                                ◉
                                            </button>

                                        </div>


                                        <div
                                            class="password-strength"
                                            id="passwordStrength"
                                        >

                                            <div class="strength-bar">

                                                <span
                                                    class="strength-segment"
                                                ></span>

                                                <span
                                                    class="strength-segment"
                                                ></span>

                                                <span
                                                    class="strength-segment"
                                                ></span>

                                                <span
                                                    class="strength-segment"
                                                ></span>

                                            </div>

                                            <div
                                                class="strength-label"
                                                id="strengthLabel"
                                            >
                                                Password strength
                                            </div>

                                        </div>


                                        <div class="field-help">
                                            Password must contain at least 6 characters.
                                        </div>

                                    </div>


                                </div>

                            </div>


                            <!-- =================================================
                                 FORM FOOTER
                                 ================================================= -->

                            <div class="form-footer">


                                <div>

                                    <div
                                        class="unsaved-indicator"
                                        id="unsavedIndicator"
                                    >

                                        <span class="unsaved-dot"></span>

                                        Unsaved changes

                                    </div>


                                    <div class="form-footer-note">
                                        Fields marked with
                                        <span style="color:#d15454;">*</span>
                                        are required.
                                    </div>

                                </div>


                                <div class="form-actions">


                                    <a
                                        href="<?= base_url('users') ?>"
                                        class="cancel-btn"
                                    >
                                        Cancel
                                    </a>


                                    <button
                                        type="submit"
                                        class="update-btn"
                                        id="updateButton"
                                    >

                                        <span
                                            class="button-spinner"
                                        ></span>

                                        <span
                                            id="updateButtonText"
                                        >
                                            ✓ Update User
                                        </span>

                                    </button>


                                </div>

                            </div>


                        </form>

                    </section>

                </div>

            </div>

        </main>

    </div>

</div>


<script>

(function () {

    'use strict';


    /* =========================================================
       ELEMENTS
       ========================================================= */

    const form =
        document.getElementById(
            'editUserForm'
        );

    const username =
        document.getElementById(
            'username'
        );

    const fullName =
        document.getElementById(
            'full_name'
        );

    const email =
        document.getElementById(
            'email'
        );

    const password =
        document.getElementById(
            'password'
        );

    const avatarInput =
        document.getElementById(
            'avatar'
        );

    const avatarPreview =
        document.getElementById(
            'avatarPreview'
        );

    const avatarUploadBox =
        document.getElementById(
            'avatarUploadBox'
        );

    const fileName =
        document.getElementById(
            'fileName'
        );

    const profilePreviewName =
        document.getElementById(
            'profilePreviewName'
        );

    const profilePreviewUsername =
        document.getElementById(
            'profilePreviewUsername'
        );

    const profilePreviewEmail =
        document.getElementById(
            'profilePreviewEmail'
        );

    const passwordToggle =
        document.getElementById(
            'passwordToggle'
        );

    const passwordStrength =
        document.getElementById(
            'passwordStrength'
        );

    const strengthLabel =
        document.getElementById(
            'strengthLabel'
        );

    const unsavedIndicator =
        document.getElementById(
            'unsavedIndicator'
        );

    const updateButton =
        document.getElementById(
            'updateButton'
        );

    const updateButtonText =
        document.getElementById(
            'updateButtonText'
        );


    /* =========================================================
       INITIAL FORM VALUES
       ========================================================= */

    const originalFormData =
        new FormData(form);


    /* =========================================================
       UPDATE PROFILE PREVIEW
       ========================================================= */

    function updateProfilePreview() {

        const name =
            fullName.value.trim();

        const usernameValue =
            username.value.trim();

        const emailValue =
            email.value.trim();


        profilePreviewName.textContent =
            name || 'User';


        profilePreviewUsername.textContent =
            usernameValue
                ? '@' + usernameValue
                : '@username';


        profilePreviewEmail.textContent =
            emailValue ||
            'No email';


        const initialsElement =
            document.getElementById(
                'avatarInitials'
            );


        if (
            !avatarInput.files.length &&
            initialsElement
        ) {

            const words =
                name
                    .split(/\s+/)
                    .filter(Boolean);

            let initials = 'U';


            if (words.length > 0) {

                initials =
                    words[0]
                        .charAt(0)
                        .toUpperCase();

            }


            if (words.length > 1) {

                initials +=
                    words[
                        words.length - 1
                    ]
                    .charAt(0)
                    .toUpperCase();

            }


            initialsElement.textContent =
                initials;

        }

    }


    username.addEventListener(
        'input',
        updateProfilePreview
    );


    fullName.addEventListener(
        'input',
        updateProfilePreview
    );


    email.addEventListener(
        'input',
        updateProfilePreview
    );


    /* =========================================================
       AVATAR PREVIEW
       ========================================================= */

    avatarInput.addEventListener(
        'change',
        function () {

            const file =
                this.files[0];


            if (!file) {

                return;

            }


            const allowedTypes = [
                'image/jpeg',
                'image/png'
            ];


            if (
                !allowedTypes.includes(
                    file.type
                )
            ) {

                alert(
                    'Please choose a JPG or PNG image.'
                );

                this.value = '';

                return;

            }


            if (
                file.size >
                2 * 1024 * 1024
            ) {

                alert(
                    'The selected image is larger than 2 MB.'
                );

                this.value = '';

                return;

            }


            const reader =
                new FileReader();


            reader.onload =
                function (event) {

                    avatarPreview.innerHTML = `

                        <img
                            src="${event.target.result}"
                            alt="New Avatar Preview"
                        >

                    `;

                };


            reader.readAsDataURL(
                file
            );


            fileName.textContent =
                '✓ ' +
                file.name +
                ' selected';


            fileName.classList.add(
                'show'
            );


            showUnsaved();

        }
    );


    /* =========================================================
       DRAG AND DROP
       ========================================================= */

    [
        'dragenter',
        'dragover'
    ].forEach(
        function (eventName) {

            avatarUploadBox.addEventListener(
                eventName,
                function (event) {

                    event.preventDefault();

                    avatarUploadBox.classList.add(
                        'dragging'
                    );

                }
            );

        }
    );


    [
        'dragleave',
        'drop'
    ].forEach(
        function (eventName) {

            avatarUploadBox.addEventListener(
                eventName,
                function (event) {

                    event.preventDefault();

                    avatarUploadBox.classList.remove(
                        'dragging'
                    );

                }
            );

        }
    );


    avatarUploadBox.addEventListener(
        'drop',
        function (event) {

            const files =
                event.dataTransfer.files;


            if (
                files &&
                files.length > 0
            ) {

                avatarInput.files =
                    files;

                avatarInput.dispatchEvent(
                    new Event(
                        'change'
                    )
                );

            }

        }
    );


    /* =========================================================
       PASSWORD VISIBILITY
       ========================================================= */

    passwordToggle.addEventListener(
        'click',
        function () {

            if (
                password.type ===
                'password'
            ) {

                password.type =
                    'text';

                this.textContent =
                    '◉';

                this.setAttribute(
                    'aria-label',
                    'Hide password'
                );

            } else {

                password.type =
                    'password';

                this.textContent =
                    '◉';

                this.setAttribute(
                    'aria-label',
                    'Show password'
                );

            }

        }
    );


    /* =========================================================
       PASSWORD STRENGTH
       ========================================================= */

    password.addEventListener(
        'input',
        function () {

            const value =
                this.value;


            if (!value) {

                passwordStrength.classList.remove(
                    'show'
                );

                return;

            }


            passwordStrength.classList.add(
                'show'
            );


            let score = 0;


            if (
                value.length >= 6
            ) {
                score++;
            }


            if (
                value.length >= 10
            ) {
                score++;
            }


            if (
                /[A-Z]/.test(value)
            ) {
                score++;
            }


            if (
                /[0-9!@#$%^&*]/.test(value)
            ) {
                score++;
            }


            const segments =
                document.querySelectorAll(
                    '.strength-segment'
                );


            segments.forEach(
                function (
                    segment,
                    index
                ) {

                    segment.style.background =
                        index < score
                            ? '#2ea463'
                            : '#e7edef';

                }
            );


            const labels = [
                'Very weak',
                'Weak',
                'Moderate',
                'Strong'
            ];


            strengthLabel.textContent =
                labels[
                    Math.max(
                        0,
                        score - 1
                    )
                ] ||
                'Very weak';

        }
    );


    /* =========================================================
       UNSAVED CHANGES
       ========================================================= */

    function showUnsaved() {

        unsavedIndicator.classList.add(
            'show'
        );

    }


    function checkForChanges() {

        const currentData =
            new FormData(form);

        let changed = false;


        for (
            const [key, value]
            of currentData.entries()
        ) {

            const originalValue =
                originalFormData.get(key);


            if (
                key === 'avatar'
            ) {

                if (
                    value &&
                    value instanceof File &&
                    value.name
                ) {

                    changed = true;

                    break;

                }

            } else if (
                value !== originalValue
            ) {

                changed = true;

                break;

            }

        }


        if (changed) {

            showUnsaved();

        } else {

            unsavedIndicator.classList.remove(
                'show'
            );

        }

    }


    form.querySelectorAll(
        'input'
    ).forEach(
        function (input) {

            input.addEventListener(
                'input',
                checkForChanges
            );

            input.addEventListener(
                'change',
                checkForChanges
            );

        }
    );


    /* =========================================================
       FORM VALIDATION
       ========================================================= */

    form.addEventListener(
        'submit',
        function (event) {

            let valid = true;


            [
                username,
                fullName,
                email
            ].forEach(
                function (input) {

                    input.classList.remove(
                        'input-error'
                    );


                    if (
                        !input.value.trim()
                    ) {

                        input.classList.add(
                            'input-error'
                        );

                        valid = false;

                    }

                }
            );


            if (
                email.value.trim() &&
                !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(
                    email.value.trim()
                )
            ) {

                email.classList.add(
                    'input-error'
                );

                valid = false;

            }


            if (
                password.value &&
                password.value.length < 6
            ) {

                password.classList.add(
                    'input-error'
                );

                valid = false;

                alert(
                    'New password must contain at least 6 characters.'
                );

            }


            if (!valid) {

                event.preventDefault();

                const firstError =
                    form.querySelector(
                        '.input-error'
                    );


                if (firstError) {

                    firstError.focus();

                }

                return;

            }


            updateButton.disabled =
                true;

            updateButton.classList.add(
                'loading'
            );

            updateButtonText.textContent =
                'Updating...';

        }
    );


    /* =========================================================
       REMOVE ERROR WHEN USER TYPES
       ========================================================= */

    form.querySelectorAll(
        '.form-input'
    ).forEach(
        function (input) {

            input.addEventListener(
                'input',
                function () {

                    this.classList.remove(
                        'input-error'
                    );

                }
            );

        }
    );


    /* =========================================================
       AUTO-HIDE ALERT
       ========================================================= */

    document
        .querySelectorAll(
            '.edit-alert'
        )
        .forEach(
            function (alert) {

                setTimeout(
                    function () {

                        alert.style.transition =
                            'opacity .4s ease, transform .4s ease';

                        alert.style.opacity =
                            '0';

                        alert.style.transform =
                            'translateY(-5px)';

                    },
                    5000
                );

            }
        );


    /* =========================================================
       UNSAVED CHANGES WARNING
       ========================================================= */

    let isSubmitting = false;


    /*
     * When the Update User form is submitted,
     * mark the page as submitting so the browser
     * does not show the "Leave site?" warning.
     */
    form.addEventListener(
        'submit',
        function () {

            isSubmitting = true;

        },
        true
    );


    /*
     * Only show the browser warning when the user
     * tries to leave the page while there are
     * unsaved changes.
     */
    window.addEventListener(
        'beforeunload',
        function (event) {

            if (
                !isSubmitting &&
                unsavedIndicator.classList.contains(
                    'show'
                )
            ) {

                event.preventDefault();

                event.returnValue =
                    '';

            }

        }
    );


    /* =========================================================
       ESCAPE PASSWORD FIELD
       ========================================================= */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                password.type === 'text'
            ) {

                password.type =
                    'password';

            }

        }
    );


})();

</script>


</body>
</html>