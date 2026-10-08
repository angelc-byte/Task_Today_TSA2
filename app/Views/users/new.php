<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New User | Tasks for Today</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <style>

        /* =========================================
           ADD USER PAGE
        ========================================= */

        .user-form-wrapper {
            max-width: 1100px;
            margin: 0 auto;
        }

        .user-form-card {
            background: #ffffff;
            border: 1px solid #e3eaec;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(24, 63, 72, 0.06);
        }

        .form-card-header {
            padding: 22px 28px;
            border-bottom: 1px solid #edf1f2;
            background: linear-gradient(
                135deg,
                #ffffff 0%,
                #f8fbfc 100%
            );
        }

        .form-card-header-content {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .form-header-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: #eaf5f6;
            color: #205968;
            font-size: 18px;
            font-weight: 700;
        }

        .form-card-header h2 {
            margin: 0;
            color: #263238;
            font-size: 17px;
        }

        .form-card-header p {
            margin: 4px 0 0;
            color: #8a979c;
            font-size: 11px;
        }

        .user-form-body {
            padding: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 320px;
            gap: 35px;
        }

        .form-section-title {
            margin-bottom: 20px;
        }

        .form-section-title span {
            display: block;
            color: #3b7c8b;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .form-section-title h3 {
            margin: 0;
            color: #263238;
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 21px;
        }

        .form-label-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
        }

        .form-label {
            color: #35454b;
            font-size: 12px;
            font-weight: 700;
        }

        .form-required {
            color: #d46a5e;
        }

        .char-counter {
            color: #a0aaae;
            font-size: 10px;
        }

        .form-input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px 14px;
            border: 1px solid #dfe7e9;
            border-radius: 10px;
            background: #ffffff;
            color: #263238;
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }

        .form-input:hover {
            border-color: #c5d7db;
        }

        .form-input:focus {
            border-color: #3b7c8b;
            background: #fbfefe;
            box-shadow: 0 0 0 4px rgba(59, 124, 139, 0.09);
        }

        .form-input.input-valid {
            border-color: #58a887;
        }

        .form-input.input-error {
            border-color: #d46a5e;
            box-shadow: 0 0 0 4px rgba(212, 106, 94, 0.07);
        }

        .field-hint {
            margin: 6px 0 0;
            color: #8a979c;
            font-size: 10px;
            line-height: 1.5;
        }

        /* =========================================
           PASSWORD
        ========================================= */

        .password-wrap {
            position: relative;
        }

        .password-wrap .form-input {
            padding-right: 46px;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            border: 0;
            border-radius: 7px;
            background: transparent;
            color: #718087;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .password-toggle:hover {
            background: #eaf5f6;
            color: #205968;
        }

        .password-strength {
            margin-top: 8px;
        }

        .strength-track {
            width: 100%;
            height: 4px;
            overflow: hidden;
            border-radius: 10px;
            background: #edf1f2;
        }

        .strength-fill {
            width: 0;
            height: 100%;
            border-radius: 10px;
            background: #3b7c8b;
            transition: width 0.25s ease;
        }

        .strength-text {
            margin-top: 5px;
            color: #8a979c;
            font-size: 9px;
        }

        /* =========================================
           AVATAR
        ========================================= */

        .avatar-panel {
            padding: 22px;
            border: 1px solid #e3eaec;
            border-radius: 15px;
            background: #f9fbfb;
        }

        .avatar-preview-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 20px;
        }

        .avatar-preview {
            width: 105px;
            height: 105px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 50%;
            background: #eaf5f6;
            color: #205968;
            border: 4px solid #ffffff;
            box-shadow:
                0 6px 18px rgba(24, 63, 72, 0.12),
                0 0 0 1px #dfe8ea;
            font-size: 30px;
            font-weight: 800;
            transition: transform 0.25s ease;
        }

        .avatar-preview:hover {
            transform: scale(1.04);
        }

        .avatar-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-preview-name {
            margin-top: 11px;
            color: #35454b;
            font-size: 12px;
            font-weight: 700;
        }

        .avatar-preview-subtitle {
            margin-top: 3px;
            color: #8a979c;
            font-size: 10px;
        }

        /* =========================================
           FIXED AVATAR UPLOAD
        ========================================= */

        .avatar-upload {
            position: relative;
            display: block;
            width: 100%;
            box-sizing: border-box;
            padding: 20px;
            border: 1px dashed #b9cdd1;
            border-radius: 12px;
            background: #ffffff;
            text-align: center;
            cursor: pointer;
            transition:
                border-color 0.2s ease,
                background 0.2s ease,
                transform 0.2s ease;
        }

        .avatar-upload:hover,
        .avatar-upload.dragover {
            border-color: #3b7c8b;
            background: #f2f9fa;
            transform: translateY(-1px);
        }

        .avatar-upload-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 9px;
            border-radius: 10px;
            background: #eaf5f6;
            color: #205968;
            font-size: 16px;
            font-weight: 700;
        }

        .avatar-upload strong {
            display: block;
            color: #35454b;
            font-size: 11px;
        }

        .avatar-upload span {
            display: block;
            margin-top: 4px;
            color: #8a979c;
            font-size: 9px;
        }

        /*
         * IMPORTANT:
         * Completely hide the browser's native
         * file input. The label itself is clickable.
         */

        .avatar-upload input[type="file"] {
            display: none !important;
        }

        .selected-file {
            display: none;
            margin-top: 9px;
            padding: 7px 9px;
            border-radius: 7px;
            background: #eaf5f6;
            color: #205968;
            font-size: 9px;
            font-weight: 600;
            word-break: break-word;
        }

        /* =========================================
           ALERTS
        ========================================= */

        .form-alert {
            display: flex;
            gap: 11px;
            align-items: flex-start;
            margin-bottom: 24px;
            padding: 13px 15px;
            border-radius: 10px;
            background: #fff5f4;
            border: 1px solid #f1d3d0;
            color: #a23b31;
            font-size: 11px;
        }

        .form-alert-icon {
            flex-shrink: 0;
            width: 23px;
            height: 23px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 7px;
            background: #f8dfdc;
            font-weight: 700;
        }

        .form-alert-content strong {
            display: block;
            margin-bottom: 4px;
        }

        .form-alert-content p {
            margin: 3px 0;
        }

        /* =========================================
           ACTIONS
        ========================================= */

        .form-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid #edf1f2;
        }

        .action-left {
            color: #8a979c;
            font-size: 10px;
        }

        .action-buttons {
            display: flex;
            gap: 9px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            min-height: 39px;
            padding: 0 16px;
            border-radius: 9px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                background 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            border: 1px solid #205968;
            background: #205968;
            color: #ffffff;
            box-shadow: 0 5px 12px rgba(32, 89, 104, 0.16);
        }

        .btn-primary:hover {
            background: #194b57;
            box-shadow: 0 7px 15px rgba(32, 89, 104, 0.22);
        }

        .btn-secondary {
            border: 1px solid #dfe7e9;
            background: #ffffff;
            color: #526268;
        }

        .btn-secondary:hover {
            background: #f6f9fa;
            border-color: #cbdadd;
        }

        .btn-primary.loading {
            pointer-events: none;
            opacity: 0.75;
        }

        .btn-primary.loading .save-text {
            display: none;
        }

        .btn-primary.loading .loading-text {
            display: inline;
        }

        .loading-text {
            display: none;
        }

        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 850px) {

            .form-grid {
                grid-template-columns: 1fr;
            }

            .avatar-panel {
                max-width: 420px;
            }

        }

        @media (max-width: 600px) {

            .user-form-body {
                padding: 20px;
            }

            .form-card-header {
                padding: 18px 20px;
            }

            .form-actions {
                align-items: stretch;
                flex-direction: column;
            }

            .action-buttons {
                width: 100%;
            }

            .btn {
                flex: 1;
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

            <section class="page-heading">

                <span class="eyebrow">
                    ACCOUNT
                </span>

                <h1>
                    Add New User
                </h1>

                <p>
                    Create a new user account and personalize the profile.
                </p>

            </section>


            <div class="user-form-wrapper">

                <section class="user-form-card">

                    <!-- HEADER -->

                    <div class="form-card-header">

                        <div class="form-card-header-content">

                            <div class="form-header-icon">
                                +
                            </div>

                            <div>

                                <h2>
                                    User Account Setup
                                </h2>

                                <p>
                                    Enter the account details below.
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="user-form-body">


                        <!-- ERRORS -->

                        <?php if ($errors = session()->getFlashdata('errors')): ?>

                            <div class="form-alert">

                                <div class="form-alert-icon">
                                    !
                                </div>

                                <div class="form-alert-content">

                                    <strong>
                                        Please check the following:
                                    </strong>

                                    <?php foreach ($errors as $error): ?>

                                        <p>
                                            <?= esc($error) ?>
                                        </p>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                        <?php endif; ?>


                        <?php if ($error = session()->getFlashdata('error')): ?>

                            <div class="form-alert">

                                <div class="form-alert-icon">
                                    !
                                </div>

                                <div class="form-alert-content">

                                    <?= esc($error) ?>

                                </div>

                            </div>

                        <?php endif; ?>


                        <form
                            id="newUserForm"
                            action="<?= base_url('users/create') ?>"
                            method="post"
                            enctype="multipart/form-data"
                        >

                            <?= csrf_field() ?>


                            <div class="form-grid">


                                <!-- ACCOUNT DETAILS -->

                                <div>

                                    <div class="form-section-title">

                                        <span>
                                            Account Details
                                        </span>

                                        <h3>
                                            User Information
                                        </h3>

                                    </div>


                                    <!-- USERNAME -->

                                    <div class="form-group">

                                        <div class="form-label-row">

                                            <label
                                                class="form-label"
                                                for="username"
                                            >
                                                Username
                                                <span class="form-required">*</span>
                                            </label>

                                            <span
                                                class="char-counter"
                                                id="usernameCounter"
                                            >
                                                0/30
                                            </span>

                                        </div>

                                        <input
                                            class="form-input"
                                            type="text"
                                            id="username"
                                            name="username"
                                            value="<?= old('username') ?>"
                                            maxlength="30"
                                            autocomplete="username"
                                            required
                                            placeholder="e.g. angel"
                                        >

                                        <p class="field-hint">
                                            Use a simple username that is easy to remember.
                                        </p>

                                    </div>


                                    <!-- FULL NAME -->

                                    <div class="form-group">

                                        <div class="form-label-row">

                                            <label
                                                class="form-label"
                                                for="full_name"
                                            >
                                                Full Name
                                                <span class="form-required">*</span>
                                            </label>

                                            <span
                                                class="char-counter"
                                                id="nameCounter"
                                            >
                                                0/80
                                            </span>

                                        </div>

                                        <input
                                            class="form-input"
                                            type="text"
                                            id="full_name"
                                            name="full_name"
                                            value="<?= old('full_name') ?>"
                                            maxlength="80"
                                            autocomplete="name"
                                            required
                                            placeholder="Enter the user's full name"
                                        >

                                        <p class="field-hint">
                                            This name will be displayed throughout the system.
                                        </p>

                                    </div>


                                    <!-- EMAIL -->

                                    <div class="form-group">

                                        <div class="form-label-row">

                                            <label
                                                class="form-label"
                                                for="email"
                                            >
                                                Email Address
                                                <span class="form-required">*</span>
                                            </label>

                                        </div>

                                        <input
                                            class="form-input"
                                            type="email"
                                            id="email"
                                            name="email"
                                            value="<?= old('email') ?>"
                                            autocomplete="email"
                                            required
                                            placeholder="example@email.com"
                                        >

                                        <p class="field-hint">
                                            Used as the user's contact email.
                                        </p>

                                    </div>


                                    <!-- PASSWORD -->

                                    <div class="form-group">

                                        <div class="form-label-row">

                                            <label
                                                class="form-label"
                                                for="password"
                                            >
                                                Password
                                                <span class="form-required">*</span>
                                            </label>

                                        </div>

                                        <div class="password-wrap">

                                            <input
                                                class="form-input"
                                                type="password"
                                                id="password"
                                                name="password"
                                                minlength="6"
                                                autocomplete="new-password"
                                                required
                                                placeholder="Create a password"
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

                                        <div class="password-strength">

                                            <div class="strength-track">

                                                <div
                                                    class="strength-fill"
                                                    id="strengthFill"
                                                ></div>

                                            </div>

                                            <div
                                                class="strength-text"
                                                id="strengthText"
                                            >
                                                Minimum 6 characters
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <!-- PROFILE -->

                                <div>

                                    <div class="form-section-title">

                                        <span>
                                            Profile
                                        </span>

                                        <h3>
                                            Profile Picture
                                        </h3>

                                    </div>


                                    <div class="avatar-panel">


                                        <!-- PREVIEW -->

                                        <div class="avatar-preview-area">

                                            <div
                                                class="avatar-preview"
                                                id="avatarPreview"
                                            >

                                                <span id="avatarInitials">
                                                    ?
                                                </span>

                                            </div>

                                            <div
                                                class="avatar-preview-name"
                                                id="avatarName"
                                            >
                                                New User
                                            </div>

                                            <div class="avatar-preview-subtitle">
                                                Profile preview
                                            </div>

                                        </div>


                                        <!-- UPLOAD -->

                                        <label
                                            class="avatar-upload"
                                            id="avatarUpload"
                                            for="avatar"
                                        >

                                            <div class="avatar-upload-icon">
                                                ↑
                                            </div>

                                            <strong>
                                                Choose an avatar
                                            </strong>

                                            <span>
                                                Click or drag an image here
                                            </span>

                                            <!-- Hidden native file input -->

                                            <input
                                                type="file"
                                                id="avatar"
                                                name="avatar"
                                                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                                            >

                                        </label>


                                        <div
                                            class="selected-file"
                                            id="selectedFile"
                                        ></div>


                                        <p
                                            class="field-hint"
                                            style="text-align:center; margin-top:10px;"
                                        >
                                            JPG or PNG • Maximum 2 MB
                                        </p>

                                    </div>

                                </div>


                            </div>


                            <!-- ACTIONS -->

                            <div class="form-actions">

                                <div class="action-left">

                                    <span class="form-required">*</span>

                                    Required fields

                                </div>


                                <div class="action-buttons">

                                    <a
                                        href="<?= base_url('users') ?>"
                                        class="btn btn-secondary"
                                    >
                                        ← Cancel
                                    </a>

                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        id="saveButton"
                                    >

                                        <span class="save-text">
                                            ✓ Save User
                                        </span>

                                        <span class="loading-text">
                                            Saving...
                                        </span>

                                    </button>

                                </div>

                            </div>


                        </form>

                    </div>

                </section>

            </div>

        </main>

    </div>

</div>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const username =
        document.getElementById('username');

    const fullName =
        document.getElementById('full_name');

    const email =
        document.getElementById('email');

    const password =
        document.getElementById('password');

    const usernameCounter =
        document.getElementById('usernameCounter');

    const nameCounter =
        document.getElementById('nameCounter');

    const avatarInput =
        document.getElementById('avatar');

    const avatarPreview =
        document.getElementById('avatarPreview');

    const avatarInitials =
        document.getElementById('avatarInitials');

    const avatarName =
        document.getElementById('avatarName');

    const selectedFile =
        document.getElementById('selectedFile');

    const avatarUpload =
        document.getElementById('avatarUpload');

    const passwordToggle =
        document.getElementById('passwordToggle');

    const strengthFill =
        document.getElementById('strengthFill');

    const strengthText =
        document.getElementById('strengthText');

    const form =
        document.getElementById('newUserForm');

    const saveButton =
        document.getElementById('saveButton');


    /* =========================================
       CHARACTER COUNTERS
    ========================================= */

    function updateCounters() {

        usernameCounter.textContent =
            username.value.length + '/30';

        nameCounter.textContent =
            fullName.value.length + '/80';

    }

    username.addEventListener(
        'input',
        updateCounters
    );

    fullName.addEventListener(
        'input',
        updateCounters
    );

    updateCounters();


    /* =========================================
       INITIALS
    ========================================= */

    function getInitials(name) {

        const cleanName =
            name.trim();

        if (!cleanName) {
            return '?';
        }

        const parts =
            cleanName.split(/\s+/);

        if (parts.length === 1) {

            return parts[0]
                .substring(0, 2)
                .toUpperCase();

        }

        return (
            parts[0].charAt(0) +
            parts[parts.length - 1].charAt(0)
        ).toUpperCase();

    }


    function updateAvatarName() {

        const name =
            fullName.value.trim();

        avatarName.textContent =
            name || 'New User';

        if (!avatarInput.files.length) {

            avatarPreview.innerHTML =
                '<span id="avatarInitials">' +
                getInitials(name) +
                '</span>';

        }

    }


    fullName.addEventListener(
        'input',
        updateAvatarName
    );

    updateAvatarName();


    /* =========================================
       AVATAR PREVIEW
    ========================================= */

    avatarInput.addEventListener(
        'change',
        function () {

            const file =
                this.files[0];

            if (!file) {
                return;
            }


            if (
                file.type !== 'image/jpeg' &&
                file.type !== 'image/png'
            ) {

                alert(
                    'Please choose a JPG or PNG image.'
                );

                this.value = '';

                return;

            }


            if (file.size > 2 * 1024 * 1024) {

                alert(
                    'The image must be 2 MB or smaller.'
                );

                this.value = '';

                return;

            }


            const reader =
                new FileReader();


            reader.onload =
                function (event) {

                    avatarPreview.innerHTML =
                        '<img src="' +
                        event.target.result +
                        '" alt="Avatar Preview">';

                };


            reader.readAsDataURL(file);


            selectedFile.style.display =
                'block';

            selectedFile.textContent =
                'Selected: ' + file.name;

        }
    );


    /* =========================================
       DRAG AND DROP
    ========================================= */

    [
        'dragenter',
        'dragover'
    ].forEach(function (eventName) {

        avatarUpload.addEventListener(
            eventName,
            function (event) {

                event.preventDefault();

                avatarUpload.classList.add(
                    'dragover'
                );

            }
        );

    });


    [
        'dragleave',
        'drop'
    ].forEach(function (eventName) {

        avatarUpload.addEventListener(
            eventName,
            function (event) {

                event.preventDefault();

                avatarUpload.classList.remove(
                    'dragover'
                );

            }
        );

    });


    avatarUpload.addEventListener(
        'drop',
        function (event) {

            const files =
                event.dataTransfer.files;

            if (!files.length) {
                return;
            }

            try {

                const dataTransfer =
                    new DataTransfer();

                dataTransfer.items.add(
                    files[0]
                );

                avatarInput.files =
                    dataTransfer.files;

                avatarInput.dispatchEvent(
                    new Event('change')
                );

            } catch (error) {

                console.log(
                    'Drag and drop is not supported by this browser.'
                );

            }

        }
    );


    /* =========================================
       PASSWORD SHOW / HIDE
    ========================================= */

    passwordToggle.addEventListener(
        'click',
        function () {

            if (
                password.type === 'password'
            ) {

                password.type =
                    'text';

                this.setAttribute(
                    'aria-label',
                    'Hide password'
                );

            } else {

                password.type =
                    'password';

                this.setAttribute(
                    'aria-label',
                    'Show password'
                );

            }

        }
    );


    /* =========================================
       PASSWORD STRENGTH
    ========================================= */

    password.addEventListener(
        'input',
        function () {

            const value =
                this.value;

            let strength = 0;


            if (value.length >= 6) {
                strength++;
            }

            if (value.length >= 10) {
                strength++;
            }

            if (/[A-Z]/.test(value)) {
                strength++;
            }

            if (/[0-9]/.test(value)) {
                strength++;
            }

            if (/[^A-Za-z0-9]/.test(value)) {
                strength++;
            }


            const widths = [
                '0%',
                '20%',
                '40%',
                '60%',
                '80%',
                '100%'
            ];


            strengthFill.style.width =
                widths[strength];


            const labels = [
                'Minimum 6 characters',
                'Very weak',
                'Weak',
                'Moderate',
                'Strong',
                'Very strong'
            ];


            strengthText.textContent =
                labels[strength];

        }
    );


    /* =========================================
       INPUT VALIDATION
    ========================================= */

    function validateInput(input) {

        if (!input.value.trim()) {

            input.classList.remove(
                'input-valid'
            );

            input.classList.remove(
                'input-error'
            );

            return;

        }


        if (input.checkValidity()) {

            input.classList.add(
                'input-valid'
            );

            input.classList.remove(
                'input-error'
            );

        } else {

            input.classList.add(
                'input-error'
            );

            input.classList.remove(
                'input-valid'
            );

        }

    }


    [
        username,
        fullName,
        email,
        password
    ].forEach(function (input) {

        input.addEventListener(
            'input',
            function () {

                validateInput(this);

            }
        );


        input.addEventListener(
            'blur',
            function () {

                validateInput(this);

            }
        );

    });


    /* =========================================
       SUBMIT
    ========================================= */

    form.addEventListener(
        'submit',
        function (event) {

            if (!form.checkValidity()) {

                event.preventDefault();

                form.reportValidity();

                return;

            }

            saveButton.classList.add(
                'loading'
            );

        }
    );

});

</script>

</body>

</html>