<?php

include("../config.php");

if( isset($_GET['id_buku']) ){

    $id = $_GET['id_buku'];

    $sql = "DELETE FROM tabel_buku WHERE id_buku=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: ../list-buku.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>