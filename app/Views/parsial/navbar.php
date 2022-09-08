<!DOCTYPE html>
<html lang="en">
<?php $session = session() ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('theme'); ?>/production/images/logo-ymat-mini.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('theme2'); ?>/css/styles.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="<?php echo base_url('theme2'); ?>/css/main.css"> -->
    <!-- <script src="<?php echo base_url('theme2'); ?>/js/main.js"></script> -->
    <style>
        .dropbtn {
            background-color: #198754;
            color: white;
            padding: 8px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 180px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .h3 {
            color: white;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <img src="<?php echo base_url('theme'); ?>/production/images/logo-ymat-mini.png" width=30px height=30px>
            <a class="navbar-brand" href="#!"> <span>Yayasan Miqat Ahsani Taqwim</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Home/home'); ?>">Home</a></li>
                    <div class="dropdown">
                        <button class="dropbtn" href="">Transaksi ZIS</button>
                        <i class="fa fa caret-down"></i>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url('BayarZakat/input'); ?>">Bayar ZIS</a>
                            <a href="<?php echo base_url('Zakatku/datatrx'); ?>">Lengkapi pembayaran</a>
                            <a href="<?php echo base_url('ZakatKu'); ?>">ZIS KU</a>
                        </div>
                    </div>
                    <!--  <li class="nav-item"><a class="nav-link" href="<?php //echo base_url('BayarZakat/index');
                                                                            ?>">Bayar
                            Zakat</a></li>!-->
                    <div class="dropdown">
                        <button class="dropbtn" href="">Hitung Zakat</button>
                        <i class="fa fa caret-down"></i>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url('hitungzakat/hitungzakatfitrah'); ?>">Zakat Fitrah</a>
                            <a href="<?php echo base_url('hitungzakat/hitungzakatperhiasan'); ?>">Zakat Perhiasan</a>
                            <a href="<?php echo base_url('hitungzakat/hitungzakatpenghasilan'); ?>">Zakat Penghasilan</a>
                            <a href="<?php echo base_url('hitungzakat/hitungzakatrikaz'); ?>">Zakat Rikaz</a>
                        </div>
                    </div>
                    <?php if (session()->get('email') == null) { ?>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url('login/login_user'); ?>">Login</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>