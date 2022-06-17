<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['userlevel']);

session_unset();
session_destroy();


echo "
   <script>
   alert('로그아웃 되었습니다.');
    location.href='/index.php';
   </script> ";