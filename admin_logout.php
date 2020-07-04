<?php

session_start();
$_SESSION = array();

session_destroy();
header("location:welcome(login).php");
exit;

?>