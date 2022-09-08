<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Jenis Zakat</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Jenis Zakat</h3>
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
                    <a href="<?php echo base_url('JenisZakat/input'); ?>" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50"><i class="fa fa-plus"></i></span>
                        <span class="text">Tambahkan Data</span>
                    </a>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">ID Zakat</th>
                                <th class="column-title">Nama Jenis Zakat</th>
                                <th class="column-title">Pemasukan Zakat</th>
                                <th class="column-title">Pengeluaran Zakat</th>
                                <th class="column-title">Saldo Zakat</th>
                                <th class="column-title no-link last"><span class="nobr">
                                        Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataJenisZakat as $x) : ?>
                                <tr>
                                    <td><?php echo $x['id_zakat']; ?></td>
                                    <td><?php echo $x['nama_jenis_zakat']; ?></td>
                                    <td>Rp.
                                        <?php $number =  $x['total_masuk'];
                                        $format = number_format($number, 0, ",", ".");
                                        echo $format; ?></td>
                                    <td>Rp.
                                        <?php $number =  $x['total_keluar'];
                                        $format = number_format($number, 0, ",", ".");
                                        echo $format; ?></td>
                                    <td>Rp.
                                        <?php $number =  $x['saldo'];
                                        $format = number_format($number, 0, ",", ".");
                                        echo $format; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="edit/<?php echo $x['id_zakat']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="hapus/<?php echo $x['id_zakat']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin mau menghapus data ini?');"><i class="fa fa-trash"></i></a>
                                    </td>
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