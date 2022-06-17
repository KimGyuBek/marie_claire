<?php
$dtable = $_GET['dtable'];
$num = $_GET['num'];
$title = "";
$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");
$sql = "select * from " . $dtable . " where num = " . $num;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$title .= $row['main_title'];

// die($_SESSION['userlevel']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - 마리끌레르 코리아</title>
    <link rel="stylesheet" href="/css/header.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="/css/common.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="/css/main.css?<?php echo date('Y h:i:s'); ?>">
    <link rel="stylesheet" href="/css/login.css?<?php echo date('Y h:i:s'); ?>">
    <script>
    function onclick_edit() {
        if (confirm("게시글을 수정하시겠습니까?"))
            location.href = "/board/board_form_modify.php?dtable=<?= $dtable ?>&num=<?= $num ?>";
    }

    function onclick_delete() {
        if (confirm("게시글을 삭제하시겠습니까?"))
            location.href = "/board/board_delete.php?dtable=<?= $dtable ?>&num=<?= $num ?>";
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

        </div>

        <div class="empty_blank1"></div>
        <div id="contents">

            <!-- sub_contents -->
            <div class="sub_contents aligncenter">

                <!-- page view -->
                <div class="page_view aligncenter">

                    <!-- main_title -->
                    <div class="view_main_title">
                        <h1><?= $row['main_title'] ?></h1>
                    </div>
                    <!-- main_title end -->

                    <!-- sub_title -->
                    <div class="view_sub_title">
                        <h1><?= $row['sub_title'] ?></h1>
                    </div>
                    <!-- sub_title end -->

                    <div class="empty_blank1"></div>

                    <!-- subject -->
                    <div class="view_subject">
                        <h1><?= $row['subject'] ?></h1>
                    </div>
                    <!-- subject end -->

                    <div class="empty_blank1"></div>

                    <!-- sns -->
                    <div class="view_sns">
                        <img src="/img/common/view_sns.png" alt="" style="width: 250px; height:50px;">
                    </div>
                    <!-- sns end -->

                    <div class="empty_blank2"></div>

                    <!-- img -->
                    <div class="view_img">
                        <img src="<?= $row['file_dir'] ?>" alt="">
                    </div>
                    <!-- img end -->
                    <div class="empty_blank2"></div>

                    <!-- content -->
                    <div class="view_content">
                        <p style="white-space: pre-line;">
                            <?= $row['content'] ?>
                        </p>
                    </div>
                    <!-- content end -->

                    <div class="empty_blank2"></div>

                    <!-- editor -->
                    <div class="view_editor">
                        <p>
                            editor <?= $row['name'] ?>
                            <br>
                            reference marieclairekorea.com
                            <br>
                            <?= $row['regist_day'] ?>
                        </p>
                    </div>
                    <!-- editor end -->

                </div>

                <div class="empty_blank2"></div>

                <!-- edit & delete post -->
                <?php if ($_SESSION['userid'] == $row['id'] || $_SESSION['userlevel'] == 9) { ?>
                <span>
                    <button class="etc_btn" type="button" onclick="onclick_edit()">수정</button>
                </span>
                <span>
                    <button class="etc_btn" type="button" onclick="onclick_delete()">글
                        삭제</button>
                </span>
                <?php } ?>


                <!-- edit&delte post end -->


                <div class="empty_blank"></div>

            </div>
        </div>
    </div>
    <!-- wrapper end -->

    </div>



    <!-- footer start -->
    <footer>
        <?php include("../footer.html"); ?>
    </footer>
    <!-- footer end -->
</body>

</html>