<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");
$sql = "select name from members where id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$name = $row['name'];

$dtable = "";
$dtable = "fashion";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARIECLAIREKOREA - 글쓰기</title>
    <link rel="stylesheet" href="../css/header.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="../css/common.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="../css/login.css?<?php echo date('Y h:i:s'); ?>">
    <script>
    function select_dtable() {
        var dtable_select = document.getElementById("dtable");

        var selectValue = dtable_select.options[dtable_select.selectedIndex].value;
        setCookie('selected', selectValue, 3);
        // alert(selectValue);
        history.go();

    }

    function setCookie(cookie_name, value, days) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + days);
        // 설정 일수만큼 현재시간에 만료값으로 지정

        var cookie_value = escape(value) + ((days == null) ? '' : '; expires=' + exdate.toUTCString());
        document.cookie = cookie_name + '=' + cookie_value;
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
                                <h1>글쓰기</h1>
                            </span>
                            <!-- login title end -->
                        </div>

                    </div>
                    <!-- title area end -->

                    <!-- table wrap -->
                    <div class="table_wrap">

                        <!-- member form  -->
                        <form name="memFrm" method="POST" action="board_insert.php?dtable=<?= $_COOKIE['selected'] ?>">
                            <input type="hidden" name="id" value="<?= $id ?>">

                            <!-- member table -->
                            <table class="table_list2 form" style="text-align:left;">
                                <tbody>

                                    <!-- select -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            게시판
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <select name="dtable[]" id="dtable" onchange="select_dtable()">
                                                <option value="게시판" selected>게시판</option>
                                                <option value="fashion">FASHION</option>
                                                <option value="beauty">BEAUTY</option>
                                                <option value="celeb">CELEB</option>
                                                <option value="culture">CULTURE</option>
                                                <option value="life">LIFE</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <!-- select end -->

                                    <!-- editor -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            작성자
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="text" id="uid" name="name" value="<?= $name ?>"
                                                class="margin_right large" placeholder="영문, 숫자로만 6-20자" maxlength="50"
                                                style="background-color: rgb(235, 235, 235);" required readonly>
                                        </td>
                                    </tr>
                                    <!-- editor end -->

                                    <!-- main_title -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            메인 제목
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="text" id="uid" name="main_title" value="" placeholder="100자 이내"
                                                class="margin_right large" maxlength="100"
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- main_title ned -->

                                    <!-- sub_title -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            부제목
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="text" id="uid" name="sub_title" value="" placeholder="100자 이내"
                                                class="margin_right large" maxlength="100"
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- sub_title end -->

                                    <!-- subject -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            타이틀
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input type="text" id="uid" name="subject" value="" placeholder="100자 이내"
                                                class="margin_right large" maxlength="100"
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- subject end -->

                                    <!-- file_dir -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            이미지 경로
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <!-- <input type="text" id="uid" name="file_dir" value="/img/post/beauty/"
                                                placeholder="100자 이내" class="margin_right large" maxlength=""
                                                style="background-color: rgb(235, 235, 235);" required> -->
                                            <input type="text" id="uid" name="file_dir"
                                                value="/img/post/<?= $_COOKIE['selected'] ?>/" placeholder="100자 이내"
                                                class="margin_right large" maxlength=""
                                                style="background-color: rgb(235, 235, 235);" required>
                                        </td>
                                    </tr>
                                    <!-- file_dir end -->

                                    <!-- content -->
                                    <tr>
                                        <th>
                                            <span class="point2">*</span>
                                            내용
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <textarea name="content" id="uid"
                                                style="background-color: rgb(235, 235, 235); height:700px;"
                                                required></textarea>
                                        </td>
                                    </tr>
                                    <!-- content end -->

                                    <!-- submit btn -->
                                    <tr>
                                        <th>
                                            <span class="point2"></span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="join_id">
                                            <input class="login_btn" type="submit" value="등록" onclick="">
                                        </td>
                                    </tr>
                                    <!-- submit btn end -->

                                </tbody>

                            </table>
                            <!-- form table end -->

                        </form>
                        <!-- form end -->

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