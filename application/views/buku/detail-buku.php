<div style="display: flex; flex-direction: column; align-items: center">
    <img src="<?= base_url(); ?>assets/img/upload/<?= $gambar; ?>" style="max-width: 200px">
    <h2 style="margin: 10px; text-align: center"><?= $judul ?></h2>
    <div class="col-sm-8 table-responsive">
        <table class="table table-stripped">
            <tr>
                <th>Penulis: </th>
                <td><?= $pengarang; ?></td>
                <td>&nbsp;</td>
                <th>Kategori: </th>
                <td><?= $kategori ?></td>
            </tr>
            <tr>
                <th>Penerbit: </th>
                <td><?= $penerbit ?></td>
                <td>&nbsp;</td>
                <th>Dipinjam: </th>
                <td><?= $dipinjam ?></td>
            </tr>
            <tr>
                <th>Tahun Terbit: </th>
                <td><?= substr($tahun, 0, 4) ?></td>
                <td>&nbsp;</td>
                <th>Dibooking: </th>
                <td><?= $dibooking ?></td>
            </tr>
            <tr>
                <th>ISBN: </th>
                <td><?= $isbn ?></td>
                <td>&nbsp;</td>
                <th>Tersedia: </th>
                <td><?= $stok ?></td>
            </tr>
        </table>
    </div>
    <div style="margin-bottom: 100px;">
        <?php if ($stok < 1): ?>
        <button class='btn btn-outline-secondary'> Stok Habis</button>;
        <?php else: ?>
        <a class='btn btn-outline-primary' href="<?= base_url('booking/tambahBooking/' . $id) ?>"><i
                class='fas fw fa-bookmark'></i> Book</a>;
        <?php endif; ?>
        <span class=" btn btn-outline-secondary" onclick="window.history.go(-1)"><i class="fas fw fa-reply"></i>
            Kembali</span>
    </div>
</div>