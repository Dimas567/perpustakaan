<?php

include("../config.php");

if (!isset($_GET['judul_buku'])) {
    header('Location: list_buku.php');
}

$judul_buku = $_GET['judul_buku'];

$sql = "SELECT * FROM tabel_buku WHERE judul_buku=$judul_buku";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>
