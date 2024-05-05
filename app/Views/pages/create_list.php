<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>
<div class="col-12 col-sm-6 offset-md-3 mt-4">
    <!-- form start -->
    <form action="/list/create" method="POST">
        <div class="card card-primary">
            <div class="card-header">
                <div class="col-sm-6">
                    <p>What type of content will you send to this list?</p>
                    <div class="form-group">
                        <?php foreach ($categories as $category): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="content_type"
                                id="radio<?= $category['lc_id']; ?>" value="<?= $category['lc_id']; ?>"
                                <?php if ($category['lc_id'] == 1): ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="radio<?= $category['lc_id']; ?>">
                                <?= ucfirst($category['name']); ?>
                                <!-- Display category name with first letter capitalized -->
                            </label>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">List name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter List name"
                        name="list_name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="list_desc"></textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create List</button>
            </div>
    </form>
</div>
</div>
<?php $this->endSection(); ?>