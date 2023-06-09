<?php
include_once('register_project.php');

session_start();
session_destroy();
unset($_SESSION['University_ID']);

header('Location:http://localhost/projectlama/home.php');

?>