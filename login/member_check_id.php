    <?php
    $id = $_GET["userid"];

    $con = mysqli_connect("localhost", "user1", "12345", "marieclaire");
    $sql = "select * from members where id='$id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);
    if ($num_record) {
        echo "
        <script>
        alert('중복된 아이디입니다.');
        window.close();
        </script>
        ";
    } else {
        echo  "
        <script>
        alert('사용 가능한 아이디입니다.');
        window.close();
        </script>";
    }
    mysqli_close($con);
    ?>