        <style type="text/css">
          iframe {

              margin-top: 20px;
              margin-bottom: 30px;
              
              -moz-border-radius: 12px;
              -webkit-border-radius: 12px;
              border-radius: 12px;

              -moz-box-shadow: 4px 4px 14px #000;
              -webkit-box-shadow: 4px 4px 14px #000;
              box-shadow: 4px 4px 14px #000;

              -moz-transform:rotate(0deg);
              -webkit-transform:rotate(0deg);
              -o-transform:rotate(0deg);
              -ms-transform:rotate(0deg);
              filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=.2);
            }
        </style>
<h3>KAS Detail</h3>
<hr>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">KAS TAHUN <?php echo $tahun; ?></h3>
                        </div>
                        <div class="panel-body">
                              
                        	<table width="100%">
                        		<tr>
                        			<td align="center"><img src="<?php echo base_url('assets/img/logo_sumbawa.png'); ?>" width='80' height='100'></td>
                        		</tr>
                        		<tr>
                        			<td>&nbsp;</td>
                        		</tr>
                        		<tr>
                        			<td align="center" style="font-size: 20px; font-family: Sans Serif"><b>DPA Tahun <?php echo $tahun; ?></b></td>
                        		</tr>
                        	</table>
    						<br/>&nbsp;
    						<table width="100%" style="font-family: San Serif; font-size: 20px;">
                  <tr>
                    <td width="20%">Kegiatan</td>
                    <td width="80%">: <?php echo $kegiatan ?></td>
                  </tr> 
                  <tr>
                    <td width="20%">Tahun</td>
                    <td width="80%">: <?php echo $tahun ?></td>
                  </tr>
                  <tr>
                    <td width="20%">Deskripsi</td>
                    <td width="80%">: <?php echo $deskripsi ?></td>
                  </tr>       
                </table>

                <br/>&nbsp;

                <div class="col-md-12">
                  <iframe width="100%" height="600px" scrolling="no" src="<?php echo base_url('assets').'/file_upload/kas/'.$dir; ?>"></iframe>
                </div>



                <br/>&nbsp;
                <br/>&nbsp;
                <br/>&nbsp;




   


    

        
          
          <a href="<?php echo site_url("$this->controller"); ?>"><button id="reset" type="button" class="btn btn-danger">Kembali</button></a>




                

               


                       </div>
                    </div>
                </div>
            </div>

<?php 
$this->load->view($this->controller."_detail_view_js");
?>




