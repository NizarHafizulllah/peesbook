<?php 


class kabid_tfi extends kabid_controller {
	
	var $controller;
	public function kabid_tfi(){
		parent::__construct();
		$this->controller = get_class($this);
		$this->load->model($this->controller.'_model','dm');
        $this->load->model("coremodel","cm");
         $this->load->helper("tanggal");
	}
	
		function index(){

        $data_array=array();
        $userdata = $this->session->userdata('kabid_login');
        

		$tahun_ini = date('Y');
        $this->db->where('year(tgl)', $tahun_ini);
        $tfi = $this->db->get('tfi');

        // echo $this->db->last_query();
        // exit();
        if ($tfi->num_rows()==0) {
            $data_array['action'] = 'simpan';
            $data_array['form'] = 'form_simpan';
            $data_array['curPage'] = '';
            $content = $this->load->view("no_data_tfi",$data_array,true);
        }else{
            $data_array['data'] = $tfi->row_array();
            $this->db->where('id_tfi', $data_array['data']['id_tfi']);
            $data_array['data']['sasaran'] = $this->db->get('sasaran')->result_array();
            $this->db->where('id_tfi', $data_array['data']['id_tfi']);
            $data_array['data']['kegiatan'] = $this->db->get('kegiatan_tfi')->result_array();
            $data_array['curPage'] = '';
            $content = $this->load->view($this->controller."_detail_view",$data_array,true);
        }

		



		

		$this->set_subtitle("PK");
		$this->set_title("PK");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


 






}
?>