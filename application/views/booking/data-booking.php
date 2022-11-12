<div style="display: flex; flex-direction: column; align-items: center">
    <h3>Buku yang ingin dipinjam</h3>
    <div class="table-responsive">
        <table class="table table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th></th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($temp as $t) {
            ?>
            <tbody>
                <tr>
                    <td><?= $no; ?></td>
                    <td>
                        <img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" alt="Buku" width="70px">
                    </td>
                    <td nowrap><?= $t['penulis']; ?></td>
                    <td nowrap><?= $t['penerbit']; ?></td>
                    <td nowrap><?= substr(
                                        $t['tahun_terbit'],
                                        0,
                                        4
                                    ); ?></td>
                    <td nowrap>
                        <a class="btn btn-outline-danger"
                            href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>"><i
                                class="fas fw fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php $no++;
            } ?>
        </table>
    </div>
    <div style="margin: 10px">
        <a class="btn btn-outline-success"
            href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>"><i
                class="fas fw fa-stop"></i> Selesaikan Booking</a>
        <span class="btn btn-outline-secondary" onclick="window.history.go(-1)"><i class="fas fw fa-reply"></i>
            Kembali</span>
    </div>
</div>