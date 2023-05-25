<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meteran extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file', 'text'));
		$this->load->library('form_validation');
		$this->load->model('Resource');
		date_default_timezone_set('Asia/Jakarta');
		
		// if($this->session->userdata('level') <> 'admin')
		// {
		// 	redirect('backend/login');
		// }
	}

	public function index()
	{	

		$data['meteran'] = $this->db->query("
				SELECT *
				FROM id_pelanggan
				GROUP BY created_at DESC
				")->result();
		$this->load->view('content/Meteran/index', $data);
	}
	public function create()
	{
		$this->load->view('content/Meteran/add');
	}

	public function store()
	{
		
		$tanggalHariIni = new DateTime('now');
		$this->form_validation->set_rules('nomor_pelanggan', 'Nomor Pelanggan', 'required');

		$data['status']="sukses";
		$data['error']="";
		
		if ($this->form_validation->run()== false){
			$data["status"]="error";
			$data["error"]= validation_errors();
			$this->session->set_flashdata('error', 'Gagal menyimpan');
			redirect('meteran/create');			

		}else{
			$data["status"]=="sukses";
			$nomor_pelanggan = $this->input->post('nomor_pelanggan');
			

			$data = array(
				'nomor_pelanggan' => $nomor_pelanggan,
				'created_at' => date('Y-m-d H:i:s')

			);
			$this->Resource->store($data,'id_pelanggan');
			$this->session->set_flashdata('sukses', 'Sukses menyimpan');
			redirect('meteran/index');	

			
		}


		
	}
	public function edit($id)
			{	
				$where = array('id_meteran' => $id);

				$data['meteran'] = $this->Resource->edit($where,'id_pelanggan')->result();
				
				
				$this->load->view('content/meteran/edit', $data);
			}

	public function detail($id)
	{	
				$where = array('id_meteran' => $id);

				$data['meteran'] = $this->Resource->edit($where,'id_pelanggan')->result();
				
				
				$this->load->view('content/meteran/detail', $data);
	
	}


	public function update(){
		
			$id = $this->input->post('id');
			
			$nomor_pelanggan = $this->input->post('nomor_pelanggan');

		$data = array(
				'nomor_pelanggan' => $nomor_pelanggan,
				

			);

		$where = array(
			'id_meteran' => $id
		);
		$this->Resource->update($where,$data,'id_pelanggan');
		redirect('meteran/index');
	}
}
