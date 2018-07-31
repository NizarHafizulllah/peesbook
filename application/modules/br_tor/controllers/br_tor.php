<?php
class br_tor extends master_controller  {
	var $controller;
	function br_tor(){
		$this->controller = get_class($this);
		parent::__construct();
        $this->load->model("coremodel","cm");
        $this->load->helper("tanggal");
		$this->load->model("br_tor_model","dm");        
	}
	
	
	function index(){
		$data_array = array();
		$tahun = date('Y');
        $data_array['arr_kegiatan'] = $this->cm->arr_dropdown3("kegiatan_tfi", "id", "kegiatan_utm", "kegiatan_utm", "tahun", $tahun);
		$content = $this->load->view($this->controller."_view",$data_array, true);
		
		$this->set_subtitle("TOR");
		$this->set_title("PESBOOK - Buku Panduan Evaluasi Staf");
		$this->set_content($content);
		$this->render();
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


        if (empty($kegiatan)) {
        	$kegiatan = 'xxxxxx';
        }



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

        $action = "<a href='$this->controller/lihatdata?id=$id' class='btn btn-primary'> <i class='fa fa-eye'></i> Detail</a>";
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


     function lihatdata(){
        $data_array=array();
        $id = $this->input->get('id');
         $this->db->select('d.*, k.kegiatan_utm as kegiatan');
        $this->db->from("tor d");
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

        $this->set_subtitle("TOR");
		$this->set_title("PESBOOK - Buku Panduan Evaluasi Staf");
		$this->set_content($content);
		$this->render();
}
}