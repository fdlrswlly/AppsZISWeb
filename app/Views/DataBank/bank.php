<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Data Bank</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Data Bank</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cari" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="x_content">
            <div class="table-responsive">
                <!-- Button trigger modal -->
                <a href="<?php echo base_url('DataBank/input'); ?>" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50"><i class="fa fa-plus"></i></span>
                    <span class="text">Tambahkan Data</span>
                </a>
                <!--<a href="<?php //echo base_url('DataMustahiq/input'); 
                                ?>" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50"><i class="fa fa-plus"></i></span>
                    <span class="text">Tambahkan Data</span>
                </a> -->
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th>No.</th>
                            <th>Nama Bank</th>
                            <th>No. Rekening</th>
                            <th class="column-title no-link last"><span class="nobr">
                                    Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataBank as $x) : ?>

                            <tr>
                                <td><?php echo $x['id_bank']; ?></td>
                                <td><?php echo $x['nama_bank']; ?></td>
                                <td><?php echo $x['no_rekening']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="edit/<?php echo $x['id_bank']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="hapus/<?php echo $x['id_bank']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin mau menghapus data ini?');"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php //echo $pager->links('mtq_pages', 'pagination_custom'); 
                ?>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>