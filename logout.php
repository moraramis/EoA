<?php
require_once "views/authView.php";
sec_session_start();

unset($_SESSION['userInfo']);

session_destroy();

header('Location: index.php');
exit;
?>
