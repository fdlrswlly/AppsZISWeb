<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<?php foreach ($total_zakat as $x) :
    $number = $x['total_zakatt'];
    $format = number_format($number, 2, ",", ".");
endforeach; ?>
<title>Pembayaran ZIS</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Pembayaran ZIS</h3>
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
        <div class="clearfix"></div>
        <div class="x_content">
            <div class="table-responsive">
                <label>Total Pemasukan ZIS</label>
                <h1> Rp.<?php echo $format; ?></h1>
                <br>
                <table class=" table table-striped jambo_table bulk_action">
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
                            <th class=" column-title no-link last"><span class="nobr">
                                    <center>Action</center>
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataPembayaran as $x) : ?>
                            <tr>
                                <td><?php echo $x['no_transaksi']; ?></td>
                                <td><?php echo $x['nama_muzzaki']; ?></td>
                                <td><?php echo $x['nama_jenis_zakat']; ?></td>
                                <td><?php echo $x['tgl_pembayaran']; ?></td>
                                <td>Rp.
                                    <?php $number =  $x['jumlah_bayar'];
                                    $format = number_format($number, 0, ",", ".");
                                    echo $format; ?></td>
                                <td><?php echo $x['nama_bank']; ?></td>
                                <td><?php if ($x['status'] == "Menunggu Konfirmasi") { ?>
                                        <a class='btn btn-warning btn-sm'><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</a>
                                    <?php } elseif ($x['status'] == "Lunas") { ?>
                                        <p class='btn btn-success btn-sm'><i class="fa fa-check"></i> Lunas</p>
                                    <?php } else { ?>
                                        <p class='btn btn-danger btn-sm'><i class="fa fa-close"></i> Ditolak</p>
                                    <?php } ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="edit/<?php echo $x['id_transaksi']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Periksa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pager->links('trx_pages', 'pagination_custom'); ?>
            </div>
        </div>
    </div>
</div>
</div>




<?php echo view('parsial/footer'); ?>