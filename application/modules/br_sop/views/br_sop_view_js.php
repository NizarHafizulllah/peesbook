
<script type="text/javascript">

$(document).ready(function(){

   var dt = $("#pengguna").DataTable(
      {
        // "order": [[ 0, "desc" ]],
        // "iDisplayLength": 50,
        "columnDefs": [ { "targets": 0, "orderable": false } ],
        "processing": true,
        "serverSide": true,
        "ajax": '<?php echo site_url("$this->controller/get_data") ?>'
      });

     
     $("#pengguna_filter").css("display","none");  
  
   
     $("#btn_submit").click(function(){
        // alert('hello');
        

        dt.column(1).search($("#judul").val())
        dt.column(2).search($("#program").val())
        dt.column(3).search($("#kegiatan").val())
         .draw();

         return false;
     });


     $("#btn_reset").click(function(){
      $("#judul").val('');
      $("#program").val('');
      $("#kegiatan").val('');


      $("#btn_submit").click();
     });


       $("#program").change(function(){

    $.ajax({

            url : '<?php echo site_url("$this->controller/get_kegiatan") ?>',
            data : { program : $(this).val() },
            type : 'post', 
            success : function(result) {
                $("#kegiatan").html(result)
            }
      });

    });


});
  




     




</script>