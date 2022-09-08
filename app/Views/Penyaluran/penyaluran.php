<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Penyaluran</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Data Penyaluran</h3>
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
                    <a href="<?php echo base_url('Penyaluran/input'); ?>" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50"><i class="fa fa-plus"></i></span>
                        <span class="text">Tambahkan Data</span>
                    </a>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th>No.</th>
                                <th>Nama Mustahiq</th>
                                <th>Kategori Asnaf</th>
                                <th>Tgl.Pengajuan</th>
                                <th>Tgl.Penerimaan</th>
                                <th>Jenis Zakat</th>
                                <th>Jumlah Yang Diterima</th>
                                <th>Bukti Penyaluran</th>
                                <th class="column-title no-link last"><span class="nobr">
                                        Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($dataPenyaluran as $x) : ?>
                                <tr>
                                    <td><?php echo $x['id_penyaluran']; ?></td>
                                    <td><?php echo $x['Nama_mustahiq']; ?></td>
                                    <td><?php echo $x['nama_kategori_asnaf']; ?></td>
                                    <td><?php echo $x['tgl_pengajuan']; ?></td>
                                    <td><?php echo $x['tgl_penerimaan']; ?></td>
                                    <td><?php echo $x['nama_jenis_zakat']; ?></td>
                                    <td>Rp. <?php $number =  $x['jumlah_yg_dikeluarkan'];
                                            $format = number_format($number, 0, ",", ".");
                                            echo $format; ?></td>
                                    <td><a href="<?= base_url() . "/file/" . $x['bukti_penyaluran']; ?>" class="btn btn-primary"><i class="fa fa-download"></i> Unduh</a>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="edit/<?php echo $x['id_penyaluran']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="hapus/<?php echo $x['id_penyaluran']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin mau menghapus data ini?');"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <?php echo $pager->links('penyaluran_pages', 'pagination_custom');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('parsial/footer'); ?>