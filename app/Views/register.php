<html>

<head>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('theme'); ?>/production/images/logo-ymat-mini.png" />
    <title>Register</title>
</head>
<link rel="stylesheet" href="<?php echo base_url('theme2'); ?>/css/login.css">

<body>
    <?php
    $session = session();
    ?>
    <div class="login-page">
        <div class="form">
            <h3>Registrasi</h3>
            <form class="login-form" action="/auth/valid_register" method="POST">
                <input type="text" placeholder="Nama Lengkap" name="Nama_muzzaki" />
                <select name="Jk_muzzaki">
                    <option value="Jenis Kelamin">Jenis Kelamin</option>
                    <option value="Laki Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <input type="text" placeholder="alamat" name="Alamat" />
                <input type="text" placeholder="No.Telepon" name="No_Telp" />
                <input type="text" placeholder="email" name="email" />
                <input type="password" placeholder="password" name="password" />
                <button type="submit">create</button>
                <p class="message">Already registered? <a href="/auth/login/">Sign In</a></p>
            </form>
        </div>
    </div>
</body>