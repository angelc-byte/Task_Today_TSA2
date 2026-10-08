<style>

    /* =========================================================
       CREATIVE GLOBAL TOPBAR
       ========================================================= */

    .app-topbar {
        position: relative;
        z-index: 100;

        height: 74px;
        min-height: 74px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 0 28px;

        background: rgba(255, 255, 255, 0.96);

        border-bottom: 1px solid #e5ecee;

        box-sizing: border-box;

        font-family: inherit;

        box-shadow: 0 2px 12px rgba(24, 63, 75, 0.035);
    }


    /* =========================================================
       DECORATIVE ACCENT
       ========================================================= */

    .app-topbar::before {
        content: "";

        position: absolute;

        left: 0;
        top: 0;

        width: 100%;
        height: 3px;

        background: linear-gradient(
            90deg,
            #174752,
            #205968,
            #4f8d99,
            #205968,
            #174752
        );

        background-size: 200% 100%;

        animation: topbarAccent 7s linear infinite;
    }


    @keyframes topbarAccent {

        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 200% 50%;
        }

    }


    /* =========================================================
       LEFT
       ========================================================= */

    .app-topbar-left {
        display: flex;
        align-items: center;

        gap: 14px;

        min-width: 0;
    }


    .app-topbar-mobile-menu {
        display: none;

        width: 38px;
        height: 38px;

        border: none;
        border-radius: 10px;

        background: #edf5f7;

        color: #205968;

        font-size: 18px;

        cursor: pointer;

        transition: all .2s ease;
    }


    .app-topbar-mobile-menu:hover {
        background: #dcebef;

        transform: translateY(-1px);
    }


    /* =========================================================
       BRAND / PAGE AREA
       ========================================================= */

    .app-topbar-heading {
        display: flex;
        flex-direction: column;

        justify-content: center;

        line-height: 1.2;
    }


    .app-topbar-label {
        display: flex;
        align-items: center;

        gap: 6px;

        margin-bottom: 4px;

        color: #4f8d99;

        font-size: 8px;

        font-weight: 850;

        letter-spacing: 1.2px;

        text-transform: uppercase;
    }


    .app-topbar-label::before {
        content: "";

        width: 5px;
        height: 5px;

        border-radius: 50%;

        background: #2ea463;

        box-shadow:
            0 0 0 3px rgba(46, 164, 99, .09);

        animation: onlinePulse 2s infinite;
    }


    @keyframes onlinePulse {

        0%,
        100% {
            box-shadow:
                0 0 0 3px rgba(46, 164, 99, .09);
        }

        50% {
            box-shadow:
                0 0 0 6px rgba(46, 164, 99, .03);
        }

    }


    .app-topbar-title {
        color: #183f4b;

        font-size: 14px;

        font-weight: 750;

        letter-spacing: -.15px;

        white-space: nowrap;
    }


    /* =========================================================
       RIGHT SIDE
       ========================================================= */

    .app-topbar-right {
        display: flex;
        align-items: center;

        height: 100%;

        gap: 9px;
    }


    /* =========================================================
       QUICK ACTION BUTTONS
       ========================================================= */

    .app-topbar-action {
        position: relative;

        width: 36px;
        height: 36px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #e4ebed;

        border-radius: 9px;

        background: #ffffff;

        color: #60747c;

        font-size: 15px;

        cursor: pointer;

        transition:
            transform .2s ease,
            background .2s ease,
            border-color .2s ease,
            color .2s ease,
            box-shadow .2s ease;
    }


    .app-topbar-action:hover {
        transform: translateY(-2px);

        background: #edf5f7;

        border-color: #cbdde1;

        color: #205968;

        box-shadow:
            0 5px 12px rgba(32, 89, 104, .08);
    }


    .app-topbar-action:active {
        transform: translateY(0);
    }


    .notification-dot {
        position: absolute;

        top: 7px;
        right: 7px;

        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: #e35d5d;

        border: 2px solid #fff;
    }


    /* =========================================================
       DATE CAPSULE
       ========================================================= */

    .app-topbar-date {
        display: flex;
        align-items: center;

        gap: 9px;

        padding: 7px 12px;

        margin-left: 3px;

        border: 1px solid #e4ebed;

        border-radius: 10px;

        background: #f9fbfb;

        transition: .2s ease;
    }


    .app-topbar-date:hover {
        background: #f1f7f8;

        border-color: #cfdee1;
    }


    .app-topbar-date-icon {
        width: 27px;
        height: 27px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 7px;

        background: #e8f2f4;

        color: #205968;

        font-size: 12px;
    }


    .app-topbar-date-text {
        display: flex;
        flex-direction: column;

        line-height: 1.2;
    }


    .app-topbar-date-label {
        color: #8a979d;

        font-size: 7px;

        font-weight: 850;

        letter-spacing: .9px;

        text-transform: uppercase;
    }


    .app-topbar-date-value {
        margin-top: 3px;

        color: #51656d;

        font-size: 9px;

        font-weight: 700;

        white-space: nowrap;
    }


    /* =========================================================
       PROFILE CHIP
       ========================================================= */

    .app-topbar-user {
        position: relative;

        display: flex;
        align-items: center;

        gap: 9px;

        margin-left: 3px;

        padding: 5px 9px 5px 5px;

        border: 1px solid transparent;

        border-radius: 12px;

        cursor: pointer;

        transition:
            background .2s ease,
            border-color .2s ease,
            box-shadow .2s ease;
    }


    .app-topbar-user:hover {
        background: #f4f8f9;

        border-color: #e1eaec;

        box-shadow:
            0 4px 12px rgba(24, 63, 75, .06);
    }


    .app-topbar-avatar {
        position: relative;

        width: 39px;
        height: 39px;

        min-width: 39px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: linear-gradient(
            145deg,
            #205968,
            #174752
        );

        color: #fff;

        font-size: 11px;

        font-weight: 850;

        letter-spacing: .3px;

        box-shadow:
            0 4px 10px rgba(32, 89, 104, .2);

        transition:
            transform .2s ease,
            box-shadow .2s ease;
    }


    .app-topbar-user:hover .app-topbar-avatar {
        transform: scale(1.05);

        box-shadow:
            0 6px 15px rgba(32, 89, 104, .25);
    }


    .app-topbar-online {
        position: absolute;

        right: -1px;
        bottom: 1px;

        width: 8px;
        height: 8px;

        border-radius: 50%;

        background: #35ad6b;

        border: 2px solid #fff;
    }


    .app-topbar-user-info {
        display: flex;
        flex-direction: column;

        justify-content: center;

        line-height: 1.2;

        min-width: 62px;
    }


    .app-topbar-user-name {
        color: #263f49;

        font-size: 11px;

        font-weight: 750;

        white-space: nowrap;
    }


    .app-topbar-user-role {
        margin-top: 3px;

        color: #89969c;

        font-size: 8px;

        font-weight: 500;

        white-space: nowrap;
    }


    .profile-arrow {
        margin-left: 2px;

        color: #8a989e;

        font-size: 10px;

        transition: transform .2s ease;
    }


    .app-topbar-user.open .profile-arrow {
        transform: rotate(180deg);
    }


    /* =========================================================
       PROFILE DROPDOWN
       ========================================================= */

    .app-topbar-profile-menu {
        position: absolute;

        top: calc(100% + 10px);

        right: 0;

        width: 205px;

        padding: 7px;

        border: 1px solid #e3eaec;

        border-radius: 12px;

        background: #fff;

        box-shadow:
            0 14px 35px rgba(24, 63, 75, .14);

        opacity: 0;

        visibility: hidden;

        transform:
            translateY(-6px)
            scale(.98);

        transform-origin: top right;

        transition:
            opacity .18s ease,
            visibility .18s ease,
            transform .18s ease;
    }


    .app-topbar-user.open
    .app-topbar-profile-menu {
        opacity: 1;

        visibility: visible;

        transform:
            translateY(0)
            scale(1);
    }


    .profile-menu-header {
        display: flex;
        align-items: center;

        gap: 9px;

        padding: 10px;

        margin-bottom: 5px;

        border-radius: 8px;

        background: #f7fafb;
    }


    .profile-menu-avatar {
        width: 31px;
        height: 31px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #205968;

        color: #fff;

        font-size: 9px;

        font-weight: 800;
    }


    .profile-menu-name {
        color: #29434d;

        font-size: 11px;

        font-weight: 750;
    }


    .profile-menu-role {
        margin-top: 2px;

        color: #8b989e;

        font-size: 8px;
    }


    .profile-menu-link {
        display: flex;
        align-items: center;

        gap: 9px;

        width: 100%;

        padding: 9px 10px;

        border: none;

        border-radius: 7px;

        background: transparent;

        color: #566970;

        text-decoration: none;

        font-size: 11px;

        font-weight: 600;

        cursor: pointer;

        box-sizing: border-box;

        transition: .15s ease;
    }


    .profile-menu-link:hover {
        background: #edf5f7;

        color: #205968;
    }


    .profile-menu-icon {
        width: 23px;
        height: 23px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 6px;

        background: #f1f5f6;

        font-size: 11px;
    }


    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 900px) {

        .app-topbar {
            padding: 0 20px;
        }

        .app-topbar-action {
            display: none;
        }

    }


    @media (max-width: 700px) {

        .app-topbar {
            height: 66px;
            min-height: 66px;

            padding: 0 15px;
        }

        .app-topbar-mobile-menu {
            display: flex;

            align-items: center;
            justify-content: center;
        }

        .app-topbar-date {
            display: none;
        }

        .app-topbar-user-info {
            display: none;
        }

        .app-topbar-user {
            padding: 4px;
        }

        .profile-arrow {
            display: none;
        }

    }


    @media (max-width: 480px) {

        .app-topbar-title {
            font-size: 12px;
        }

        .app-topbar-label {
            display: none;
        }

        .app-topbar-avatar {
            width: 36px;
            height: 36px;

            min-width: 36px;
        }

    }

</style>


<header class="app-topbar">

    <!-- LEFT SIDE -->

    <div class="app-topbar-left">

        <button
            class="app-topbar-mobile-menu"
            type="button"
            aria-label="Open navigation menu"
            id="topbarMobileMenu"
        >
            ☰
        </button>


        <div class="app-topbar-heading">

            <span class="app-topbar-label">
                TASK MANAGEMENT
            </span>

            <div class="app-topbar-title">
                Tasks for Today
            </div>

        </div>

    </div>


    <!-- RIGHT SIDE -->

    <div class="app-topbar-right">


        <!-- SEARCH -->

        <button
            type="button"
            class="app-topbar-action"
            id="topbarSearchButton"
            title="View tasks"
            aria-label="View tasks"
        >
            ⌕
        </button>


        <!-- NOTIFICATIONS -->

        <button
            type="button"
            class="app-topbar-action"
            id="topbarNotificationButton"
            title="Notifications"
            aria-label="Notifications"
        >
            ♢

            <span class="notification-dot"></span>
        </button>


        <!-- DATE -->

        <div class="app-topbar-date">

            <div class="app-topbar-date-icon">
                ▣
            </div>

            <div class="app-topbar-date-text">

                <span class="app-topbar-date-label">
                    TODAY
                </span>

                <span class="app-topbar-date-value">
                    <?= date('M d, Y') ?>
                </span>

            </div>

        </div>


        <!-- USER -->

        <div
            class="app-topbar-user"
            id="topbarUser"
            tabindex="0"
        >

            <div class="app-topbar-avatar">

                <?= session('isLoggedIn') ? 'AC' : 'G' ?>

                <span class="app-topbar-online"></span>

            </div>


            <div class="app-topbar-user-info">

                <span class="app-topbar-user-name">
                    <?= session('isLoggedIn') ? 'Angel' : 'Guest' ?>
                </span>

                <span class="app-topbar-user-role">
                    <?= session('isLoggedIn') ? 'Developer' : 'Visitor' ?>
                </span>

            </div>


            <span class="profile-arrow">
                ▾
            </span>


            <!-- PROFILE MENU -->

            <div
                class="app-topbar-profile-menu"
                id="topbarProfileMenu"
            >

                <div class="profile-menu-header">

                    <div class="profile-menu-avatar">
                        <?= session('isLoggedIn') ? 'AC' : 'G' ?>
                    </div>

                    <div>

                        <div class="profile-menu-name">
                            <?= session('isLoggedIn') ? 'Angel' : 'Guest' ?>
                        </div>

                        <div class="profile-menu-role">
                            <?= session('isLoggedIn') ? 'Developer' : 'Visitor' ?>
                        </div>

                    </div>

                </div>


                <a
                    href="<?= base_url('profile') ?>"
                    class="profile-menu-link"
                >

                    <span class="profile-menu-icon">
                        ●
                    </span>

                    My Profile

                </a>


                <?php if (session('isLoggedIn')): ?>
                    <form action="<?= site_url('logout') ?>" method="post">
                        <?= csrf_field() ?>
                        <button type="submit" class="profile-menu-link">
                            <span class="profile-menu-icon">×</span>
                            Log Out
                        </button>
                    </form>
                <?php else: ?>
                    <a href="<?= site_url('login') ?>" class="profile-menu-link">
                        <span class="profile-menu-icon">→</span>
                        Sign In
                    </a>
                <?php endif; ?>


            </div>

        </div>

    </div>

</header>


<script>

(function () {

    'use strict';


    /* =========================================================
       PROFILE DROPDOWN
       ========================================================= */

    const topbarUser =
        document.getElementById(
            'topbarUser'
        );


    if (topbarUser) {

        topbarUser.addEventListener(
            'click',
            function (event) {

                event.stopPropagation();

                this.classList.toggle(
                    'open'
                );

            }
        );


        topbarUser.addEventListener(
            'keydown',
            function (event) {

                if (
                    event.key === 'Enter' ||
                    event.key === ' '
                ) {

                    event.preventDefault();

                    this.classList.toggle(
                        'open'
                    );

                }

            }
        );

    }


    document.addEventListener(
        'click',
        function () {

            if (topbarUser) {

                topbarUser.classList.remove(
                    'open'
                );

            }

        }
    );


    /* =========================================================
       SEARCH BUTTON
       ========================================================= */

    const searchButton =
        document.getElementById(
            'topbarSearchButton'
        );


    if (searchButton) {

        searchButton.addEventListener(
            'click',
            function () {

                const searchInput =
                    document.querySelector(
                        '#taskSearch, input[type="search"]'
                    );


                if (searchInput) {

                    searchInput.focus();

                    searchInput.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });

                    searchInput.style.boxShadow =
                        '0 0 0 4px rgba(32,89,104,.12)';

                    setTimeout(
                        function () {

                            searchInput.style.boxShadow =
                                '';

                        },
                        1200
                    );

                } else {
                    window.location.href = "<?= site_url('tasks') ?>";
                }

            }
        );

    }


    /* =========================================================
       NOTIFICATION BUTTON
       ========================================================= */

    const notificationButton =
        document.getElementById(
            'topbarNotificationButton'
        );


    if (notificationButton) {

        notificationButton.addEventListener(
            'click',
            function () {

                const existing =
                    document.getElementById(
                        'topbarNotificationPopup'
                    );


                if (existing) {

                    existing.remove();

                    return;

                }


                const popup =
                    document.createElement(
                        'div'
                    );


                popup.id =
                    'topbarNotificationPopup';


                popup.style.position =
                    'fixed';

                popup.style.top =
                    '82px';

                popup.style.right =
                    '125px';

                popup.style.width =
                    '260px';

                popup.style.padding =
                    '16px';

                popup.style.background =
                    '#ffffff';

                popup.style.border =
                    '1px solid #e3eaec';

                popup.style.borderRadius =
                    '12px';

                popup.style.boxShadow =
                    '0 14px 35px rgba(24,63,75,.14)';

                popup.style.zIndex =
                    '9999';


                popup.innerHTML = `

                    <div style="
                        color:#29434d;
                        font-size:13px;
                        font-weight:750;
                        margin-bottom:6px;
                    ">
                        Notifications
                    </div>

                    <div style="
                        color:#8a979d;
                        font-size:11px;
                        line-height:1.5;
                    ">
                        You're all caught up. There are no new notifications.
                    </div>

                `;


                document.body.appendChild(
                    popup
                );


                setTimeout(
                    function () {

                        document.addEventListener(
                            'click',
                            function closeNotification(event) {

                                if (
                                    !popup.contains(event.target) &&
                                    event.target !== notificationButton
                                ) {

                                    popup.remove();

                                    document.removeEventListener(
                                        'click',
                                        closeNotification
                                    );

                                }

                            }
                        );

                    },
                    10
                );

            }
        );

    }


    /* =========================================================
       MOBILE MENU
       ========================================================= */

    const mobileMenu =
        document.getElementById(
            'topbarMobileMenu'
        );


    if (mobileMenu) {

        mobileMenu.addEventListener(
            'click',
            function () {

                const sidebar =
                    document.querySelector(
                        '.sidebar'
                    );


                if (sidebar) {

                    sidebar.classList.toggle(
                        'show'
                    );

                }


                document.body.classList.toggle(
                    'mobile-sidebar-open'
                );

            }
        );

        const closeMobileMenu = function () {
            document.querySelector('.sidebar')?.classList.remove('show');
            document.body.classList.remove('mobile-sidebar-open');
        };

        document.getElementById('sidebarClose')?.addEventListener('click', closeMobileMenu);
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') closeMobileMenu();
        });
        document.addEventListener('click', function (event) {
            if (!document.body.classList.contains('mobile-sidebar-open')) return;
            if (event.target.closest('.sidebar') || event.target.closest('#topbarMobileMenu')) return;
            closeMobileMenu();
        });

    }


})();

</script>
