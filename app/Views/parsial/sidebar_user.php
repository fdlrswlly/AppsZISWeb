<!-- Side widgets-->
<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <?php foreach ($total_zakat as $x) : ?>
            <div class="card-header">Total ZIS yang Terkumpul</div>
            <div class="card-body">
                <h2>Rp. <?php
                        $number = $x['total_zakatt'];
                        $format = number_format($number, 2, ",", ".");
                        echo $format; ?></h2>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4">
        <?php foreach ($total_penyaluran as $x) : ?>
            <div class="card-header">Total Yang Sudah Disalurkan</div>
            <div class="card-body">
                <h2>Rp. <?php
                        $number = $x['total_penyaluran'];
                        $format = number_format($number, 2, ",", ".");
                        echo $format; ?></h2>
            </div>
        <?php endforeach; ?>
        <div class="row">
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>