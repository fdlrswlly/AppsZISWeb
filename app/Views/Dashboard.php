<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Dashboard</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<div class="right_col" role="main">
    <!-- page content -->
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Selamat Datang</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p>Selamat Datang di Sistem Informasi Pengelolaan ZIS YMAT</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12">
        <div class="">
            <div class="x_content">
                <div class="row">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-group"></i>
                            </div>
                            <div class="count"><?= $total_muzzaki; ?></div>
                            <h3>Data Muzzaki</h3>
                            <p><a href="<?php echo base_url('DataMuzzaki/datamuzzaki'); ?>">More data...</a></p>
                        </div>

                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-group"></i>
                            </div>
                            <div class="count"><?= $total_mustahiq; ?></div>
                            <h3>Data Mustahiq</h3>
                            <p><a href="<?php echo base_url('DataMustahiq/datamustahiq'); ?>">More
                                    data...</a></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-5 col-md-5 col-sm-6  ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-credit-card"></i>
                            </div>
                            <?php foreach ($total_zakat as $x) : ?>
                                <!-- <div class="count">Rp. <?php //echo $x['total_zakatt']; ?></div> -->
                                <div class = "count">Rp. 
                                <?php 
                                $number = $x['total_zakatt'];
                                $format = number_format($number,2,",",".");
                                echo $format; ?></div>
                            <?php endforeach; ?>
                            <h3>Dana Masuk</h3>
                            <p><a href="">More
                                    data...</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php echo view("parsial/footer"); ?>

<?php
/*$session = session(); 
if(!$session->get('role'))
{
    echo base_url('Home/dashboard');
}
else
{
    echo base_url('Auth/login');
}*/
?>