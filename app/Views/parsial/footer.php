<!-- footer content -->
<footer>
    <div class="pull-right">
        <p>Copyright by Fadhly Aulia - 2022</p>
    </div>
    <div class="clearfix"></div>
</footer>
</body>
<!-- upload file -->
<script>
    function ambilNama() {
        const file = document.querySelector('.custom-file-input');
        const namafile = document.querySelector('.custom-file-label');
        namafile.textContent = file.files[0].name;
    }
</script>

</html>
<!-- /footer content -->


<!-- jQuery -->
<script src="<?php echo base_url('theme'); ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('theme'); ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('theme'); ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url('theme'); ?>/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?php echo base_url('theme'); ?>/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?php echo base_url('theme'); ?>/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url('theme'); ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<!-- iCheck -->
<script src="<?php echo base_url('theme'); ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?php echo base_url('theme'); ?>/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php echo base_url('theme'); ?>/vendors/Flot/jquery.flot.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?php echo base_url('theme'); ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?php echo base_url('theme'); ?>/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('theme'); ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url('theme'); ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('theme'); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('theme'); ?>/build/js/custom.min.js"></script>