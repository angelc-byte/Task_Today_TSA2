<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Add Customer | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        /* =====================================================
           ADD CUSTOMER — CUSTOMER CREATION CENTER
           ===================================================== */

        .customer-form-page {
            max-width: 1180px;
            margin: 0 auto;
        }


        /* =====================================================
           PAGE HEADER
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
           MAIN GRID
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
           FORM CARD
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
           FORM GROUP
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


        .cf-input::placeholder {
            color: #aab5b9;
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
            width: 58px;
            height: 58px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 16px;
            background: #eaf5f6;
            color: #205968;
            font-size: 18px;
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
           FORM ACTIONS
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
           PREVIEW PANEL
           ===================================================== */

        .cf-preview {
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


        .cf-preview::before {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            right: -70px;
            top: -70px;
            border-radius: 50%;
            border: 30px solid rgba(255,255,255,.045);
        }


        .cf-preview::after {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            right: 35px;
            bottom: -65px;
            border-radius: 50%;
            background: rgba(255,255,255,.035);
        }


        .cf-preview-label {
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
            width: 72px;
            height: 72px;
            margin: 28px auto 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 22px;
            background: rgba(255,255,255,.13);
            border: 1px solid rgba(255,255,255,.13);
            color: #ffffff;
            font-size: 24px;
            font-weight: 800;
            transition: .25s ease;
        }


        .cf-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        .cf-preview-name {
            position: relative;
            z-index: 2;
            margin: 0;
            text-align: center;
            color: #ffffff;
            font-size: 19px;
            font-weight: 800;
            word-break: break-word;
        }


        .cf-preview-subtitle {
            position: relative;
            z-index: 2;
            margin: 5px 0 23px;
            text-align: center;
            color: rgba(255,255,255,.58);
            font-size: 11px;
        }


        .cf-preview-line {
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


        .cf-preview-line-icon {
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


        .cf-preview-note {
            position: relative;
            z-index: 2;
            margin-top: 19px;
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

            .cf-preview {
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
                            Add New Customer
                        </h1>

                        <p>
                            Create a new customer record and keep their contact information organized.
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
                                +
                            </div>

                            <div>

                                <h2>
                                    Customer Information
                                </h2>

                                <p>
                                    Enter the customer's basic details.
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
                                action="<?= base_url('customers/create') ?>"
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
                                            value="<?= old('full_name') ?>"
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
                                            value="<?= old('email') ?>"
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
                                            value="<?= old('phone') ?>"
                                            placeholder="09XX XXX XXXX"
                                            autocomplete="tel"
                                        >

                                    </div>


                                    <div class="cf-help">
                                        A phone number makes customer contact easier.
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
                                            <span id="uploadInitials">
                                                C
                                            </span>
                                        </div>


                                        <div class="cf-avatar-upload-content">

                                            <strong>
                                                Upload a customer photo
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
                                        id="saveButton"
                                    >
                                        ✓
                                        Save Customer
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
                         LIVE PREVIEW
                         ================================================= -->

                    <aside class="cf-preview">

                        <div class="cf-preview-label">
                            Customer Preview
                        </div>


                        <div
                            class="cf-avatar"
                            id="previewAvatar"
                        >
                            <span id="previewInitials">
                                C
                            </span>
                        </div>


                        <h2
                            class="cf-preview-name"
                            id="previewName"
                        >
                            New Customer
                        </h2>


                        <p class="cf-preview-subtitle">
                            New customer record
                        </p>


                        <div class="cf-preview-line">

                            <span class="cf-preview-line-icon">
                                @
                            </span>

                            <span id="previewEmail">
                                No email entered
                            </span>

                        </div>


                        <div class="cf-preview-line">

                            <span class="cf-preview-line-icon">
                                ☎
                            </span>

                            <span id="previewPhone">
                                No phone entered
                            </span>

                        </div>


                        <div class="cf-preview-note">
                            Your customer information will appear here as you type. The avatar preview will update when you choose a photo.
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

    const emailInput =
        document.getElementById('email');

    const phoneInput =
        document.getElementById('phone');

    const avatarInput =
        document.getElementById('avatar');


    const previewName =
        document.getElementById('previewName');

    const previewEmail =
        document.getElementById('previewEmail');

    const previewPhone =
        document.getElementById('previewPhone');

    const previewAvatar =
        document.getElementById('previewAvatar');

    const previewInitials =
        document.getElementById('previewInitials');

    const uploadPreview =
        document.getElementById('uploadPreview');

    const uploadInitials =
        document.getElementById('uploadInitials');

    const fileError =
        document.getElementById('fileError');

    const customerForm =
        document.getElementById('customerForm');


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
       UPDATE BASIC PREVIEW
       ===================================================== */

    function updatePreview() {

        const name =
            nameInput.value.trim();

        const email =
            emailInput.value.trim();

        const phone =
            phoneInput.value.trim();


        previewName.textContent =
            name || 'New Customer';


        previewEmail.textContent =
            email || 'No email entered';


        previewPhone.textContent =
            phone || 'No phone entered';


        const initials =
            getInitials(name);


        previewInitials.textContent =
            initials;

        uploadInitials.textContent =
            initials;

    }


    /* =====================================================
       AVATAR PREVIEW
       ===================================================== */

    avatarInput.addEventListener(
        'change',
        function () {

            fileError.style.display = 'none';
            fileError.textContent = '';

            const file =
                this.files[0];


            if (!file) {

                resetAvatarPreview();

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

                resetAvatarPreview();

                return;

            }


            if (file.size > 2 * 1024 * 1024) {

                showFileError(
                    'The image must not be larger than 2 MB.'
                );

                this.value = '';

                resetAvatarPreview();

                return;

            }


            const reader =
                new FileReader();


            reader.onload =
                function (event) {

                    const imageUrl =
                        event.target.result;


                    uploadPreview.innerHTML =
                        '<img src="' +
                        imageUrl +
                        '" alt="Avatar Preview">';


                    previewAvatar.innerHTML =
                        '<img src="' +
                        imageUrl +
                        '" alt="Customer Avatar">';

                };


            reader.readAsDataURL(file);

        }
    );


    /* =====================================================
       RESET AVATAR PREVIEW
       ===================================================== */

    function resetAvatarPreview() {

        const initials =
            getInitials(nameInput.value);


        uploadPreview.innerHTML =
            '<span id="uploadInitials">' +
            initials +
            '</span>';


        previewAvatar.innerHTML =
            '<span id="previewInitials">' +
            initials +
            '</span>';

    }


    /* =====================================================
       FILE ERROR
       ===================================================== */

    function showFileError(message) {

        fileError.textContent =
            message;

        fileError.style.display =
            'block';

    }


    /* =====================================================
       UPDATE INITIALS WHEN NAME CHANGES
       ===================================================== */

    nameInput.addEventListener(
        'input',
        function () {

            updatePreview();


            if (!avatarInput.files.length) {

                resetAvatarPreview();

            }

        }
    );


    emailInput.addEventListener(
        'input',
        updatePreview
    );


    phoneInput.addEventListener(
        'input',
        updatePreview
    );


    /* =====================================================
       FINAL FORM VALIDATION
       ===================================================== */

    customerForm.addEventListener(
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

                return;

            }

        }
    );


    /* =====================================================
       INITIAL PREVIEW
       ===================================================== */

    updatePreview();

</script>


</body>

</html>