<meta charset="utf-8">
<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";

$sql_table .= $_GET['dtable'];
$num = $_GET['num'];

if (!$userid) {
    echo ("
                    <script>
                    alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
    exit;
}

$main_title = htmlspecialchars($_POST["main_title"], ENT_QUOTES);
$sub_title = htmlspecialchars($_POST["sub_title"], ENT_QUOTES);
$subject = htmlspecialchars($_POST["subject"], ENT_QUOTES);
$content = htmlspecialchars($_POST["content"], ENT_QUOTES);
$file_dir = $_POST["file_dir"];

$regist_day = date("Y-m-d-h H:s");  // 현재의 '년-월-일'을 저장


$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");

$sql = "update " . $sql_table . " set ";
$sql .=
    "main_title='" . $main_title
    . "' ,sub_title='" . $sub_title
    . "' ,subject='" . $subject
    . "' ,content='" . $content
    . "' ,regist_day='" . $regist_day
    . "' ,file_dir='" . $file_dir;
$sql .= "' where num=" . $num;


// die($sql);

mysqli_query($con, $sql);


mysqli_close($con);                // DB 연결 끊기

echo "
<script>
    alert('게시글 수정 완료');
    location.href = '/board/board_view.php?dtable={$sql_table}&num={$num}';
</script>"
?>