<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('partials/head'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Render the top nav section -->
        <?= $this->include('partials/top_navigation'); ?>
        <!-- Render side bar section -->
        <?= $this->include('partials/side_bar'); ?>


        <!-- **************** MAIN CONTENT START **************** -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content ">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Render the content section -->
                        <?= $this->renderSection('content'); ?>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- **************** MAIN CONTENT END **************** -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->


        <!-- =======================
    Footer START -->
        <?= $this->include('partials/footer'); ?>
        <!--=======================
    Footer END -->


        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="<?= base_url('public/plugins/jquery/jquery.min.js');?>"></script>
        <!-- Bootstrap -->
        <script src="<?= base_url('public/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <!-- AdminLTE -->
        <script src="<?= base_url('public/dist/js/adminlte.js');?>"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="<?= base_url('public/plugins/chart.js/Chart.min.js');?>"></script>
      
        <!-- Page specific script -->
        <!-- AdminLTE for purposes -->
        <script src="<?= base_url('public/dist/js/pages/dashboard3.js');?>"></script>

        <!-- toaster -->
        <script src="<?= base_url('public/plugins/toastr/toastr.min.js');?>"></script>
        <!-- SHOW TOASTR NOTIFICATION -->
        <?php if (session()->getFlashdata('flash_message') != "") : ?>

                <script type="text/javascript">
                    "use strict";
                    toastr.success('<?php echo htmlspecialchars(session()->getFlashdata("flash_message")); ?>');
                </script>

                <?php endif; ?>

                <?php if (session()->getFlashdata('error_message') != "") : ?>

                <script type="text/javascript">
                    "use strict";
                    toastr.error('<?php echo htmlspecialchars(session()->getFlashdata("error_message")); ?>');
                </script>

        <?php endif; ?>

        <!-- Specific page script -->
        <?= $this->renderSection('scripts'); ?>
    </div>
</body>

</html>