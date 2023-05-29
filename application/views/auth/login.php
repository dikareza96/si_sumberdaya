<!-- <?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?> 

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->

<!-- admin lte 3 -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('_partials/head') ?>
    <style type="text/css">
        .judul-logo {
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    color: #000000;
    text-align: center;
}
        .judul-rumah-sakit {
    font-size: 17px;
    text-align: center;
    font-weight: bold;
    color: #000000;
    text-align: center;
}
.judul-jalan-rs {
    font-size: 12px;
    text-align: center;
    font-weight: bold;
    color: #000000;
    text-align: center;
    font
}
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
 <div>
      <img src="<?php echo base_url(); ?>assets/img/logo_rsb.png" class="img-rounded" alt="Cinque Terre" style="height: 130px; width: 130px: "
      >
    </div>
            <!-- <?= $this->config->item('site_name') ?> -->
            <p class="judul-logo">Sistem Informasi Manajemen Sumber Daya</p>
             <p class="judul-rumah-sakit">RS BHAYANGKARA KEDIRI</p>
      <p class="judul-jalan-rs">Jl. Kombes Pol Duryat No.17 Kediri, Kediri Indonesia Phone: (0354) 671100</p>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                    Selamat datang, <br>
                    silahkan login untuk melanjutkan
                </p>

                <div id="infoMessage"><?php echo $message;?></div>

                <form action="<?= base_url('auth/login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="identity" placeholder="Username" autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
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
                <div class="social-auth-links text-center mb-3">
                            <p>- OR -</p>
                            
                        </div>

                            <p class="mb-1">
                            <a href="forgot-password.html">I forgot my password</a>
                            </p>
                            <p class="mb-0">
                            <a href="register.html" class="text-center">Register a new membership</a>
                            </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <?php $this->load->view('_partials/js.php') ?>
</body>

</html>