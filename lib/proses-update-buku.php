<?php

include("../config.php");

if(isset($_POST['simpan'])){

    $id_buku= $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "UPDATE tabel_buku SET judul_buku='$judul_buku', penulis='$penulis', jenis_buku='$jenis_buku', gambar_buku='$gambar_buku' WHERE id_buku=$id_buku";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ../list-buku.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>