<?php
include_once('fb-config.php');
$_SESSION = array();
session_destroy();
unset($_SESSION['fbUserId']);
unset($_SESSION['fbUserName']);
unset($_SESSION['fbAccessToken']);
unset($_SESSION['FBRLH_state']);
session_unset();
header('location: http://localhost/shivam/login/facebook/index.php');
exit;
