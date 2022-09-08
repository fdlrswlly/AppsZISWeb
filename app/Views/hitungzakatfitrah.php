<?php echo view('parsial/navbar.php'); ?>
<title>Kalkulator Zakat Fitrah</title>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card-body">
                <h2 class="card-title">Hitung Zakat Fitrah</h2>
                <p class="card-text">Hitung Zakat Fitrah yang akan dikeluarkan</p>
                <!-- <a class="btn btn-primary" href="#!">Read more →</a> -->
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <form name="myForm" action="<?php echo base_url() ?>/hitungzakat/hitungzakatfitrah" method="post">
                        <!-- Blog post-->
                        <div class="form-group">
                            <label>Jumlah Anggota Keluarga</label>
                            <input type="number" class="form-control" placeholder="Masukkan Jumlah Anggota Keluarga" id="jml_kel" name="jml_kel">
                            <br>
                            <label>Harga Beras Per Kilogram</label>
                            <div class="input input-group">
                                <span class="input-group-text">Rp. </span>
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Beras">
                                <span class="input-group-text">/Kg </span>
                            </div>
                            <br>
                            <button class="btn btn-primary" value="Hitung" type="submit" onclick="hitung()">Hitung</button>
                    </form>
                    <?php
                    error_reporting(0);
                    $jml_kel = $_POST['jml_kel'];
                    $harga = $_POST['harga'];

                    $hasil = $jml_kel * ($harga * 2.5);

                    if (($jml_kel = $jml_kel) || ($harga = $harga)) {
                        //$number = $hasil;
                        //$format = number_format($hasil, 0, ',', '.'); ?>
                        <div class='alert alert-info'>Zakat yang harus anda keluarkan sebesar <b>Rp. <?php echo number_format ($_SESSION['a']= $hasil); ?>
                                ,-</b> <br> <a href = "<?php echo base_url('BayarZakat/input');?>">Klik disini untuk melakukan pembayaran ZIS</a>
                        </div>
                    <?php } else { ?>
                        <script>
                            function hitung() {
                                let x = document.forms["myForm"]["harga"].value;
                                if (x == "") {
                                    alert("Jumlah Harga Beras dan Anggota Keluarga tidak boleh kosong!");
                                }
                            }
                        </script>
                    <?php } ?>
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