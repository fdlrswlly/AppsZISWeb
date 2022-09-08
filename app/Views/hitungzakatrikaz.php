<?php echo view('parsial/navbar.php'); ?>
<title>Kalkulator Zakat Rikaz</title>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">Hitung Zakat Rikaz</h2>
                <p class="card-text">Hitung Zakat Rikaz yang akan dikeluarkan</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <form name="myForm" action="<?php echo base_url() ?>/hitungzakat/hitungzakatrikaz" method="post">
                        <!-- Blog post-->
                        <div class="form-group">
                            <label>Jumlah Harta</label>
                            <div class="input input-group">
                                <span class="input-group-text">Rp. </span>
                                <input type="number" class="form-control" placeholder="Masukkan Jumlah Harta" id="harta" name="harta">
                            </div>
                                <br>
                                <button class="btn btn-primary" value="Hitung" type="submit" onclick="hitung()">Hitung</button>
                    </form>
                    <?php
                    error_reporting(0);
                    $harta = $_POST['harta'];
                    $hasil = $harta * 20 / 100;
                    if (empty($harta)) { ?>
                        <script>
                            function hitung() {
                                let x = document.forms["myForm"]["harga"].value;
                                if (x == "") {
                                    alert("Jumlah Harga Emas dan Simpanan tidak boleh kosong!");
                                }
                            }
                        </script>
                    <?php } else {
                        $number = $hasil;
                        $format = number_format($number, 0, ",", ".");
                        echo "<div class='alert alert-info'> ZAKAT yang anda keluarkan sebesar <b>Rp. " . $hasil . ",- </b></div>
	                    ";
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo view('parsial/sidebar_user.php'); ?>
</div>
</div>
<?php echo view('parsial/footer_user.php'); ?>