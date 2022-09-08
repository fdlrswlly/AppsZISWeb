<?php echo view('parsial/navbar.php'); ?>
<title>Kalkulator Zakat Perhiasan</title>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">Hitung Zakat Perhiasan</h2>
                <p class="card-text">Hitung Zakat Perhiasan yang akan dikeluarkan</p>
                <br>
                <h2 class="card-title">Penjelasan</h2>
                <p class="card-text">Adapun nisab emas sebesar emas 85 gram, dengan haul selama satu tahun dan kadar
                    zakatnya 2,5%. Artinya bila seorang muslim memiliki emas sebesar setidaknya 85 gram yang disimpan
                    selama satu tahun ia wajib membayar zakat sebesar 2,5% dari jumlah emasnya tersebut</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class=container>
                <form name="myForm" action="<?php echo base_url() ?>/hitungzakat/hitungzakatperhiasan" method="post">
                    <!-- Blog post-->
                    <div class="row">
                        <div class="col-md-6">
                            <!--<div class="form-group">
                                <label>Jenis Perhiasan</label>
                                <select name="perhiasan" class="form-control">
                                    <option value="">Pilih Jenis Perhiasan</option>
                                    <option value="emas">Emas</option>
                                    <option value="perak">Perak</option>
                                </select>
                            </div>-->
                            <div class="form-group">
                                <label>Perhiasan yang dimiliki</label>
                                <div class="input input-group">
                                    <input type="number" class="form-control" id="milik" name="milik"
                                        placeholder="Masukkan Perhiasan yang dimiliki">
                                    <span class="input-group-text">Gram</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Harga Perhiasan/Gram</label>
                                <div class="input input-group">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="number" class="form-control" id="harga" name="harga"
                                        placeholder="Masukkan Perhiasan yang dimiliki">
                                    <span class="input-group-text">Gram</span>
                                </div>
                                <br>
                                <button class="btn btn-primary" value="Hitung" type="submit"
                                    onclick="hitung()">Hitung</button>
                </form>
            </div>
            <?php
            error_reporting(0);
            $perhiasan = $_POST['perhiasan'];
            $harga = $_POST['harga'];
            $milik = $_POST['milik'];
            $jumlah = $harga * $milik;
            if (empty($milik) || empty($harga)) { ?>
            <script>
            function hitung() {
                let x = document.forms["myForm"]["harga"].value;
                if (x == "") {
                    alert("Harap Diisi terlebih dahulu");

                }
            }
            </script>
            <?php } else { ?>
            <?php if ($milik >= 85) {
                    $hasil = $jumlah * 0.025;
                    $number = $hasil;
                    $format = number_format($number, 0, ",", "."); ?>
            <div class='alert alert-info'>Zakat yang harus anda keluarkan sebesar <b>Rp. <?php echo number_format ($_SESSION['a'] = $hasil); ?> "</b>
                <br> <a href="<?php echo base_url('BayarZakat/input'); ?>">Klik disini untuk melakukan pembayaran
                    ZIS</a>
            </div>
            <?php } else {
                    $hasil = $jumlah * 0.025; ?>
            <div class='alert alert-danger'>Anda belum wajib membayar zakat karena nisab belum mencapai 85 Gram Emas
            </div>
            <?php }
            } ?>
        </div>
    </div>
</div>
</div>
<?php echo view('parsial/sidebar_user.php'); ?>
<br>
<?php echo view('parsial/footer_user.php'); ?>