<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Kategori Asnaf</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Kategori Asnaf</h3>
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
                            <th class="column-title">ID Asnaf</th>
                            <th class="column-title">Nama Kategori Asnaf</th>
                            <th class="column-title no-link last"><span class="nobr">
                                    Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataAsnaf as $x) : ?>
                            <tr>
                                <td><?php echo $x['id_asnaf']; ?></td>
                                <td><?php echo $x['nama_kategori_asnaf']; ?></td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pager->links('asn_pages', 'pagination_custom'); ?>
            </div>
        </div>
    </div>
</div>
</div>

<?php echo view('parsial/footer'); ?>