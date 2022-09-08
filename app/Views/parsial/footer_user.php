<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright 2022 &copy; Yayasan Miqat Ahsani Taqwim</p>
        <p class="m-0 text-center text-white">Kantor Pusat Yayasan Miqat Ahsani Taqwim</p>
        <p class="m-0 text-center text-white">Jl. Margasari, Kecamatan Pasawahan, Kabupaten Purwakarta</p>
    </div>
    <script>
        function ambilNama() {
            const foto = document.querySelector('.custom-file-input');
            const namafoto = document.querySelector('.custom-file-label');
            namafoto.textContent = foto.files[0].name;
        }
    </script>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url('theme2'); ?>/js/scripts.js"></script>

</body>

</html>