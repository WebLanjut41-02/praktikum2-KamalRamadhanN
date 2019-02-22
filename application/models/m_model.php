
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_model extends CI_Model {

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function tampil_data(){
		return $this->db->get('paket');
	}

	function input_paket($data,$table){
		$this->db->insert($table,$data);
	}	

	function tampil_datapeng(){
		return $this->db->get('penghuni');
	}

	function input_peng($dataa,$table){
		$this->db->insert($table,$dataa);
	}

	function cek_loginpeng($table,$wheree){		
		return $this->db->get_where($table,$wheree);
	}

}

/* End of file m_model.php */
/* Location: ./application/models/m_model.php */
?>