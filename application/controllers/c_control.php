<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_control extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('m_model');
	}

	function index($value="loginkaryawan")
	{
		$this->load->view(''.$value);
	}

	//===================================================

	function aksi_login(){
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$where = array(
			'nama' => $nama,
			'nip' => $nip
			);
		$cek = $this->m_model->cek_login("karyawan",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $nama
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('c_control/creket');
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function creket()
	{
		$this->load->view('createpaket');
	}

	//===================================================
	
	function inputpaket(){
		$tgldatang = $this->input->post('tgldatang');
		$sasaran = $this->input->post('sasaran');
		$penerima = $this->input->post('penerima');
		$isipaket = $this->input->post('isipaket');
		$tglambil = $this->input->post('tglambil');
 
		$data = array(
			'tgldatang' => $tgldatang,
			'sasaran' => $sasaran,
			'penerima' => $penerima,
			'isipaket' => $isipaket,
			'tglambil' => $tglambil
			);
		$this->m_model->input_paket($data,'paket');
		redirect('c_control/tampildata');
	}

	function tampildata(){
		$data['user'] = $this->m_model->tampil_data()->result();
		$this->load->view('listpaket',$data);
	}

	//===================================================

	function inputpeng(){
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');
		$ktp = $this->input->post('ktp');
 
		$dataa = array(
			'nama' => $nama,
			'unit' => $unit,
			'ktp' => $ktp
			
			);
		$this->m_model->input_peng($dataa,'paket');

		redirect('c_control/tampildatapeng');
	}

	function tampildatapeng(){
		$dataa['user1'] = $this->m_model->tampil_datapeng()->result();
		$this->load->view('penghuni',$dataa);
	}

	//===================================================

	function aksi_loginpeng(){
		$Nama = $this->input->post('Nama');
		$unit = $this->input->post('unit');
		$ktp = $this->input->post('ktp');

		$wheree = array(
			'Nama' => $Nama,
			'unit' => $unit,
			'ktp' => $ktp
			);
		$ceks = $this->m_model->cek_loginpeng("penghuni",$wheree)->num_rows();
		if($ceks > 0){
 
			$data_session1 = array(
				'Nama' => $Nama
				);
 
			$this->session->set_userdata($data_session1);
 
			/*redirect('c_control/creket');*/
 
		}else{
			echo "Username dan password salah !";
		}
	}
}

/* End of file c_control.php */
/* Location: ./application/controllers/c_control.php */
?>