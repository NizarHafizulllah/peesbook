  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">
   <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>

   <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap-dialog.min.js"></script>
        <!-- Main content -->
      <style type="text/css">
        .modal-backdrop {
            z-index: -1;
        }
      </style>

        <form id="<?php echo $form; ?>" class="form-horizontal" method="post" 
        action="<?php echo site_url("$this->controller/$action"); ?>" role="form"> 

    <div class="form-group">
      <label class="col-sm-2 control-label">NIP Pihak Pertama </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="nip_pihak_pertama" id="nip_pihak_pertama" class="form-control input-style" placeholder="NIP Pihak Pertama" 
        value="<?php echo isset($nip_pihak_pertama)?$nip_pihak_pertama:""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Nama Pihak Pertama </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="nm_pihak_pertama" id="nm_pihak_pertama" class="form-control input-style" placeholder="Nama Pihak Pertama" 
        value="<?php echo isset($nm_pihak_pertama)?$nm_pihak_pertama:""; ?>">
      </div>
    </div>
          <div class="form-group">
      <label class="col-sm-2 control-label">Jabatan Pihak Pertama </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="jb_pihak_pertama" id="jb_pihak_pertama" class="form-control input-style" placeholder="Jabatan Pihak Pertama" 
        value="<?php echo isset($jb_pihak_pertama)?$jb_pihak_pertama:""; ?>">
      </div>
    </div>
    
       <div class="form-group">
      <label class="col-sm-2 control-label">NIP Pihak Kedua </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="nip_pihak_kedua" id="nip_pihak_kedua" class="form-control input-style" placeholder="NIP Pihak Kedua" 
        value="<?php echo isset($nip_pihak_kedua)?$nip_pihak_kedua:""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Nama Pihak Kedua </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="nm_pihak_kedua" id="nm_pihak_kedua" class="form-control input-style" placeholder="Nama Pihak Kedua" 
        value="<?php echo isset($nm_pihak_kedua)?$nm_pihak_kedua:""; ?>">
      </div>
    </div>
          <div class="form-group">
      <label class="col-sm-2 control-label">Jabatan Pihak Kedua </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="jb_pihak_kedua" id="jb_pihak_kedua" class="form-control input-style" placeholder="Jabatan Pihak Kedua" 
        value="<?php echo isset($jb_pihak_kedua)?$jb_pihak_kedua:""; ?>">
      </div>
    </div>
           <div class="form-group">
      <label class="col-sm-2 control-label">Tempat </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="tmp" id="tmp" class="form-control input-style" placeholder="Tempat" 
        value="<?php echo isset($tmp)?$tmp:""; ?>">
      </div>
    </div>
      <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal </label>
      <div class="col-sm-10">
       <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="tgl" id="tgl" class="tanggal form-control input-style" placeholder="Tanggal" 
        value="<?php echo isset($tgl)?$tgl:""; ?>" data-date-format="dd-mm-yyyy">
      </div>
    </div>

    <div class="form-group pull-center">
        <div class="col-sm-offset-2 col-sm-9">
          <button id="<?php echo $action ?>" style="border-radius: 0;" type="submit" class="btn btn-primary"  >Simpan</button>
          <a href="<?php echo site_url("$this->controller"); ?>"><button style="border-radius: 0;" id="reset" type="button" class="btn btn-danger">Kembali</button></a>
        </div>
      </div>

 
  </form>


      <?php 
$this->load->view($this->controller."_view_js");
?>