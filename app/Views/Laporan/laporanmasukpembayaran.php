<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Laporan Pemasukan Pembayaran ZIS</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Laporan Pemasukan Pembayaran ZIS</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cari" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-outline-secondary" type="submit">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix">
            <div class="x_content">
                <div class="table-responsive">
                    <a href="<?php echo base_url('laporan/cetaklaporanmuzzaki'); ?>" class="btn btn-primary btn-icon-split btn-sm">
                         <span class="icon text-white-50"><i class="fa fa-print"></i></span>
                        <span class="text">Cetak</span>
                    </a> 
                    <?php $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    $i = 1; ?>
                    <?php //var_dump($cek) ?>
                    <form action='<?php echo base_url() ?>/Laporan/laporanmasukpermuzzaki' method='post' enctype="multipart/form-data">
                        <select name="cobaaa" id="nama_bulan">
                            <option value="">Pilih berdasarkan bulan</option>
                            <option value="Tampilkan Semua">Tampilkan semua</option>
                            <?php foreach ($bulan as $bl) { ?>
                                <option value=<?php echo $i ?>><?php echo $bl; ?></option>
                            <?php $i++;
                            } ?>
                        </select>
                        <button type='submit'> cari </button>
                    </form>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">
                                    <center>No. Transaksi</center>
                                </th>
                                <th class="column-title">
                                    <center>Nama Muzzaki</center>
                                </th>
                                <th class="column-title">
                                    <center>Jenis Zakat</center>
                                </th>
                                <th class="column-title">
                                    <center>Tgl.Pembayaran</center>
                                </th>
                                <th class="column-title">
                                    <center>Jumlah Bayar</center>
                                </th>
                                <th class="column-title">
                                    <center>Bank Yang Dituju</center>
                                </th>
                                <th class="column-title">
                                    <center>Status</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($laporan as $x) : ?>

                                <tr>
                                    <td><?= $x['no_transaksi']; ?></td>
                                    <td><?= $x['nama_muzzaki']; ?></td>
                                    <td><?= $x['nama_jenis_zakat']; ?></td>
                                    <td><?= $x['tgl_pembayaran']; ?></td>
                                    <td>Rp.<?php $number =  $x['jumlah_bayar'];
                                            $format = number_format($number, 0, ",", ".");
                                            echo $format; ?></td>
                                    <td><?= $x['nama_bank']; ?></td>
                                    <td><?= $x['status']; ?></td>
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