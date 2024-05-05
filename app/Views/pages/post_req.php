<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>
 
          <div class="col-md-10 offset-md-1 mt-4">
             <form id="emailForm" > <div class="card card-primary card-outline">   
                  <div class="card-header">
                    <h3 class="card-title">Compose New Message</h3>
                  </div>
                  <!-- /.card-header -->
                
                  <div class="card-body">
                  <h3 class="card-title mb-2">Sender Info:</h3>
                    <div class="form-group">
                      <input id="subjectInput" class="form-control" placeholder="Subject:">
                    </div>
                    <div class="form-group">
                      <input id="fromMailInput" class="form-control" placeholder="From eMail ID:" value="<?= getenv('MAILJET_SEND_MAIL')?>" Disabled>
                    </div>
                    <div class="form-group">
                      <input id="fromNameInput" class="form-control" placeholder="From Name:" >
                    </div>
                    <div class="form-group">
                      <input id="fromCompanyNameInput" class="form-control" placeholder="Company Name:" value="<?= getenv('MAILJET_COMPANY_NAME')?>" Disabled>
                    </div>

                    <div class="form-group">
                      <input id="fromCompanyCampaignNameInput" class="form-control" placeholder="Campaign Name:">
                    </div>

                    <div class="form-group">
                        <textarea id="compose-textarea" class="form-control" style="height: 300px">
                        <h3>Type your content here...</h3>
                        </textarea>
                    </div>
                    <!-- <div class="form-group">
                      <div class="btn btn-default btn-file">
                        <i class="fas fa-paperclip"></i> Attachment
                        <input type="file" name="attachment">
                      </div>
                      <p class="help-block">Max. 32MB</p>
                    </div> -->
              
                    <div class="form-group" data-select2-id="112" >
                      <label>Select Available List:</label>
                      <select class="select2 select2-hidden-accessible" id="list_ids" multiple="multiple"  data-placeholder="Select a List" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                      <?php if (empty($lists)): ?>
                                <option disabled>No list found</option>
                            <?php else: ?>
                                <?php foreach ($lists as $list): ?>
                                    <option value="<?= $list['list_id']; ?>"><?= $list['name']; ?> (<?= get_contacts_by_list_id($list['list_id']); ?> Contacts)</option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                      </select>
                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <div class="float-right">
                      <button type="submit" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                      <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send</button>
                    </div>
                    <button type="reset" id="reset-editor-button" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
          </form>
          </div>
          <!-- /.col -->

<?php $this->endSection(); ?>

<!-- Section for page-specific scripts -->
<?= $this->section('scripts'); ?>
     <!-- Summernote -->
     <script src="<?= base_url('public/plugins/summernote/summernote-bs4.min.js');?>"></script>
       <!-- Select2 -->
     <script src="<?= base_url('public/plugins/select2/js/select2.full.min.js');?>"></script>

     <script>
        $(function () {
          //Add text editor
          $('#compose-textarea').summernote({
            height: 300,  
            toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

             // Reset Summernote content to an empty string
            $('#reset-editor-button').click(function() {
                $('#compose-textarea').summernote('code', ''); // Sets the content to an empty string
                $('.select2').val(null).trigger('change');
            });

            //Initialize Select2 Elements
            $('.select2').select2()

        })


        //campaign 
        $(document).ready(function() {
          $("#emailForm").submit(function(e) {
              e.preventDefault(); // Prevent the default form submission
              // Get the HTML content from the Summernote editor
              let contentHTML = $("#compose-textarea").summernote('code');

              let lists_array = $('#list_ids').val();
              // Create a data object with form values and the content as HTML
              let formData = {
                  subject: $("#subjectInput").val(),
                  from_mail: $("#fromMailInput").val(),
                  from_name: $("#fromNameInput").val(),
                  from_company_name: $("#fromCompanyNameInput").val(),
                  from_company_campaign_name: $("#fromCompanyCampaignNameInput").val(),
                  content: contentHTML,
                  List_ids: JSON.stringify({ lists_array })
              };

              // Send AJAX request to save data
              $.ajax({
                  url: '<?=  base_url('/draft') ?>', // URL to your controller method
                  type: 'POST',
                  data: formData,
                  dataType: 'json',
                  success: function(response) {
                      if (response.status === 'success') {
                        toastr.success(response.message);
                      } else {
                        toastr.error(response.message);
                      }
                  },
                  error: function(error) {
                      toastr.error(error.message);
                  }
              });
          });
      });
    </script>
<?= $this->endSection(); ?>