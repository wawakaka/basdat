<?php
include('koneksi.php');
session_start();
if(!isset($_SESSION['user'])){header("location:index.php");}
if(isset($_SESSION['user'])) {
unset($_SESSION);
session_destroy();
echo ("<SCRIPT LANGUAGE='JavaScript'>alert('Anda Berhasil Logout')
	window.location.href='index.php';</SCRIPT>");
}
?>