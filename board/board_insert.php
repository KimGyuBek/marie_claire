<meta charset="utf-8">
<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";

$dtable = $_GET['dtable'];

// die($dtable);

$sql_table .= "fashion";

// if ($dtable == "qna")
//     $sql_table .= "qna";
// else if ($dtable == "notice")
//     $sql_table .= "board";
// die($sql_table);


if (!$userid) {
    echo ("
                    <script>
                    alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
    exit;
}

$main_title = $_POST["main_title"];
$sub_title = $_POST["sub_title"];
$subject = $_POST["subject"];
$content = $_POST["content"];
$file_dir = $_POST["file_dir"];

// $subject = $_POST["subject"];
// $content = $_POST["content"];

// $subject = htmlspecialchars($subject, ENT_QUOTES);
// $content = htmlspecialchars($content, ENT_QUOTES);

$regist_day = date("Y-m-d-h H:s");  // 현재의 '년-월-일'을 저장


$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");

$sql = "insert into " . $sql_table . " (id, name, main_title, sub_title, subject, content, regist_day, file_dir) ";
$sql .= "values('$userid', '$username', '$main_title', '$sub_title', '$subject', '$content', '$regist_day', '$file_dir');";

// die($sql);


// die();

mysqli_query($con, $sql);


mysqli_close($con);                // DB 연결 끊기

echo "
<script>
alert('게시글 등록 완료');
location.href = 'board/board_list.php?dtable=fashion';
</script>"
// if ($dtable == "notice") {
//     echo "
// 		   <script>
// 		   alert('게시글이 등록되었습니다.');
// 		   location.href = '/board/board_list.php?dtable=notice';
// 	</script>
// 	";
// } else if ($dtable == "qna") {
//     echo "
// 		   <script>
// 		   alert('게시글이 등록되었습니다.');
// 		   location.href = '/board/board_list.php?dtable=qna';
// 	</script>
// 	";
// }
?>