<!DOCTYPE html>
<html>
<head>
    <title>Membuat Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <h1>Input Data Mahasiswa</h1>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url(). 'mahasiswa/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>   
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tmp_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><select name="agama">
                        <option value='islam'>Islam</option>
                        <option value='kristen'>Kristen</option>
                        <option value='katholik'>Katholik</option>
                        <option value='hindu'>Hindu</option>
                        <option value='kristen'>Budha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form> 
</body>
</html>