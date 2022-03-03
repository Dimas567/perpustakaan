<?php

include("config.php");

if (!isset($_GET['id_buku'])) {
    header('Location: list_buku.php');
}

$id = $_GET['id_buku'];

$sql = "SELECT * FROM tabel_buku WHERE id_buku=$id";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Buku</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Buku</h3>
    </header>

    <form action="./lib/proses-update-buku.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku'] ?>" />

            <p>
                <label for="judul_buku">Judul buku </label>
                <input value="<?php echo $buku['judul_buku'] ?>" type="text" name="judul_buku" placeholder="judul buku" />
            </p>
            <p>
                <label for="penulis">Penulis </label>
                <input value="<?php echo $buku['penulis'] ?>" type="text" name="penulis" placeholder="Penulis"></input>
            </p>
            <p>
                <label for="jenis_buku">Jenis Buku </label>
                <?php $jenis_buku = $buku['jenis_buku']; ?>
                <select name="jenis_buku">

                    <option <?php echo ($jenis_buku == 'Sejarah') ? "selected" : "" ?>>Sejarah</option>
                    <option <?php echo ($jenis_buku == 'Fabel') ? "selected" : "" ?>>Fabel</option>
                    <option <?php echo ($jenis_buku == 'Mitos') ? "selected" : "" ?>>Mitos</option>
                    <option <?php echo ($jenis_buku == 'Legenda') ? "selected" : "" ?>>Legenda</option>
                    <option <?php echo ($jenis_buku == 'Pengetahuan') ? "selected" : "" ?>>Pengetahuan</option>
                </select>
            </p>
            <p>
                <label for="gambar_buku">Gambar Buku </label>
                <input value="<?php echo $buku['gambar_buku'] ?>" type="text" name="gambar_buku"></input>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>