<?= $this->session->flashdata('pesan'); ?>

<div style="padding: 25px;">
    <!-- Tampilkan semua produk -->
    <div class="row">
        <!-- looping products -->
        <?php foreach ($buku as $buku) { ?>
        <div class="col-xl-3 col-md-6" style="margin-bottom: 20px;" align="center">
            <div class="thumbnail">
                <img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>"
                    style="max-width:100%; max-height: 100%; height: 200px; width: auto">
            </div>
            <div class="caption">
                <h5 style="
                margin: 10px 0 0;
                padding-bottom: 5px;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
                border-bottom: gray 1px solid"><?= $buku->judul_buku ?></h5>
                <span><?= $buku->penerbit ?></span>
                <p class="text-muted"><?= substr($buku->tahun_terbit, 0, 4) ?></p>
            </div>
            <div class="buttons">
                <?php if ($buku->stok < 1) : ?>
                <button class='btn btn-outline-secondary'> Stok Habis</button>
                <?php else: ?>
                <a class='btn btn-outline-primary' href="<?= base_url('booking/tambahBooking/' . $buku->id) ?>"><i
                        class='fas fw fa-bookmark'></i> Book</a>
                <?php endif; ?>

                <a class="btn btn-outline-warning" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"><i
                        class='fa fw fa-search'></i> Detail</a>
            </div>
        </div> <?php } ?>
        <!-- end looping -->
    </div>
</div>