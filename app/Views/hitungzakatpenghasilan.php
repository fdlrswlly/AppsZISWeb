<?php echo view('parsial/navbar.php'); ?>
<title>Kalkulator Zakat Penghasilan</title>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">Hitung Zakat Penghasilan</h2>
                <p class="card-text">Hitung Zakat Penghasilan yang akan dikeluarkan</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <form name="myForm" action="<?php echo base_url() ?>/hitungzakat/hitungzakatpenghasilan" method="post">
                        <!-- Blog post-->
                        <label><b>Jumlah Penghasilan:</b></label>
                        <div class="input input-group">
                            <span class="input-group-text">Rp. </span>
                            <input type="number" class="form-control" id="jml_penghasilan" name="jml_penghasilan" placeholder="Masukkan Jumlah Penghasilan">
                            <!-- <span class="input-group-text">/Kg </span> -->
                        </div>
                        <label><b>Biaya Pengeluaran:</b></label>
                        <div class="input input-group">
                            <span class="input-group-text">Rp. </span>
                            <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" placeholder="Masukkan Jumlah Pengeluaran Per Bulan">
                            <!-- <span class="input-group-text">/Kg </span> -->
                        </div>
                        <label><b>Harga Emas Saat ini:</b></label>
                        <div class="input input-group">
                            <span class="input-group-text">Rp. </span>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Emas">
                            <span class="input-group-text">/gram </span>
                            <!-- <span class="input-group-text">/Kg </span> -->
                        </div>
                        <br>
                        <button class="btn btn-primary" value="Hitung" type="submit" onclick="hitung()">Hitung</button>
                    </form>
                    <?php
                    error_reporting(0);
                    //$hasil_perbulan = $_POST['hasil_perbulan'];
                    $jml_penghasilan = $_POST['jml_penghasilan'];
                    $pengeluaran = $_POST['pengeluaran'];
                    $harga = $_POST['harga'];
                    $hasil = $jml_penghasilan - $pengeluaran;
                    $nisab = 85 * $harga;

                    if (empty($jml_penghasilan) || empty($pengeluaran) || empty($harga)) { ?>
                        <script>
                            function hitung() {
                                let x = document.forms["myForm"]["harga"].value;
                                if (x == "") {
                                    alert("Harap diisi terlebih dahulu");
                                }
                            }
                        </script>
                    <?php } elseif ($hasil >= $nisab) {
                        $zakat = $hasil * 2.5 / 100;
                        //$format = number_format($zakat, 0, ",", "."); ?>
                        <div class='alert alert-info'> Zakat yang anda keluarkan sebesar <b> Rp. <?php echo number_format ($_SESSION['a'] = $zakat); ?> ,- </b>
                            <br> <a href="<?php echo base_url('BayarZakat/input'); ?>">Klik disini untuk melakukan pembayaran ZIS</a>
                        </div>
                    <?php } else { ?>
                        <div class='alert alert-danger'>Anda belum wajib mengeluarkan zakat</div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php echo view('parsial/sidebar_user.php'); ?>
    </div>
    <br>
    <br>
    <br>
    <!-- <br> -->
    <br>
</div>
<?php echo view('parsial/footer_user.php'); ?>