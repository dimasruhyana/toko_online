<div class="container-fluid">
    <h3 class="text-dark mb-4">Detail Pesanan</h3>

    <table class="table table-bordered table-striped table-hover mt-3">
        <tr align="middle">
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>

        </tr>



        <?php

        $total = 0;

        foreach ($pesanan as $psn) : ?>

            <?php if (time() - $psn->tgl_pesan < (60)) { ?>

                <?php

                $subtotal = $psn->jumlah * $psn->harga;
                $total += $subtotal;

                ?>

                <tr>
                    <td align="middle"><?= $psn->nama_brg; ?></td>
                    <td align="middle"><?= $psn->jumlah; ?></td>
                    <td>Rp. <?= number_format($psn->harga, 0, ',', '.'); ?></td>
                    <td>Rp. <?= number_format($subtotal, 0, ',', '.'); ?></td>

                </tr>
            <?php } else { ?>

            <?php } ?>

        <?php endforeach; ?>
        <tr>
            <td colspan="3" align="right" class="text-dark"><strong>Grand Total</strong></td>
            <td>Rp. <?= number_format($total, 0, ',', '.'); ?></td>
        </tr>
    </table>

    <a href="<?= base_url(); ?>Pesanan_user/pesanan" class="btn btn-danger float-right mr-5 mt-4">Kembali</a>

</div>