<?php
$dtable = $_GET['dtable'];
$num = $_GET['num'];
$title = "";
// die();
$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");
$sql = "select * from " . $dtable . " where num = " . $num;
// die($sql);
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$title .= $row['main_title'];
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

            <!-- slider -->
        </div>
        <!-- slider end -->

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
                        <p>
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
                <!-- page view end -->


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