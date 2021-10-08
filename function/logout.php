<?php
session_start();
session_unset();
session_destroy();
header("Location:../page_user_login_1.php");
?>