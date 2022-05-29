<!-- fusion-header-wrapper -->
<header id="header-wrapper">

    <!-- fusing-secondary-header -->
    <!-- second header -->
    <div id="second-header">
        <div class="fusion-row">
            <div class="align-right">

                <!-- second menu start -->
                <nav class="second-menu">
                    <ul>
                        <?php session_start();
                        if (!isset($_SESSION['userid'])) { ?>
                        <li>
                            <a href="login/login_form.php"><span class="menu-text">Login</span></a>
                        </li>
                        <?php } else {
                            $userid = $_SESSION['userid']; ?>
                        <li>
                            <a href=""><span class="menu-text"><?= $_SESSION['username'] ?>님</span></a>
                        </li>
                        <li>
                            <a href="login/logout.php"><span class="menu-text">Logout</span></a>
                        </li>
                        <li>
                            <a href="login/member_modify_form.php"><span class="menu-text">정보수정</span></a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href=""><span class="menu-text">Join</span></a>
                        </li>
                        <li>
                            <a href=""><span class="menu-text">About Us</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- second menu end -->

            </div>

        </div>

    </div>
    <!-- second header end -->

    <div class="sticky-header-wrapper" style="height: 202px;">
        <div class="header">
            <div class="fusion-row">

                <!-- subscribe -->
                <div class="subscript">
                    <a href="">
                        <img src="/img/common/marie_cover.jpeg" alt="마리끌레르 정기구독">

                    </a>

                    <span> + Subscribe</span>
                </div>
                <!-- subscribe end -->

                <!-- header logo stat -->
                <div class="header-logo" data-margin-top="31px" data-margin-bottom="31px" data-margin-left="0px"
                    data-margin-right="0px">
                    <a href="/" class="header-logo-link">
                        <img src="/img/common/mck_5f86c3676f201.png" alt="마리끌레르 로고" class="header-logo-img">
                    </a>
                </div>
                <!-- header logo end -->

                <!-- sns logo start -->
                <div class="sns-logo">
                    <a href="https://www.facebook.com/marieclairekorea" target="_blank"><img
                            src="/img/common/snsicon_02.png" alt=""></a>
                    <a href="https://twitter.com/marieclairekr" target="_blank"><img src="/img/common/snsicon_03.png"
                            alt=""></a>
                    <a href="https://www.instagram.com/marieclairekorea/"><img src="/img/common/snsicon_04.png"
                            alt=""></a>
                    <a href="https://www.youtube.com/user/marieclairekr"><img src="/img/common/snsicon_05.png"
                            alt=""></a>
                    <a href="https://post.naver.com/marieclairekorea"><img src="/img/common/snsicon_06.png" alt=""></a>
                </div>
                <!-- sns logo end -->


            </div>
        </div>

        <div class="header-main-menu" style="top:0px;">
            <div class="fusion-row">
                <nav class="menu">
                    <div class="blank">

                    </div>
                    <ul id="main-menu-navigation" class="main-menu">
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">FASHION</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">BEAUTY</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">CELEB</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">CULTURE</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">RUNWAY</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">LIFE</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">HOROSCOPE</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="main-menu-link" style="height: 50px;">
                                <span class="menu-text">HYANGJANG</span></a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

    </div>
</header>