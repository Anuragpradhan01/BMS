<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>

<div class="col-md-6 offset-md-3 mt-4">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Upload Bulk contact into a list</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="contact/create" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>Select list</label>
                    <select class="form-control select2 " style="width: 100%;" data-select2-id="1" name="list_id">
                        <?php if (empty($lists)): ?>
                             <option disabled>No list found</option>
                        <?php else: ?>
                            <?php foreach ($lists as $list): ?>
                                <option value="<?= $list['list_id']; ?>"><?= $list['name']; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Add contacts</label> <small>(add email by comma (,) sperated.)</small>
                    <textarea class="form-control" rows="3" placeholder="Ex. abc@example.com," name="contacts"></textarea>
                </div>
            

                <small class="text-danger"><b>Note:</b> Invaild or dublicate emails from the list will automatically filtered out.</small>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div>

<?php $this->endSection(); ?>

<!-- Section for page-specific scripts -->
<?= $this->section('scripts'); ?>
  <!-- Select2 -->
<script src="<?= base_url('public/plugins/select2/js/select2.full.min.js');?>"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
<?= $this->endSection(); ?>