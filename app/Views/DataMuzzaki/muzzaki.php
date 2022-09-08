<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Data Muzzaki</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Data Muzzaki</h3>
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
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">No.</th>
                            <th class="column-title">Nama Lengkap</th>
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">Alamat</th>
                            <th class="column-title">No.Telepon</th>
                            <th class="column-title no-link last"><span class="nobr">
                                    Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataMuzzaki as $x) :  ?>
                        <tr class="even pointer">
                            <td><?php echo $x['id_muzzaki']; ?></td>
                            <td><?php echo $x['Nama_muzzaki']; ?></td>
                            <td><?php echo $x['Jk_muzzaki']; ?></td>
                            <td><?php echo $x['Alamat']; ?></td>
                            <td><?php echo $x['No_Telp']; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="hapus/<?php echo $x['id_muzzaki']; ?>" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Anda yakin mau menghapus data ini?');"><i
                                            class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pager->links('mzk_pages', 'pagination_custom'); ?>
            </div>
        </div>
    </div>
</div>
</div>




<?php echo view('parsial/footer'); ?>