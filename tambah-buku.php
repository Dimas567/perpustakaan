<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
</head>

<body>
    <header>
        <h3>Tambah buku</h3>
    </header>

    <form action="./lib/proses-tambah-buku.php" method="POST">

        <fieldset>

        <p>
            <label for="judul_buku">Judul buku </label>
            <input type="text" name="judul_buku" placeholder="judul buku" />
        </p>
        <p>
            <label for="penulis">Penulis </label>
            <input type="text" name="penulis" placeholder="Penulis"></input>
        </p>
        <p>
            <label for="jenis_buku">Jenis Buku </label>
            <select name="jenis_buku">
                <option>Sejarah</option>
                <option>Fabel</option>
                <option>Mitos</option>
                <option>Legenda</option>
                <option>Pengetahuan</option>
            </select>
        </p>
        <p>
            <label for="gambar_buku">Gambar Buku </label>
            <input type="te" name="gambar_buku"></input >
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>