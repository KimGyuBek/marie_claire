<meta charset="utf-8">
<?php

$sql_table .= $_GET['dtable'];
$num = $_GET['num'];

$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");

$sql = "delete from " . $sql_table . " where num = " . $num;


mysqli_query($con, $sql);


mysqli_close($con);                // DB 연결 끊기

echo "
<script>
    alert('게시글 삭제 완료');
    location.href = '/board/board_list.php?dtable={$sql_table}';
</script>"
?>