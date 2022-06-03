<?php
$dtable = $_GET['dtable'];
$title = "";

switch ($dtable):
    case "fashion":
        $title .= "패션(fashion)";
        break;
    case "beauty":
        $title .= "뷰티(beauty)";
        break;
    case "celeb":
        $title .= "셀럽(celeb)";
        break;
    case "culture":
        $title .= "컬쳐(culture)";
        break;
    case "life":
        $title .= "라이프(life)";
        break;

endswitch;

$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");
$sql = "select * from " . $dtable;
$result = mysqli_query($con, $sql);
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
            <div class="empty_blank">
            </div>
            <!-- slider end -->

            <div id="contents">
                <!-- sub_contents -->
                <div class="sub_contents">

                    <!-- list -->
                    <article class="sub_post">
                        <ul>
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                            <li>
                                <a href="/board/board_view.php?dtable=<?= $dtable ?>&num=<?= $row['num'] ?>">
                                    <div class="sub_list">
                                        <span class="sub_contents_img">
                                            <img src="<?= $row['file_dir'] ?>" alt="">
                                        </span>
                                        <span class="sub_contents_text">
                                            <h2>
                                                <?= $row['main_title'] ?>
                                            </h2>
                                            <p>
                                                <?= $row['subject'] ?>
                                            </p>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <div class="empty_blank2"></div>
                            <?php } ?>
                        </ul>
                    </article>
                    <!-- list end end -->

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