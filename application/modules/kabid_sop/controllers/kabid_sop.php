<?php 


class kabid_sop extends kabid_controller {
	
	var $controller;
	public function kabid_sop(){
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller.'_model','dm');
        $this->load->model("coremodel","cm");
	}


    
	
		function index(){
		



		$data_array=array();

		$userdata = $this->session->userdata('kabid');
        $tahun = date('Y');
        $data_array['arr_kegiatan'] = $this->cm->arr_dropdown3("kegiatan_tfi", "id", "kegiatan_utm", "kegiatan_utm", "tahun", $tahun);
        


		$data_array['curPage'] = '';


		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("SOP");
		$this->set_title("SOP");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


	function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $judul = $_REQUEST['columns'][1]['search']['value'];
        $program = $_REQUEST['columns'][2]['search']['value'];
        $kegiatan = $_REQUEST['columns'][3]['search']['value'];



      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
                "kegiatan" => $kegiatan,
				
				 
		);     

        // show_array($req_param);
           
        $row = $this->dm->data($req_param)->result_array();
		
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       // show_array($result);
        $arr_data = array();
        foreach($result as $row) : 
		// $daft_id = $row['daft_id'];
        $id = $row['id'];

        $action = "<div class='btn-group'>
                              <button type='button' class='btn btn-primary'>Action</button>
                              <button type='button' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                                <span class='caret'></span>
                                <span class='sr-only'>Toggle Dropdown</span>
                              </button>
                              <ul class='dropdown-menu' role='menu'>
                                <li><a href ='$this->controller/lihatdata?id=$id'><i class='fa fa-eye'></i> Lihat</a></li>
                              </ul>
                            </div>";
    if ($row['status']==0) {
        $status = '<span class="label label-sm label-danger">Belum Diproses</span>';
    }else{
         $status = '<span class="label label-sm label-success">Telah Disetujui</span>';
    }
        
        
        	 
        	$arr_data[] = array(
        		$row['id'],
        		$row['kegiatan'],
                $status,
                $row['tahun'], 
        		$action
        		
         			 
        		  				);
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
        				  'recordsTotal' => $count, 
        				  'recordsFiltered' => $count,
        				  'data'=>$arr_data
        	);
         
        echo json_encode($responce); 
    }



    function get_kegiatan(){
        $data = $this->input->post();
        

        $program = $data['program'];

        $this->db->where("id_program",$program);
        $this->db->order_by("id");
        $rs = $this->db->get("m_kegiatan");
            echo "<option value=''>- Pilih Satu - </option>";
        foreach($rs->result() as $row ) :
            echo "<option value=$row->id>$row->kegiatan </option>";
        endforeach;
    }



    function lihatdata(){
        $data_array=array();
        $id = $this->input->get('id');
         $this->db->select('d.*, k.kegiatan_utm as kegiatan');
        $this->db->from("sop d");
        $this->db->join('kegiatan_tfi k','d.id_kegiatan=k.id');
         $this->db->where('d.id',$id);
         $dpa = $this->db->get();
         $data_array = $dpa->row_array();

        $data_array['curPage'] = '';

        $data_array['action'] = 'update';
        $data_array['form'] = 'form_update';
        $data_array['arr_status'] = array('0' => 'Belum Diproses',
                                            '1' => 'Disetujui' );

        // show_array($data_array);
        // exit();

        $content = $this->load->view($this->controller."_detail_view",$data_array,true);

        $this->set_subtitle("Lihat DPA");
        $this->set_title("Lihat DPA");
        $this->set_content($content);
        $this->cetak();
}




    


    function update(){

        $post = $this->input->post();
   
       // show_array($post);
       // exit();


        $this->load->library('form_validation');  
        $this->form_validation->set_rules('status','Status','required');   
       
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 


        if ($post['status']==1) {
            $post['tgl_disetujui'] = date('Y-m-d');
        }





        $this->db->where("id",$post['id']);
        $res = $this->db->update('sop', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DIUPDATE");
        }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
    }


}
?>