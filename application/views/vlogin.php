<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>Admin</b>LTE</a>
    <?php if ($this->session->flashdata('salah')):?>
        <div class="alert alert-danger" role="alert">
          Username atau Password Salah!
        </div>        
      <?php endif?>
      <!-- if (){ } ?>-->
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo site_url('Login/validasi')?>" method="post">
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="username" name="nama_user">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-envelope"></span>
    </div>
  </div>
</div>
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-lg">
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>