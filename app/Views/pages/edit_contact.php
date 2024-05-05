<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>
<div class="container-fluid">
    <h2 class="text-center display-4">Find and Edit contacts</h2>

    <section class="content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="/find-contact" method="get">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Type your Email keyword here"
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

    <?php if (isset($_GET['keyword'])): ?>
        <?php if (!empty($contacts) ): ?>
        <!-- Default box -->
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="card-title"><?= $totalrows; ?> Available results:</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 40%">
                                Email
                            </th>
                            <th style="width: 30%">
                                List Category
                            </th>
                            <th style="width: 20%">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                      
                        <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td>
                                #<?= $contact['c_id']; ?>
                            </td>
                            <td>
                                <a>
                                    <?= $contact['email']; ?>
                                </a>
                                <br>
                                <small>
                                    Uploaded at: <?= $contact['created_at']; ?>      
                                </small>
                            </td>
                            <td>
                                <?php 
                                    $list = get_list_by_id($contact['list_id']);
                                    echo $list['name'] ?? 'N/A'; 
                                ?>
                            </td>
                            <td class="project-actions">
                                <a class="btn btn-info btn-sm edit-contact-btn" href="#" data-toggle="modal" data-target="#modal-contact" data-contact-id="<?= $contact['c_id']; ?>">
                                    <i class="fas fa-pencil-alt"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url('find-contact/delete/' . $contact['c_id']); ?>" onclick="return confirm('Are you sure you want to delete this Contact?');">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

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
        <?php else: ?>
            <div class="card-body">
               
                <div class="callout callout-info">
                  <h5>No result found!</h5>

                  <p>Nothing found with this keyword, try again.</p>
                </div>
            
              </div>
        <?php endif; ?>
<?php endif; ?>

    </section>
</div>


<!-- MODAL -->
<div class="modal fade" id="modal-contact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/find-contact/update" method="POST">
                    <div class="card-body">
                        <input type="hidden" id="contact-value" name="contact-value">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
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
    $('.edit-contact-btn').on('click', function(e) {
        e.preventDefault();
        var CId = $(this).data('contact-id');

        $.ajax({
            url:  '<?= base_url('find-contact/fetch_modal'); ?>',  // Update with your actual route
            type: 'POST',
            data: { c_id: CId },
            dataType: 'json',
            success: function(response) {
                if(response.success) {
                    $('#email').val(response.data.email);
                    $('#contact-value').val(response.data.c_id);
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