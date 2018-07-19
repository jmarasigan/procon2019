<?php
include 'db_connect.php';
include 'functions.php';

sec_session_start();
if (!isset($_SESSION['email'])){
header('location:index.php');
}
//
?>
