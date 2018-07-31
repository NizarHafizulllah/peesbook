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