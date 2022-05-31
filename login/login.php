<?php
$id = $_POST["id"];
$pass = $_POST["pass"];

/* db 연결 */
$con = mysqli_connect("localhost", "user1", "12345", "marieclaire");
$sql = "select * from members where id='$id'";
$result = mysqli_query($con, $sql);     // $sql에 저장된 명령 실행 	⑥

$num_match = mysqli_num_rows($result);
if (!$num_match) {
    echo ("   					
            <script>    
                window.alert('등록되지 않은 아이디입니다!')  
                history.go(-1)    
            </script>
        ");
} else {
    $row = mysqli_fetch_array($result);
    $db_pass = $row["pass"];

    //sql disconnect
    mysqli_close($con);

    if ($pass != $db_pass) {
        echo ("   				 
                <script>     
                    window.alert('비밀번호가 틀립니다!')     
                    history.go(-1)  
                </script>   
            ");
        exit;
    } else {
        session_start();
        $_SESSION["userid"] = $row["id"];
        $_SESSION["username"] = $row["name"];
        $_SESSION["userlevel"] = $row["level"];

        echo ("    
                <script> 
                    alert('로그인 되었습니다.');
                    location.href='/index.php';	
                </script>   
            ");
    }
}