<?php echo view('parsial/navbar.php'); ?>
<title>Kalkulator Zakat Tabungan</title>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">Hitung Zakat Tabungan</h2>
                <p class="card-text">Hitung Zakat Tabungan yang akan dikeluarkan</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <form name="myForm" action="<?php echo base_url() ?>/hitungzakat/hitungzakattabungan" method="post">
                        <!-- Blog post-->
                        <div class="form-group">
                            <label>Jumlah Simpanan</label>
                            <input type="number" class="form-control" placeholder="Masukkan Jumlah Simpanan"
                                id="simpanan" name="simpanan">
                            <br>
                            <label>Harga Emas saat ini</label>
                            <div class="input input-group">
                                <span class="input-group-text">Rp. </span>
                                <input type="number" class="form-control" id="harga" name="harga"
                                    placeholder="Masukkan Harga Emas">
                                <span class="input-group-text">/Kg </span>
                            </div>
                            <br>
                            <button class="btn btn-primary" value="Hitung" type="submit"
                                onclick="hitung()">Hitung</button>
                    </form>
                    <?php
                    error_reporting(0);
                    $simpanan = $_POST['simpanan'];
                    $harga = $_POST['harga'];

                    $nisab = 85 * $harga;
                    if (empty($simpanan) || empty($nisab)) { ?>
                    <script>
                    function hitung() {
                        let x = document.forms["myForm"]["harga"].value;
                        if (x == "") {
                            alert("Jumlah Harga Emas dan Simpanan tidak boleh kosong!");
                        }
                    }
                    </script>
                    <?php } elseif ($simpanan >= $nisab) {
                        $zakat = $simpanan * 2.5 / 100;
                        $number = $zakat;
                        $format = number_format($number, 0, ",", ".");
                        echo "<div class='alert alert-info'> ZAKAT yang anda keluarkan sebesar <b>Rp. " . $format . ",- </b></div>
	                    <br> *ZAKAT dibayar jika telah mencapai nisab 85 Gram emas dan mencapai haul 1 tahun";
                    } else { 
                        echo"<div class='alert alert-info'><b> Anda belum wajib mengeluarkan ZAKAT </b></div>
                        <br>*Anda wajib bayar zakat jika jumlah tabungan mencapai nisab 85 Gram emas dan mencapai haul 1 tahun";
                     } ?>
                </div>
            </div>
        </div>
    </div>

    <?php echo view('parsial/sidebar_user.php'); ?>
    <br>
    <br>
    <br>
    <br>
    <br>                 
</div>
</div>
<?php echo view('parsial/footer_user.php'); ?>