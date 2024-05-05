<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>

<div class="col-12 mt-4">
    <div class="card-header border-0">
                <h3 class="card-title">Campaigns</h3>
    </div>
<div class="card-body table-responsive">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Created At</th> 
                <th>Send Start At</th>
                <th>Send End At</th> 
                <th>Subject</th>
                <th>Campaign Name</th>
                <th>From Email</th>
                <th>From Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            
            foreach ($campaigns as $campaign): ?>
                <tr>
                    <td><?= $campaign['ID'] ?? '' ?></td>
                    <td><?= convertIso8601ToDate($campaign['CreatedAt']) ?? '' ?></td>
                    <td><?= convertIso8601ToDate($campaign['SendStartAt']) ?? '' ?></td>
                    <td><?= convertIso8601ToDate($campaign['SendEndAt']) ?? '' ?></td>
                    <td><?= $campaign['Subject'] ?? '' ?></td>
                    <td><?= $campaign['CustomValue'] ?? '' ?></td>
                    <td><span class="badge badge-info"><?= $campaign['FromEmail'] ?? '' ?></span></td>
                    <td><?= $campaign['FromName'] ?? '' ?></td>
                    <td><?= get_mailjet_campaign_status_label($campaign['Status']) ?? '' ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= base_url('/campaign-details/'.$campaign['ID'])?>" class="btn btn-info">Details</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Created At</th> 
                    <th>Send Start At</th>
                    <th>Send End At</th> 
                    <th>Subject</th>
                    <th>Campaign Name</th>
                    <th>From Email</th>
                    <th>From Name</th>
                    <th>Status</th>
                    <th>Action</th>
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