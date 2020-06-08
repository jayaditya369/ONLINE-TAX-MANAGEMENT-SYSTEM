<?php
session_start();
unset($_SESSION['oname']);
session_destroy();

header("Location: login.html");
exit;
?>