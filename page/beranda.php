<?php
include '../lib/koneksi.php';
session_start();
?>
<link href="../css/page.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
<h1 class="page-title">• Selamat datang <?= $_SESSION['namadepan']; ?>!</h1>
