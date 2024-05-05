<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>
<div class="col-md-12 mt-4">
    <div class="callout callout-info">
        <h5>Dashboard</h5>

        <p>Welcome!</p>
    </div>
    <?php   print_r(session()->get());?>
</div>
<?php $this->endSection(); ?>