<?php

include("../config.php");

if(isset($_POST['daftar'])){

    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "INSERT INTO tabel_buku (judul_buku, penulis, jenis_buku, gambar_buku) VALUE ('$judul_buku', '$penulis', '$jenis_buku', '$gambar_buku')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../index.php?status=sukses');
    } else {
        header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>