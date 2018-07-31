<?php 


class sk extends admin_controller {
	
	var $controller;
	public function sk(){
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller.'_model','dm');
        $this->load->model("coremodel","cm");
	}


    
	
		function index(){
		



		$data_array=array();

		$userdata = $this->session->userdata('admin_login');
        
        
		$data_array['curPage'] = '';


		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("SK");
		$this->set_title("SK");
		$this->set_content($content); 
		$this->cetak();


				
			
		
	}


	function simpan(){
		$post = $this->input->post();
    


        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_kegiatan','Kegiatan','required');     
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');



	if($this->form_validation->run() == TRUE ) { 


        $post['tahun'] = date('Y');
        $res = $this->db->insert('kas', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
	}
	else {
    $arr = array("error"=>true,'message'=>validation_errors());
	}
        echo json_encode($arr);
	}

    function baru(){
        $data_array=array();
        $data_array['curPage'] = '';

        $data_array['action'] = 'simpan';
        $data_array['form'] = 'form_simpan';
        $tahun = date('Y');
        $data_array['arr_kegiatan'] = $this->cm->arr_dropdown3("kegiatan_tfi", "id", "kegiatan_utm", "kegiatan_utm", "tahun", $tahun);

        // show_array($data_array);
        // exit();

        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah KAS");
        $this->set_title("Tambah KAS");
        $this->set_content($content);
        $this->cetak();
}




}
?>