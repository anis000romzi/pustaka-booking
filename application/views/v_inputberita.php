<!DOCTYPE html>
<html>
<head>
    <title>Membuat Input Data Berita</title>
</head>
<body>
    <center>
        <h1>Input Data Berita</h1>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url(). 'berita/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>   
            <tr>
                <td>Headline News</td>
                <td><input type="text" name="head_news"></td>
            </tr>
            <tr>
                <td>Deskripsi Berita</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td>Tanggal Publikasi</td>
                <td><input type="date" name="tgl_publish"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td>Kategori Berita</td>
                <td><select name="kategori">
                        <option value='olahraga'>Olahraga</option>
                        <option value='teknologi'>Teknologi</option>
                        <option value='kesehatan'>Kesehatan</option>
                        <option value='entertainment'>Entertainment</option>
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