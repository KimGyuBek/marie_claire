<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기 - 마리끌레르 코리아</title>
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


            <div id="contents">
                <!-- sub_contents -->
                <div class="sub_contents">



                    <div class="empty_blank"></div>


                    <div id="board_box">
                        <form name="board_form" method="post" action="<?= $form_action ?>">
                            <ul id="board_form">
                                <li>
                                    <span class="col1"></span>
                                    <span class="col2"><input id="input_title" name="main_title" type="text"
                                            placeholder="main_title" /></span>
                                </li>
                                <li>
                                    <span class="col1"></span>
                                    <span class="col2"><input id="input_title" name="sub_title" type="text"
                                            placeholder="sub_title" /></span>
                                </li>
                                <li>
                                    <span class="col1"></span>
                                    <span class="col2"><input id="input_title" name="subject" type="text"
                                            placeholder="subject" /></span>
                                </li>
                                <li>
                                    <span class="col1"></span>
                                    <span class="col2"><input id="input_title" name="file_dir" type="text"
                                            placeholder="file_dir" /></span>
                                </li>
                                <li id="text_area">
                                    <span class="col1"></span>
                                    <span class="col2">
                                        <textarea name="content" id="input_description"
                                            placeholder="content"></textarea>
                                    </span>
                                </li>
                            </ul>
                            <ul class="buttons">
                                <li><button type="submit">등록</button></li>
                                <li><button type="button"
                                        onclick="location.href='board_list.php?dtable=<?= $dtable ?>'">목록</button>
                                </li>
                            </ul>
                        </form>
                    </div> <!-- board_box -->
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