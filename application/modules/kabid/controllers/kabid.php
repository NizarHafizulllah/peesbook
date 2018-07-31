<?php 

class kabid extends kabid_controller {
	
	var $controller;
	public function kabid(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		


			
		$data_array=array();

		$userdata = $this->session->userdata('kabid');


		$data_array['curPage'] = 'beranda';


		$content = $this->load->view("kabid/kabid_view",$data_array,true);

		$this->set_subtitle("Beranda");
		$this->set_title("Beranda");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>