<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Laporan Pemasukan ZIS</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Laporan Pemasukan ZIS</h3>
        </div>
        <div class="title_right">
        </div>
        <div class="clearfix">
            <div class="x_content">
                <div class="table-responsive">
                    <a href="<?php echo base_url('laporan/cetaklaporan'); ?>" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50"><i class="fa fa-print"></i></span>
                        <span class="text">Cetak</span>
                    </a>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">No.</th>
                                <th class="column-title">Nama Jenis Zakat</th>
                                <th class="column-title">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataLaporan as $x) : ?>
                                <tr>
                                    <td><?php echo $x['id_zakat']; ?></td>
                                    <td><?php echo $x['nama_jenis_zakat']; ?></td>
                                    <td>Rp. <?php $number =  $x['Name_exp_3'];
                                            $format = number_format($number, 0, ",", ".");
                                            echo $format; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('parsial/footer'); ?>