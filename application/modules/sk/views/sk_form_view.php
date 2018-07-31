     <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-dialog.min.css">
   <link href="<?php echo base_url(); ?>assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/omg/bootstrap-dialog.min.css">
   
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/ckeditor/ckeditor.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap-dialog.min.js"></script>
        <!-- Main content -->
        <script src="<?php echo base_url("assets"); ?>/fileinput/js/fileinput.min.js"></script>
 <link href="<?php echo base_url("assets"); ?>/fileinput/css/fileinput.min.css" rel="stylesheet">
      <style type="text/css">
        .modal-backdrop {
            z-index: -1;
        }
      </style>

        <form id="<?php echo $form; ?>" class="form-horizontal" method="post" 
        action="<?php echo site_url("$this->controller/$action"); ?>" role="form"> 


   

    <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Menimbang
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="ckeditor" id="menimbang" name="menimbang"><?php echo isset($menimbang)?$menimbang:''; ?></textarea>
                    </div>
                </div>
                

               
                

             </div>           
      
    </div>
  </div>
</div>

    <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Mengingat
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="ckeditor" id="mengingat" name="mengingat"><?php echo isset($mengingat)?$mengingat:''; ?></textarea>
                    </div>
                </div>
                

               
                

             </div>           
      
    </div>
  </div>
</div>


 <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Menetapkan
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="ckeditor" id="menetapkan" name="menetapkan"><?php echo isset($menetapkan)?$menetapkan:''; ?></textarea>
                    </div>
                </div>
                

               
                

             </div>           
      
    </div>
  </div>
</div>

 <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Kesatu
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="ckeditor" id="kesatu" name="kesatu"><?php echo isset($kesatu)?$kesatu:''; ?></textarea>
                    </div>
                </div>
                

               
                

             </div>           
      
    </div>
  </div>
</div>


 <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Kedua
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="ckeditor" id="kedua" name="kedua"><?php echo isset($kedua)?$kedua:''; ?></textarea>
                    </div>
                </div>
                

               
                

             </div>           
      
    </div>
  </div>
</div>

 <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Ketiga
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="ckeditor" id="ketiga" name="ketiga"><?php echo isset($ketiga)?$ketiga:''; ?></textarea>
                    </div>
                </div>
                

               
                

             </div>           
      
    </div>
  </div>
</div>

 <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Tembusan
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="ckeditor" id="tembusan" name="tembusan"><?php echo isset($tembusan)?$tembusan:''; ?></textarea>
                    </div>
                </div>
                

               
                

             </div>           
      
    </div>
  </div>
</div>


 <div class="row">

  <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Data Lain
              </h3>
            <span class="pull-right">
              <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
            </div>

             <div class="panel-body">

             
              <div class="form-group">
                                <label class="col-sm-2 control-label">Tanggal Penetapan </label>
                                <div class="col-sm-10">
                                  <input type="text" name="tgl_penetapan" id="tgl_penetapan" class="tanggal form-control input-style" placeholder="Tanggal Penetapan" data-language='en'
                                  value="<?php echo isset($tgl_penetapan)?$tgl_penetapan:""; ?>" data-date-format="dd-mm-yyyy">
                                </div>
                              </div> 
                

               
                

             </div>           
      
    </div>
  </div>
</div>

<div class="form-group">
                    <div class="col-sm-3">
                        <button class="btn btn-primary form-control" id="simpan">Simpan</button>
                    </div>
                </div>

 
  </form>


      <?php 
$this->load->view($this->controller."_form_view_js");
?>