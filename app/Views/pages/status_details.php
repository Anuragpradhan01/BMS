<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>

<div class="col-12 mt-4">
<div class="card-header border-0">
                <h3 class="card-title">Mails</h3>
    </div>
<div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>CampaignID</th>
                                        <th>ArrivedAt</th>                                           
                                        <th>ID</th>
                                        <th>IsOpenTracked</th>
                                        <th>Status</th>
                                        <th>UUID</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($messages as $message): ?>
                                        <tr> 
                                            <td><?= $message['CampaignID'] ?? '' ?></td>
                                            <td><?= $message['ArrivedAt'] ?? '' ?></td>
                                            <td><?= $message['ID'] ?? '' ?></td>
                                            <td><?= $message['IsOpenTracked'] ?? '' ?></td>
                                            <td><?= mailjet_status_badge($message['Status'] ?? '') ?></td>
                                            <td><?= $message['UUID'] ?? '' ?></td>
                                            
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                         <th>CampaignID</th>
                                        <th>ArrivedAt</th>                                           
                                        <th>ID</th>
                                        <th>IsOpenTracked</th>
                                        <th>Status</th>
                                        <th>UUID</th>
                                      
                                       
                                    </tr>
                                </tfoot>
                            </table>
    </div>
</div>
<?php $this->endSection(); ?>

<!-- Section for page-specific scripts -->
<?= $this->section('scripts'); ?>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('public/plugins/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/jszip/jszip.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/pdfmake/pdfmake.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/pdfmake/vfs_fonts.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.colVis.min.js');?>"></script>

    
    <script>

    $(function () {
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

    $('#example3').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    });


    </script>
<?= $this->endSection(); ?>