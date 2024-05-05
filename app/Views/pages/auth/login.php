<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>.">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/dist/css/adminlte.min.css');?>">
   <!-- toster -->
   <link rel="stylesheet" href="<?= base_url('public/plugins/toastr/toastr.min.css');?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Company</b>LOGO</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url('/validateLogin'); ?>" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="login-email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="login-pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="<?= base_url('/forget');?>">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('/register');?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('public/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/dist/js/adminlte.min.js');?>"></script>

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
</body>
</html>
