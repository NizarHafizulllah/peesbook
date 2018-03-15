<script type="text/javascript">
	
	$(document).ready(function(){

		$(".tanggal").datepicker().on('changeDate', function(ev){                 
             $('.tanggal').datepicker('hide');
        });

		$('#nip_pihak_pertama').blur(function(){
			
		$.ajax({
        	url:'<?php echo site_url("$this->controller/get_data_bynip"); ?>',
        	data : {nip : $('#nip_pihak_pertama').val() },
        	type : 'post',
        	dataType : 'json',
        	success : function(res){
        		// console.log(res.error);
        		// console.log(res);
            	$('#nm_pihak_pertama').val(res.nama);
            	$('#jb_pihak_pertama').val(res.jabatan);

        		},
    		});
		});

		$('#nip_pihak_kedua').blur(function(){
			
		$.ajax({
        	url:'<?php echo site_url("$this->controller/get_data_bynip"); ?>',
        	data : {nip : $('#nip_pihak_kedua').val() },
        	type : 'post',
        	dataType : 'json',
        	success : function(res){
        		// console.log(res.error);
        		// console.log(res);
            	$('#nm_pihak_kedua').val(res.nama);
            	$('#jb_pihak_kedua').val(res.jabatan);

        		},
    		});
		});
	});
</script>