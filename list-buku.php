<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
</head>

<body>
    <header>
        <h3>List Buku</h3>
    </header>

    <nav>
        <a href="tambah-buku.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Jenis Buku</th>
            <th>Gambar Buku</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tabel_buku";
        $query = mysqli_query($db, $sql);

        while($buku = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$buku['id_buku']."</td>";
            echo "<td>".$buku['judul_buku']."</td>";
            echo "<td>".$buku['penulis']."</td>";
            echo "<td>".$buku['jenis_buku']."</td>";
            echo "<td>".$buku['gambar_buku']."</td>";
        
            echo "<td>";
            echo "<a href='update-buku.php?id_buku=".$buku['id_buku']."'>Edit</a> | ";
            echo "<a href='./lib/proses-hapus-buku.php?id_buku=".$buku['id_buku']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>