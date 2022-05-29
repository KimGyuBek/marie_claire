<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARIECLAIREKOREA - 로그인</title>
    <link rel="stylesheet" href="../css/header.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="../css/common.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="../css/login.css?<?php echo date('Y h:i:s'); ?>">
</head>

<body>
    <div id="boxed-wrapper" style="height:auto;">
        <div class="slide-frame"></div>
        <div id="wrapper" class="fusion-wrapper">
            <div class="home" style="position: relative;top:-1px"></div>

            <!-- header start -->
            <header>
                <?php include("../header.php"); ?>
            </header>
            <!-- header end -->

            <div id="contents">
                <!-- sub_contents -->
                <div class="sub_contents">
                    <div id="login_title" class="fusion-row aligncenter">

                        <!-- login title  -->
                        <span>
                            <h1>LOGIN</h1>
                        </span>
                        <!-- login title end -->

                    </div>

                    <!-- login box -->
                    <div class="login_box">

                        <!-- login image -->
                        <div class="login_img">
                            <img src="../img/login/join_main_left.jpg" alt="">
                        </div>
                        <!-- login image end -->

                        <!-- login insert -->
                        <div class="login_insert">

                            <!-- login form -->
                            <div class="login_form">
                                <form action="login.php" method="POST">
                                    <table style="width:80%;margin:auto;">
                                        <tbody>
                                            <tr>
                                                <td style="width:20%;">아이디</td>
                                                <td style="width:55%;">
                                                    <input id="login_id" type="text" name="id" placeholder="아이디"
                                                        required style="width:100%;height:80%" value tabindex="1">
                                                </td>
                                                <td rowspan="2" style="width: 25%;text-align:right;">
                                                    <input class="login_btn" type="submit" value="로그인">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>비밀번호</td>
                                                <td>
                                                    <input id="login_pwd" type="password" name="pass" id=""
                                                        placeholder="비밀번호" required style="width: 100%;height:80%" value
                                                        tabindex="2">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <!-- login form end -->

                            <div class="login_blank_border"></div>
                            <div class="login_blank"></div>

                            <!-- login sub  -->
                            <div class="login_sub">

                                <!-- login etc -->
                                <div class="login_etc">
                                    <a href="member_form.html">회원가입</a>
                                    |
                                    <a href="">아이디 찾기</a>
                                    |
                                    <a href="">비밀번호 찾기</a>
                                </div>
                                <!-- login etc end -->

                                <!-- etc start -->
                                <div class="etc">
                                    <p>분실하신 아이디 및 비밀번호는 아이디 찾기 및 비밀번호 찾기로 확인 할 수 있습니다.</p>
                                    <p>비밀번호는 개인정보보호를 위해 가입하신 이메일로 발송해 드립니다.</p>
                                </div>
                                <!-- etc end -->

                                <div class="login_blan"></div>

                                <!-- login sns -->
                                <div class="login_sns">
                                    <div class="sns_img">
                                        <img src="/img/login/join_main_payco.png" alt="">
                                        <img src="/img/login/join_main_facebook.png" alt="">
                                    </div>
                                    <div class="sns_img">
                                        <img src="/img/login/join_main_kakao.png" alt="">
                                        <img src="/img/login/m_naver.png" alt="">
                                    </div>


                                </div>
                                <!-- login sns end -->
                            </div>
                            <!-- login sub end -->
                            <!-- login insert end -->
                            <!-- login box end -->



                        </div>


                        <div class="empty_blank"></div>

                    </div>
                </div>

                <div class="empty_blank3"></div>
            </div>
            <!-- contents end -->

        </div>
        <!-- wrapper end -->



        <!-- footer start -->
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
        <!-- footer end -->
</body>

</html>