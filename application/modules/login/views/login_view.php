<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PESBOOK | </title>


  

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/dialog/css/bootstrap-dialog.css">




<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script> -->
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/bootstrap/css/bootstrap.min.css"> -->

   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/main.css">

  </head>
<body style="background-color: #2ecc71;">




  <div class="modal fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"
    role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-time">
                    </span>Sedang memproses. Harap Tunggu...
                 </h4>
            </div>
            <div class="modal-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-info
                    progress-bar-striped active"
                    style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(<?php echo base_url(); ?>assets/login/images/bg-01.jpg);">
          <span class="login100-form-title-1">
            Log in
          </span>
        </div>

        <form role="form" action="" method="post" class="login-form login100-form validate-form" action="" role="form"  method="post">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="form-username" id="form-username" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="form-password" id="form-password" placeholder="Enter password">
            <input type="hidden" id="mask" name="mask" />
            <span class="focus-input100"></span>
          </div>

          

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" id="sub">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

  <script src="<?php echo base_url(); ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login/vendor/bootstrap/js/popper.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login/js/main.js"></script>
<!-- 
<link href="<?php echo base_url(); ?>assets/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
<script src="<?php echo base_url(); ?>assets/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script> -->
  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script> -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap-dialog.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.md5.js" type="text/javascript"></script>
     
 

    
    <script type="text/javascript">
      $(document).ready(function(){
        $('#sub').on('click', function () {
            
             $("#mask").val($.md5($("#form-password").val()));
            $("#form-password").val('');
            var username = $("#form-username").val();
            var mask = $("#mask").val();
            var data = 'username='+ username  + '&mask='+ mask;
            $.ajax({
                                url : '<?php echo site_url("login/ceklogin") ?>',
                                type : 'post',
                                dataType : 'json',
                                data : data,
                                success : function(hasil){
                                    if(hasil.error == false && hasil.level == 1) {
                                       
                                           BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_PRIMARY,
                                                title: 'Informasi',
                                                message: hasil.message,

                                                callback: function(result) {
                                                        location.href=hasil.link;
                                                }
                                                 
                                                 
                                                } 
                                            ); 
           
                  
                                    }else if(hasil.error == false && hasil.level == 2){
                                        BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_PRIMARY,
                                                title: 'Informasi',
                                                message: hasil.message,

                                                callback: function(result) {
                                                        location.href=hasil.link;
                                                }
                                                 
                                                 
                                                } 
                                            ); 
                                     
                                          
                                    }else if(hasil.error == false && hasil.level == 3){
                                        swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Super Admin',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     
                                                window.location.href = '<?php echo site_url("super_admin"); ?>';
                                    }else if(hasil.error == false && hasil.level == 4){
                                        swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Petugas Verifikasi Kecamatan',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     
                                                window.location.href = '<?php echo site_url("app_kecamatan"); ?>';
                                    }else if(hasil.error == false && hasil.level == 5){
                                        swal({
                                                title: 'Login Berhasil',
                                                text: 'Anda Login Sebagai Admin Kecamatan',
                                                type: 'success',
                                                buttonsStyling: false,
                                                confirmButtonClass: 'btn btn-primary'
                                                  
                                            });
                                     
                                                window.location.href = '<?php echo site_url("operator_kecamatan"); ?>';
                                    }
                                    else {
                                           BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                title: 'Error',
                                                message: hasil.message
                                                 
                                            }); 
                                        
                                    }
                                }
                            });
        });
      });
    </script>  

<!-- end of page level js -->
</body>

</html>