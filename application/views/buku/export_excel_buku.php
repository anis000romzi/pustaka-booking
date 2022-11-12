<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Buku Perpustakaan Online</center>
</h3>
<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($buku as $b) :
        ?>
        <tr>
            <th scope="row"><?= $no++ ?></th>
            <th><?= $b['judul_buku'] ?></th>
            <th><?= $b['pengarang'] ?></th>
            <th><?= $b['penerbit'] ?></th>
            <th><?= $b['tahun_terbit'] ?></th>
            <th><?= $b['isbn'] ?></th>
            <th><?= $b['stok'] ?></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>