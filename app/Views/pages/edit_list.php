<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>
<div class="container-fluid">
    <h2 class="text-center display-4">Enter a keyword of the list name</h2>

    <section class="content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="/list/find" method="get">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here"
                            name="keyword" value="<?= isset($_GET['keyword']) ? esc($_GET['keyword']) : '' ?>">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- <pre> <?php print_r($lists);?></pre> -->

        <!-- Default box -->
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="card-title">Available lists</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                List Name
                            </th>
                            <th style="width: 30%">
                                Description
                            </th>

                            <th style="width: 30%">
                                Contacts
                            </th>
                            <th style="width: 20%">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (empty($lists)): ?>
                        <tr>
                            <td colspan="4" class="text-center">
                                <strong>No lists available.</strong>
                            </td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($lists as $list): ?>
                        <tr>
                            <td>
                                #<?= $list['list_id']; ?>
                            </td>
                            <td>
                                <a>
                                    <?= $list['name']; ?>
                                </a>
                                <br>
                                <small>
                                    Created <?= $list['create_at']; ?><br>
                                    Updated <?= $list['last_update_at']; ?>
                                </small>
                            </td>
                            <td>
                                <?= $list['list_desc']; ?>
                            </td>

                            <td>
                                <?= $count = get_contacts_by_list_id($list['list_id']) ?? '0'; 
                              ?> contacts
                            </td>
                            <td class="project-actions">
                                <a class="btn btn-info btn-sm edit-list-btn" href="#" data-toggle="modal" data-target="#modal-list" data-list-id="<?= $list['list_id']; ?>">
                                    <i class="fas fa-pencil-alt"></i>
                                    Edit
                                </a>


                                <a class="btn btn-danger btn-sm"
                                    href="<?= base_url('list/delete/' . $list['list_id']); ?>"
                                    onclick="return confirm('Are you sure you want to delete this list? Please note deleting the list will also result delete all contacts associated with this.');">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>


                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- Pagination (You can update this based on your backend logic) -->
        <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center">
                    <?php if ($pager && $pager->getPageCount() > 1): ?>
                    <?php if ($pager->getCurrentPage() > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getPageURI(1) ?>" aria-label="First">
                            <span aria-hidden="true">&laquo;&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getPageURI($pager->getCurrentPage() - 1) ?>"
                            aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $pager->getPageCount(); $i++): ?>
                    <li class="page-item <?= $pager->getCurrentPage() == $i ? 'active' : '' ?>">
                        <a class="page-link" href="<?= $pager->getPageURI($i) ?>">
                            <?= $i ?>
                        </a>
                    </li>
                    <?php endfor; ?>

                    <?php if ($pager->getCurrentPage() < $pager->getPageCount()): ?>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getPageURI($pager->getCurrentPage() + 1) ?>"
                            aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="<?= $pager->getPageURI($pager->getPageCount()) ?>" aria-label="Last">
                            <span aria-hidden="true">&raquo;&raquo;</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>

    </section>
</div>

<!-- MODAL -->
<div class="modal fade" id="modal-list">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/list/update" method="POST">
                    <div class="card-body">
                        <input type="hidden" id="list-value" name="list-value">
                        <div class="form-group">
                            <label for="list-title">List Name</label>
                            <input type="text" class="form-control" id="list-title" name="list-title" placeholder="Enter List title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter..." name="list-desc" id="list-desc" spellcheck="false"></textarea>
                          
                        </div>  
                        <div class="form-group">
                            Total contacts: <span id="contact-list" class="text-success"></span> Contacts
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php $this->endSection(); ?>

<!-- Section for page-specific scripts -->
<?= $this->section('scripts'); ?>
<script>
$(document).ready(function() {
    $('.edit-list-btn').on('click', function(e) {
        e.preventDefault();
        var listId = $(this).data('list-id');

        $.ajax({
            url:  '<?= base_url('list/fetch_modal'); ?>',  // Update with your actual route
            type: 'POST',
            data: { list_id: listId },
            dataType: 'json',
            success: function(response) {
                if(response.success) {
                    $('#list-title').val(response.data.name);
                    $('#list-desc').val(response.data.list_desc);
                    $('#contact-list').html(response.contact_count);
                    $('#list-value').val(response.data.list_id);
                } else {
                    alert('Failed to fetch list details.');
                }
            },
            error: function() {
                alert('Error occurred while fetching list details.');
            }
        });
    });
});
</script>
   
<?= $this->endSection(); ?>