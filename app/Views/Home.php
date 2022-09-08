<?php echo view('parsial/navbar.php'); ?>

<title>Yayasan Miqat Ahsani Taqwim</title>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Selamat Datang</h1>
            <p class="lead mb-0">Yayasan Miqat Ahsani Taqwim</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="<?php echo base_url('theme2'); ?>/images/zakat-islam.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">1 Agustus 2022</div>
                    <h2 class="card-title">Tentang Zakat</h2>
                    <p class="card-text">Zakat adalah harta tertentu yang wajib dikeluarkan oleh umat Islam dan
                        diberikan kepada golongan penerima sesuai ketentuan yang telah ditetapkan. Zakat dibedakan
                        menjadi zakat mal dan zakat fitrah.</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="<?php echo base_url('theme2'); ?>/images/DSC_0296.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Senin, 1 Agustus 2022</div>
                            <h2 class="card-title h4">Penyaluran Kepada Mustahiq</h2>
                            <p class="card-text">Penyaluran Zakat yang dilaksanakan pada acara Maulid Nabi di Masjid Al - Huda</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="<?= base_url('theme2'); ?>/images/DSC_0314.jpg" alt=" ..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Senin, 1 Agustus 2022</div>
                            <h2 class="card-title h4">Penyaluran Kepada Mustahiq</h2>
                            <p class="card-text">Penyaluran Zakat yang dilaksanakan pada acara Maulid Nabi di Masjid Al - Huda</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="<?php echo base_url('theme2'); ?>/images/DSC_0295.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Senin, 1 Agustus 2022</div>
                            <h2 class="card-title h4">Penyaluran Kepada Mustahiq</h2>
                            <p class="card-text">Penyaluran Zakat yang dilaksanakan pada acara Maulid Nabi di Masjid Al - Huda</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="<?= base_url('theme2'); ?>/images/DSC_0315.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Senin, 1 Agustus 2022</div>
                            <h2 class="card-title h4">Penyaluran Kepada Mustahiq</h2>
                            <p class="card-text">Penyaluran Zakat yang dilaksanakan pada acara Maulid Nabi di Masjid Al - Huda</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <?php echo view('parsial/sidebar_user.php'); ?>
    </div>
    <!-- Footer-->
    <?php echo view('parsial/footer_user'); ?>
    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core theme JS-->
    <script src="<?php echo base_url('theme2'); ?>/js/scripts.js"></script>
    </body>

    </html>