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
    <script>
    function check_id() {
        var userid = document.getElementById("uid").value;
        if (userid) {
            url = "member_check_id.php?userid=" + userid;
            window.open(url, "IDchk", "width=400,height=200");
        } else
            alert("아이디를 입력하세요.");

    }

    function check_pw() {
        var pw1 = document.getElementById("pw1").value;
        var pw2 = document.getElementById("pw2").value;
        if (pw1 != pw2) {
            alert("패스워드가 일치하지 않습니다");
            return false;
        }
        return true;
    }
    </script>
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

                    <!-- title area -->
                    <div class="title_area">

                        <!-- login title  -->
                        <div id="member_title" class="fusion-row aligncenter">
                            <span>
                                <h1>회원가입</h1>
                            </span>
                            <!-- login title end -->
                        </div>

                        <!-- sub title  -->
                        <div class="member_subtitle">
                            마리끌레르 통합 회원가입 페이지에 오신 것을 환영합니다.
                            <br>
                            통합회원으로 가입하시면 다양한 서비스를 보다 편리하게 이용하실 수 있습니다.
                        </div>
                        <!-- sub title end -->

                    </div>
                    <!-- title area end -->

                    <!-- table wrap -->
                    <div class="table_wrap">

                        <!-- member form  -->
                        <form name="memFrm" method="POST" action="member_insert.php">

                            <!-- member table -->
                            <table class="table_list2 form" style="text-align:left;">
                                <tbody>
                                    <!-- id -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            아이디
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="text" id="uid" name="id" value="" class="margin_right large"
                                                placeholder="영문, 숫자로만 6-20자" maxlength="50"
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- id end -->

                                    <!-- id duplicate check -->
                                    <tr>
                                        <td class="join_id">
                                            <input class="member_btn" type="button" value="중복확인" onclick="check_id()"
                                                style="margin-top: 10px;">
                                        </td>
                                    </tr>
                                    <!-- id duplicate check end -->

                                    <!-- password -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            비밀번호
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="password" id="pw1" name="pass" value=""
                                                class="margin_right large" placeholder="영문,숫자,특수문자 포함 8자리 이상 20자 이하"
                                                maxlength="50" style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- passwrod end -->

                                    <!-- passwrod check -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            비밀번호 확인
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="password" id="pw2" name="pass_confirm" value=""
                                                class="margin_right large" placeholder="" maxlength="50"
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- password check end -->

                                    <!-- name -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            이름
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="text" id="" name="name" value="" class="margin_right large"
                                                placeholder="실명" maxlength="50"
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- name end -->

                                    <!-- email -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            e-mail
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="email" id="" name="email" value="" class="margin_right large"
                                                placeholder="" maxlength="50"
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- email -->

                                    <!-- submit btn -->
                                    <tr>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input class="login_btn" type="submit" value="회원가입" onclick="check_pw()">
                                        </td>
                                    </tr>
                                    <!-- submit btn end -->
                                </tbody>

                            </table>
                            <!-- member table end -->

                        </form>
                        <!-- member form end -->

                    </div>
                    <!-- table wrap end -->

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