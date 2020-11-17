<div class="container-fluid">
    <div class="invoice-pesanan">
        <h2 class="text-dark mb-4">Invoice Pesanan</h2>
    </div>

    <?php if (empty($invoice)) { ?>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="pemberitahuan">
                    <div class="alert alert-danger text-center" role="alert">
                        <h5>Pesanan masih Kosong !</h5>
                        <a href="<?= base_url('welcome/index'); ?>" class="text-success">Silahkan Belanja</a>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    <?php } else { ?>

        <div class="tab-pesur">

            <table class="table table-hover table-borderless">

                <tr>
                    <th>No.</th>
                    <th>Nama Pemesan</th>
                    <th>Alamat Pengiriman</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Batas Pembayaran</th>
                    <th>Aksi</th>
                </tr>

                <?php $i = 1; ?>

                <?php foreach ($invoice as $inv) : ?>
                    <?php if (time() - $inv->tgl_created < (60)) { ?>
                        <tr>
                            <td align="middle"><?= $i++; ?></td>
                            <td><?= $inv->nama;  ?></td>
                            <td><?= $inv->alamat; ?></td>
                            <td><?= $inv->tgl_pesan; ?></td>
                            <td><?= $inv->batas_bayar;  ?></td>
                            <td><a href="<?= base_url('Pesanan_user/detail_pesur/') ?><?= $inv->id; ?>" class="btn btn-primary btn-sm">Detail</a></td>
                        </tr>
                    <?php } else { ?>

                    <?php } ?>

                <?php endforeach; ?>
            </table>
        </div>

    <?php } ?>
</div>