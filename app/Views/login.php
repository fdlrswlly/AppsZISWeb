<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo base_url('theme'); ?>/production/images/logo-ymat-mini.png"
            type="image/ico" />
        <title>Login</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url('theme'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url('theme'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?php echo base_url('theme'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url('theme'); ?>/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <?php
          $session = session();
          $login = $session->getFlashdata('login');
          $Nama_amil = $session->getFlashdata('Nama_amil');
          $password = $session->getFlashdata('password');
          ?>
                        <?php if ($Nama_amil) { ?>
                        <p style="color:red"><?php echo $Nama_amil ?></p>
                        <?php } ?>

                        <?php if ($password) { ?>
                        <p style="color:red"><?php echo $password ?></p>
                        <?php } ?>

                        <?php if ($login) { ?>
                        <p style="color:green"><?php echo $login ?></p>
                        <?php } ?>

                        <form method="post" action="/authamil/valid_login">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" name="Nama_amil" placeholder="Nama Amil"
                                    required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required="" />
                            </div>
                            <button type="submit" class="btn btn-info" name="login">Login</button>
                            <h2><a href="<?php echo base_url(''); ?>">Lupa Kata Sandi</a></h2>
                            <div class="clearfix"></div>

                            <div>
                                <img src="<?php echo base_url('theme'); ?>/production/images/logo-ezis.png"
                                    width="350px" height="auto" alt="">
                                <!-- <h1><i class="fa fa-paw"></i> E-ZIS</h1> -->
                                <p>©2021 All Rights Reserved</p>
                            </div>
                </div>
                </form>

    </body>

</html>