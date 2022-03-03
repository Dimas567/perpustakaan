
<!DOCTYPE html>
<html>

<head>
    <title>Perpustakaan</title>
</head>

<body>

    <header>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Penambahan Buku Berhasil";
                } else {
                    echo "Penmbahan Gagal!";
                }
                ?>
            </p>
        <?php endif; ?>
        <h3>Daftar Buku</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="list-buku.php">Daftar Buku</a></li>
        </ul>
    </nav>

</body>

</html>