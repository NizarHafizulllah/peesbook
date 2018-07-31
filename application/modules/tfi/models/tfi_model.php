<?php 

class tfi_model extends CI_Model {


	function tfi_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"id",
							"nama",
							"tahun"							 
		 	);


		$level = array('1','4');		

		$this->db->select('*')->from("m_program");
		



		 

		 if(!empty($nama)) {
		 	$this->db->like("nama",$nama);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}

	function arr_dropdown($vTable, $vINDEX, $vVALUE, $vORDERBY, $vCONDITION, $vWHERE){
                $this->db->where($vCONDITION, $vWHERE);
                $this->db->order_by($vORDERBY);
                $res  = $this->db->get($vTable);
        //echo $this->db->last_query(); exit;

                $ret = array();
                $ret = array('' => '- Pilih '.$vVALUE.' -', );
                foreach($res->result_array() as $row) : 
                        $ret[$row[$vINDEX]] = $row[$vVALUE];
                endforeach;
                return $ret;

        }



    function insert_sasaran($post){

    	 				$no_arr = 0;
                        $tot_delete = 0;
                        $tot_insert = 0;
                        // $tot_update = 0;
                        $tot_fail = 0;
                        $data_delete = array();
                        $data_insert = array();
						

					foreach($post['sasaran'] as $b)
                        {
                            if (!empty($post['id_sasaran'][$no_arr])) {

                            	array_push($data_delete, $post['id_sasaran'][$no_arr]);
                            	$arr_data = array('sasaran' => $post['sasaran'][$no_arr],
                                                    'id_tfi' => $post['id_tfi'],
                                                    'indikator' => $post['indikator'][$no_arr],
                                                    'target' => $post['target'][$no_arr], );
                            	$this->db->where('id', $post['id_sasaran'][$no_arr]);
                            	$uds = $this->db->update('sasaran', $arr_data);
                            	
                                
                            }else{
                                $arr_data = array('sasaran' => $post['sasaran'][$no_arr],
                                                    'id_tfi' => $post['id_tfi'],
                                                    'indikator' => $post['indikator'][$no_arr],
                                                    'target' => $post['target'][$no_arr], );

                                
                                    array_push($data_insert, $arr_data);

                            }

                            
                            $no_arr++;  
                        }
                        
                        // echo $this->db->last_query();

                        if (!empty($data_delete)) {

                            $this->db->where('id_tfi', $post['id_tfi']);
                            $this->db->where_not_in('id', $data_delete);
                            $delete = $this->db->delete('sasaran');

                            if ($delete) {
                            	$data_delete++;
                            }
                         
                         }


                         if (!empty($data_insert)) {

                            foreach ($data_insert as $key) {
                                $dis = array('sasaran' => $key['sasaran'],
                                                    'id_tfi' => $key['id_tfi'],
                                                    'indikator' => $key['indikator'],
                                                    'target' => $key['target'] );

                                    $inser_sasaran = $this->db->insert('sasaran', $dis);

                                    if ($inser_sasaran) {
                            	$tot_insert++;
                            }
                            }
                            
                            
                         
                         }


                         $ret  = array('insert' => $tot_insert, 
                     					'delete' => $tot_delete);
                         return $ret;

                        // show_array($post);
                        // exit();
    }

    function insert_kegiatan($post){

                        $no_arr = 0;
                        $tot_delete = 0;
                        $tot_insert = 0;
                        // $tot_update = 0;
                        $tot_fail = 0;
                        $data_delete = array();
                        $data_insert = array();
                        

                    foreach($post['kegiatan_utama'] as $b)
                        {
                            if (!empty($post['id_kegiatan'][$no_arr])) {

                                array_push($data_delete, $post['id_kegiatan'][$no_arr]);
                                $arr_data = array('kegiatan_utm' => $post['kegiatan_utama'][$no_arr],
                                                    'id_tfi' => $post['id_tfi'],
                                                    'anggaran' => bersih($post['anggaran'][$no_arr]),
                                                    'sumber' => $post['sumber'][$no_arr], );
                                $this->db->where('id', $post['id_kegiatan'][$no_arr]);
                                $uds = $this->db->update('kegiatan_tfi', $arr_data);
                                
                                
                            }else{
                                $arr_data = array('kegiatan_utm' => $post['kegiatan_utama'][$no_arr],
                                                    'id_tfi' => $post['id_tfi'],
                                                    'anggaran' => $post['anggaran'][$no_arr],
                                                    'sumber' => $post['sumber'][$no_arr], );

                                
                                    array_push($data_insert, $arr_data);

                            }

                            
                            $no_arr++;  
                        }
                        
                        // echo $this->db->last_query();

                        if (!empty($data_delete)) {

                            $this->db->where('id_tfi', $post['id_tfi']);
                            $this->db->where_not_in('id', $data_delete);
                            $delete = $this->db->delete('kegiatan_tfi');

                            if ($delete) {
                                $data_delete++;
                            }
                         
                         }


                         if (!empty($data_insert)) {

                            foreach ($data_insert as $key) {
                                $dis = array('kegiatan_utm' => $key['kegiatan_utm'],
                                                    'id_tfi' => $key['id_tfi'],
                                                    'anggaran' => bersih($key['anggaran']),
                                                    'sumber' => $key['sumber'] );

                                    $inser_sasaran = $this->db->insert('kegiatan_tfi', $dis);

                                    if ($inser_sasaran) {
                                $tot_insert++;
                            }
                            }
                            
                            
                         
                         }


                         $ret  = array('insert' => $tot_insert, 
                                        'delete' => $tot_delete);
                         return $ret;

                        // show_array($post);
                        // exit();
    }

	


}

?>