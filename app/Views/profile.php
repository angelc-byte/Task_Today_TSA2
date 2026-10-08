<?php

$fullName = $user['full_name'] ?? 'User';
$username = $user['username'] ?? 'user';
$email = $user['email'] ?? 'No email available';
$createdAt = $user['created_at'] ?? null;
$avatar = $user['avatar'] ?? '';

$nameParts = preg_split('/\s+/', trim($fullName));

$initials = '';

foreach ($nameParts as $part) {

    if ($part !== '') {
        $initials .= strtoupper(substr($part, 0, 1));
    }

    if (strlen($initials) >= 2) {
        break;
    }
}

if ($initials === '') {
    $initials = 'U';
}

$accountDate = $createdAt
    ? date('F d, Y', strtotime($createdAt))
    : 'Not available';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Profile | Tasks for Today</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >

    <style>

        /* =====================================================
           PROFILE PAGE
           ===================================================== */

        .profile-page {

            position: relative;

            max-width: 1120px;

            margin: 0 auto;

            padding-bottom: 50px;

            animation: profilePageIn .45s ease;

        }


        @keyframes profilePageIn {

            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* =====================================================
           BACKGROUND
           ===================================================== */

        .profile-page::before {

            content: "";

            position: fixed;

            width: 390px;
            height: 390px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(32, 89, 104, .09) 0%,
                    rgba(32, 89, 104, 0) 70%
                );

            top: 100px;
            right: 20px;

            pointer-events: none;

            z-index: -1;

            animation: profileFloat 9s ease-in-out infinite;

        }


        .profile-page::after {

            content: "";

            position: fixed;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(36, 122, 89, .07) 0%,
                    rgba(36, 122, 89, 0) 70%
                );

            bottom: 30px;
            left: 250px;

            pointer-events: none;

            z-index: -1;

            animation: profileFloatReverse 11s ease-in-out infinite;

        }


        @keyframes profileFloat {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-18px, 18px);
            }

        }


        @keyframes profileFloatReverse {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(18px, -15px);
            }

        }


        /* =====================================================
           PROFILE GRID
           ===================================================== */

        .profile-layout {

            display: grid;

            grid-template-columns: 350px minmax(0, 1fr);

            gap: 20px;

            align-items: stretch;

        }


        /* =====================================================
           IDENTITY CARD
           ===================================================== */

        .profile-identity {

            position: relative;

            overflow: hidden;

            padding: 28px;

            border: 1px solid #dfe8ea;

            border-radius: 16px;

            background: white;

            box-shadow:
                0 8px 28px rgba(24, 63, 72, .07);

            text-align: center;

        }


        .profile-identity::before {

            content: "";

            position: absolute;

            left: 0;
            right: 0;
            top: 0;

            height: 90px;

            background:
                linear-gradient(
                    135deg,
                    #205968,
                    #2f7180
                );

        }


        .profile-identity::after {

            content: "";

            position: absolute;

            width: 130px;
            height: 130px;

            border-radius: 50%;

            background: rgba(255, 255, 255, .06);

            top: -55px;
            right: -25px;

        }


       /* =====================================================
   AVATAR
   ===================================================== */

.profile-avatar-wrap {

    position: relative;

    z-index: 3;

    width: 110px;
    height: 110px;

    margin: 18px auto 18px;

}


.profile-avatar {

    width: 110px;
    height: 110px;

    display: flex;

    align-items: center;

    justify-content: center;

    overflow: hidden;

    box-sizing: border-box;

    border-radius: 50%;

    border: 5px solid #ffffff;

    background: #1F417D;

    color: #ffffff;

    font-size: 30px;

    font-weight: 800;

    line-height: 1;

    box-shadow:
        0 10px 25px rgba(31, 65, 125, .25);

}


.profile-avatar img {

    display: block;

    width: 100%;

    height: 100%;

    min-width: 100%;

    min-height: 100%;

    object-fit: cover;

    object-position: center;

    border-radius: 50%;

}


.profile-avatar-fallback {

    display: none;

    align-items: center;

    justify-content: center;

    width: 100%;

    height: 100%;

    color: #ffffff;

    background: #1F417D;

    font-size: 30px;

    font-weight: 800;

}


.profile-online {

    position: absolute;

    right: 5px;

    bottom: 5px;

    width: 17px;

    height: 17px;

    border: 3px solid white;

    border-radius: 50%;

    background: #35a66f;

    box-shadow:
        0 2px 7px rgba(53, 166, 111, .35);

}


        /* =====================================================
           NAME
           ===================================================== */

        .profile-identity h2 {

            position: relative;

            z-index: 2;

            margin: 0;

            color: #263238;

            font-size: 22px;

            letter-spacing: -.3px;

        }


        .profile-username {

            position: relative;

            z-index: 2;

            margin: 5px 0 18px;

            color: #718087;

            font-size: 12px;

        }


        .profile-role {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            padding: 6px 11px;

            border-radius: 20px;

            background: #eaf5f6;

            color: #205968;

            font-size: 9px;

            font-weight: 800;

            letter-spacing: .4px;

        }


        .profile-role::before {

            content: "";

            width: 5px;
            height: 5px;

            border-radius: 50%;

            background: #35a66f;

        }


        /* =====================================================
           PROFILE COMPLETION
           ===================================================== */

        .profile-completion {

            margin-top: 25px;

            padding-top: 20px;

            border-top: 1px solid #edf1f2;

            text-align: left;

        }


        .completion-heading {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 8px;

        }


        .completion-heading span {

            color: #718087;

            font-size: 10px;

            font-weight: 700;

        }


        .completion-heading strong {

            color: #205968;

            font-size: 11px;

        }


        .completion-track {

            height: 7px;

            overflow: hidden;

            border-radius: 20px;

            background: #edf2f3;

        }


        .completion-fill {

            width: 100%;

            height: 100%;

            border-radius: 20px;

            background:
                linear-gradient(
                    90deg,
                    #205968,
                    #3c8b82,
                    #247a59
                );

            animation: completionGrow .9s ease;

        }


        @keyframes completionGrow {

            from {
                width: 0;
            }

            to {
                width: 100%;
            }

        }


        .completion-note {

            margin: 8px 0 0;

            color: #8a979c;

            font-size: 9px;

        }


        /* =====================================================
           DETAILS CARD
           ===================================================== */

        .profile-details {

            padding: 26px;

            border: 1px solid #dfe8ea;

            border-radius: 16px;

            background: white;

            box-shadow:
                0 8px 28px rgba(24, 63, 72, .07);

        }


        .details-heading {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 20px;

        }


        .details-heading h3 {

            margin: 0;

            color: #263238;

            font-size: 16px;

        }


        .details-heading span {

            color: #9aa7ab;

            font-size: 10px;

        }


        /* =====================================================
           INFORMATION ROWS
           ===================================================== */

        .profile-info-list {

            display: flex;

            flex-direction: column;

        }


        .profile-info-row {

            display: grid;

            grid-template-columns: 180px minmax(0, 1fr);

            align-items: center;

            min-height: 68px;

            border-bottom: 1px solid #edf1f2;

        }


        .profile-info-row:last-child {

            border-bottom: 0;

        }


        .info-label {

            display: flex;

            align-items: center;

            gap: 9px;

            color: #718087;

            font-size: 11px;

            font-weight: 600;

        }


        .info-icon {

            width: 28px;
            height: 28px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 8px;

            background: #eaf5f6;

            color: #205968;

            font-size: 11px;

        }


        .info-value {

            color: #263238;

            font-size: 12px;

            font-weight: 700;

            word-break: break-word;

        }


        .email-value {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 10px;

        }


        .copy-email {

            flex-shrink: 0;

            padding: 6px 9px;

            border: 1px solid #dfe8ea;

            border-radius: 7px;

            background: white;

            color: #718087;

            font-size: 9px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;

        }


        .copy-email:hover {

            color: #205968;

            border-color: #b8d0d5;

            background: #f5fafb;

        }


        /* =====================================================
           STATUS
           ===================================================== */

        .account-status {

            display: flex;

            align-items: center;

            gap: 7px;

            width: fit-content;

            padding: 6px 10px;

            border-radius: 20px;

            background: #e8f5ef;

            color: #247a59;

            font-size: 9px;

            font-weight: 800;

        }


        .account-status::before {

            content: "";

            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #35a66f;

        }


        /* =====================================================
           QUICK ACTIONS
           ===================================================== */

        .quick-actions {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 12px;

            margin-top: 18px;

        }


        .quick-action {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 14px;

            border: 1px solid #e0e9eb;

            border-radius: 11px;

            background: #fbfcfc;

            text-decoration: none;

            transition:
                transform .2s ease,
                box-shadow .2s ease,
                border-color .2s ease;

        }


        .quick-action:hover {

            transform: translateY(-3px);

            border-color: #bcd3d8;

            box-shadow:
                0 8px 20px rgba(24, 63, 72, .08);

        }


        .quick-action-icon {

            width: 34px;
            height: 34px;

            display: flex;

            align-items: center;

            justify-content: center;

            flex-shrink: 0;

            border-radius: 9px;

            background: #eaf5f6;

            color: #205968;

            font-size: 13px;

        }


        .quick-action-text strong {

            display: block;

            color: #263238;

            font-size: 11px;

        }


        .quick-action-text span {

            display: block;

            margin-top: 3px;

            color: #8a979c;

            font-size: 9px;

        }


        /* =====================================================
           NOT FOUND
           ===================================================== */

        .profile-not-found {

            padding: 45px;

            border: 1px solid #dfe8ea;

            border-radius: 15px;

            background: white;

            color: #718087;

            text-align: center;

            box-shadow:
                0 8px 28px rgba(24, 63, 72, .07);

        }


        /* =====================================================
           TOAST
           ===================================================== */

        .profile-toast {

            position: fixed;

            right: 25px;
            bottom: 25px;

            z-index: 9999;

            padding: 11px 15px;

            border-radius: 9px;

            background: #205968;

            color: white;

            font-size: 11px;

            font-weight: 700;

            box-shadow:
                0 10px 25px rgba(24, 63, 72, .20);

            opacity: 0;

            transform: translateY(15px);

            pointer-events: none;

            transition: .25s ease;

        }


        .profile-toast.show {

            opacity: 1;

            transform: translateY(0);

        }


        /* =====================================================
           RESPONSIVE
           ===================================================== */

        @media (max-width: 850px) {

            .profile-layout {

                grid-template-columns: 1fr;

            }


            .profile-info-row {

                grid-template-columns: 150px minmax(0, 1fr);

            }

        }


        @media (max-width: 600px) {

            .profile-details,
            .profile-identity {

                padding: 20px;

            }


            .profile-info-row {

                grid-template-columns: 1fr;

                gap: 7px;

                padding: 14px 0;

            }


            .email-value {

                align-items: flex-start;

                flex-direction: column;

            }


            .quick-actions {

                grid-template-columns: 1fr;

            }

        }

    </style>


    <link rel="stylesheet" href="<?= base_url('css/app-theme.css?v=20261005') ?>">

</head>


<body>

<div class="app-layout">


    <?= view('layout/sidebar') ?>


    <div class="main-area">


        <?= view('layout/topbar') ?>


        <main class="page-content">


            <div class="profile-page">


                <!-- PAGE HEADING -->

                <section class="page-heading">

                    <span class="eyebrow">
                        ACCOUNT
                    </span>

                    <h1>
                        Profile
                    </h1>

                    <p>
                        View your account information and profile details.
                    </p>

                </section>


                <?php if (!empty($user)): ?>


                    <div class="profile-layout">


                        <!-- =================================================
                             PROFILE IDENTITY
                             ================================================= -->

                        <section class="profile-identity">


                            <div class="profile-avatar-wrap">


                                <div class="profile-avatar">


                                    <?php if (!empty($avatar)): ?>

                                        <img
                                            id="profileAvatarImage"
                                            src="<?= base_url('uploads/avatars/' . rawurlencode($avatar)) ?>"
                                            alt=""
                                            onerror="handleAvatarError(this)"
                                        >

                                        <span
                                            id="profileAvatarFallback"
                                            class="profile-avatar-fallback"
                                        >
                                            <?= esc($initials) ?>
                                        </span>


                                    <?php else: ?>

                                        <span
                                            class="profile-avatar-fallback"
                                            style="display:flex;"
                                        >
                                            <?= esc($initials) ?>
                                        </span>

                                    <?php endif; ?>


                                </div>


                                <span class="profile-online"></span>

                            </div>


                            <h2>
                                <?= esc($fullName) ?>
                            </h2>


                            <p class="profile-username">
                                @<?= esc($username) ?>
                            </p>


                            <span class="profile-role">
                                System User
                            </span>


                            <div class="profile-completion">


                                <div class="completion-heading">

                                    <span>
                                        Profile Status
                                    </span>

                                    <strong>
                                        Complete
                                    </strong>

                                </div>


                                <div class="completion-track">

                                    <div class="completion-fill"></div>

                                </div>


                                <p class="completion-note">
                                    Your account information is up to date.
                                </p>


                            </div>


                        </section>


                        <!-- =================================================
                             ACCOUNT DETAILS
                             ================================================= -->

                        <section class="profile-details">


                            <div class="details-heading">

                                <h3>
                                    Account Information
                                </h3>

                                <span>
                                    Personal details
                                </span>

                            </div>


                            <div class="profile-info-list">


                                <div class="profile-info-row">

                                    <div class="info-label">

                                        <span class="info-icon">
                                            ◉
                                        </span>

                                        Full Name

                                    </div>


                                    <div class="info-value">

                                        <?= esc($fullName) ?>

                                    </div>

                                </div>


                                <div class="profile-info-row">

                                    <div class="info-label">

                                        <span class="info-icon">
                                            @
                                        </span>

                                        Username

                                    </div>


                                    <div class="info-value">

                                        @<?= esc($username) ?>

                                    </div>

                                </div>


                                <div class="profile-info-row">

                                    <div class="info-label">

                                        <span class="info-icon">
                                            ✉
                                        </span>

                                        Email Address

                                    </div>


                                    <div class="info-value email-value">

                                        <span>
                                            <?= esc($email) ?>
                                        </span>


                                        <?php if (!empty($user['email'])): ?>

                                            <button
                                                type="button"
                                                class="copy-email"
                                                id="copyEmailButton"
                                                data-email="<?= esc($user['email']) ?>"
                                            >
                                                Copy
                                            </button>

                                        <?php endif; ?>

                                    </div>

                                </div>


                                <div class="profile-info-row">

                                    <div class="info-label">

                                        <span class="info-icon">
                                            ◷
                                        </span>

                                        Account Created

                                    </div>


                                    <div class="info-value">

                                        <?= esc($accountDate) ?>

                                    </div>

                                </div>


                                <div class="profile-info-row">

                                    <div class="info-label">

                                        <span class="info-icon">
                                            ✓
                                        </span>

                                        Account Status

                                    </div>


                                    <div class="info-value">

                                        <span class="account-status">
                                            Active
                                        </span>

                                    </div>

                                </div>


                            </div>


                            <!-- QUICK ACTIONS -->

                            <div class="quick-actions">


                                <a
                                    href="<?= base_url(session('isLoggedIn') ? 'tasks/new' : 'login') ?>"
                                    class="quick-action"
                                >

                                    <span class="quick-action-icon">
                                        ✎
                                    </span>


                                    <span class="quick-action-text">

                                        <strong>
                                            <?= session('isLoggedIn') ? 'Add Task' : 'Sign In' ?>
                                        </strong>

                                        <span>
                                            <?= session('isLoggedIn') ? 'Create a new task' : 'Manage your tasks' ?>
                                        </span>

                                    </span>

                                </a>


                                <a
                                    href="<?= base_url('tasks') ?>"
                                    class="quick-action"
                                >

                                    <span class="quick-action-icon">
                                        ✓
                                    </span>


                                    <span class="quick-action-text">

                                        <strong>
                                            View Tasks
                                        </strong>

                                        <span>
                                            Continue your work
                                        </span>

                                    </span>

                                </a>


                            </div>


                        </section>


                    </div>


                <?php else: ?>


                    <section class="profile-not-found">

                        <div style="font-size: 30px; margin-bottom: 10px;">
                            ◯
                        </div>

                        <strong style="color: #263238;">
                            User profile not found
                        </strong>

                        <p style="margin: 7px 0 0;">
                            The account information could not be loaded.
                        </p>

                    </section>


                <?php endif; ?>


            </div>


        </main>

    </div>

</div>


<!-- TOAST -->

<div
    class="profile-toast"
    id="profileToast"
>
    Email copied successfully.
</div>


<script>

    /* =========================================================
       AVATAR FALLBACK
       ========================================================= */

    function handleAvatarError(image) {

        const fallback =
            document.getElementById(
                'profileAvatarFallback'
            );


        /*
         * First try the alternate folder.
         * Your edit page previously used uploads/avatars,
         * while the Users page uses uploads/users.
         */

        if (
            image.dataset.triedAlternate !== 'true'
        ) {

            image.dataset.triedAlternate = 'true';

            image.src =
                "<?= base_url('uploads/avatars/') ?>" +
                encodeURIComponent(
                    "<?= esc($avatar) ?>"
                );

            return;

        }


        /*
         * If neither location contains the image,
         * show the user's initials instead of
         * displaying broken-image text.
         */

        image.style.display = 'none';


        if (fallback) {

            fallback.style.display = 'flex';

        }

    }


    /* =========================================================
       COPY EMAIL
       ========================================================= */

    const copyEmailButton =
        document.getElementById(
            'copyEmailButton'
        );

    const profileToast =
        document.getElementById(
            'profileToast'
        );


    if (copyEmailButton) {

        copyEmailButton.addEventListener(
            'click',
            function() {

                const email =
                    this.dataset.email;


                if (
                    navigator.clipboard &&
                    navigator.clipboard.writeText
                ) {

                    navigator.clipboard.writeText(email)
                        .then(function() {

                            showProfileToast();

                        });

                } else {

                    const temporaryInput =
                        document.createElement('input');

                    temporaryInput.value =
                        email;

                    document.body.appendChild(
                        temporaryInput
                    );

                    temporaryInput.select();

                    document.execCommand(
                        'copy'
                    );

                    temporaryInput.remove();

                    showProfileToast();

                }

            }
        );

    }


    function showProfileToast() {

        if (!profileToast) {
            return;
        }


        profileToast.classList.add(
            'show'
        );


        setTimeout(function() {

            profileToast.classList.remove(
                'show'
            );

        }, 2200);

    }

</script>


</body>

</html>
