<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Data Mustahiq</title>
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Data Mustahiq</h3>
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
                <a href="<?php echo base_url('DataMustahiq/input'); ?>" class="btn btn-primary btn-icon-split btn-sm">
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
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Kategori Asnaf</th>
                            <th class="column-title no-link last"><span class="nobr">
                                    Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataMustahiq as $x) : ?>

                            <tr>
                                <td><?php echo $x['id_mustahiq']; ?></td>
                                <td><?php echo $x['Nama_mustahiq']; ?></td>
                                <td><?php echo $x['Jk_mustahiq']; ?></td>
                                <td><?php echo $x['alamat']; ?></td>
                                <td><?php echo $x['nama_kategori_asnaf']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="edit/<?php echo $x['id_mustahiq']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="hapus/<?php echo $x['id_mustahiq']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin mau menghapus data ini?');"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pager->links('mtq_pages', 'pagination_custom'); ?>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Add rows here
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM

    });
</script>
</div>



<?php echo view('parsial/footer'); ?>