<html>

<head>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('theme'); ?>/production/images/logo-ymat-mini.png" />
    <title>Login</title>
</head>
<link rel="stylesheet" href="<?php echo base_url('theme2'); ?>/css/login.css">

<body>
    <?php
    $session = session();
    $login = $session->getFlashdata('login');
    $email = $session->getFlashdata('email');
    $password = $session->getFlashdata('password');
    ?>


    <div class="login-page">
        <div class="form">
            <h3>Silahkan Login</h3>
            <form class="register-form">
                <input type="text" placeholder="name" />
                <input type="password" placeholder="password" />
                <input type="text" placeholder="email address" />
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form" action="/auth/valid_login/" method="POST">
                <?php if ($email) { ?>
                    <p style="color:red"><?php echo $email ?></p>
                <?php } ?>

                <?php if ($password) { ?>
                    <p style="color:red"><?php echo $password ?></p>
                <?php } ?>

                <?php if ($login) { ?>
                    <p style="color:green"><?php echo $login ?></p>
                <?php } ?>
                <input type="text" placeholder="email" name="email" />
                <input type="password" placeholder="password" name="password" />
                <button type="submit" name="login">login</button>
                <p class="message">Not registered? <a href="/login/register/">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>