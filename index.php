<!DOCTYPE HTML>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        Aplikasi Manajemen Pegawai
    </header>

    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="?hal=dasboard" class="aktif">Dashboard</a></li>
                <li><a href="?hal=pegawai">Data Pegawai</a></li>
                <li><a href="?hal=jabatan">Data Jabatan</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>

        <section class="main">
            <?php include "konten.php"; ?>
        </section>
    </div>

    <footer>
        pelangi permata sari
    </footer>

</body>

</html>

<?php
}
?>