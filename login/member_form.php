<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARIECLAIREKOREA - 회원가입</title>
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
                            <h1>회원가입</h1>
                        </span>
                        <!-- login title end -->

                    </div>

                    <!-- login box -->
                    <div class="login_box">

                        <!-- member form -->
                        <div class="login_form">
                            <form action="member_insert.php" method="post">
                                <table style="width:80%;margin:auto;">
                                    <tbody>
                                        <tr>
                                            <td style="width:20%;">아이디</td>
                                            <td style="width:55%;">
                                                <input type="text" name="id" id="uid" placeholder="아이디" required
                                                    autofocus style="width:100%;height:80%" value tabindex="1">
                                            </td>
                                            <td rowspan="2" style="width: 25%;text-align:right;">
                                                <input type="button" value="중복확인" onclick="check_id()">
                                            </td>
                                            <td>비밀번호</td>
                                            <td>
                                                <input type="password" name="pass" id="pw1" placeholder="비밀번호" required
                                                    style="width: 100%;height:80%" value tabindex="2">
                                            </td>
                                        </tr>
                                        <ul>
                                            <li>
                                            </li>
                                            </li>
                                            <li><input type="password" name="pass_confirm" id="pw2"
                                                    placeholder="비밀번호 확인" required>
                                            </li>
                                            <li><input type="text" name="name" placeholder="이름" required></li>
                                            <li><input type="email" name="email" id="" placeholder="example@naver.com">
                                            </li>
                                        </ul>
                                        <input class="login_btn" type="submit" value="회원가입" onclick="check_pw()"> <input
                                            type="reset" value="취소하기">

                                    </tbody>
                                </table>
                            </form>

                        </div>

                        <!-- member form end -->










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