<?php
session_start();
include 'config.php';
if (isset($_POST['otp'])) {
    $teamid = $_POST['teamid'];
    $otp = $_POST['otp'];
    $_SESSION['teamid'] = $teamid;

    $exists = mysql_query('SELECT * from `teamdetails` where `teamid` = "'.$teamid.'" ');
    $row = mysql_num_rows($exists);
    $array = mysql_fetch_array($exists);
    if ($row == 1) {
        if ($array['otp'] === $otp) {
            header('Location:./index.php');
        }else {
                echo "<script>alert('Wrong OTP');window.location='../index.html';</script>";
    }
    } else {
                echo "<script>alert('User does not exist');window.location='../index.html';</script>";
    }
} else {
    header('location:../theme.html');
}