<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Mahasiswa</title>
</head>
<body>
    <center><h1>Membuat Data Mahasiswa</h1></center>
    <center><?php echo anchor('mahasiswa/tambah','Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </tr>
        <?php 
        $no = 1;
        foreach($mahasiswa as $u){ 
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nim ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->kelas ?></td>
            <td><?php echo $u->tmp_lahir ?>, <?php echo $u->tgl_lahir ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo $u->jk ?></td>
            <td><?php echo $u->agama ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>