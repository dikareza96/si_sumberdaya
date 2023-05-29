<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemakaian_listrik extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file', 'text'));
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->model('Resource');
		date_default_timezone_set('Asia/Jakarta');
		
		// if($this->session->userdata('level') <> 'admin')
		// {
		// 	redirect('backend/login');
		// }
	}

	public function index()
	{	
		$data['user'] = $this->ion_auth->user()->row();

		$data['pemakaian_listrik'] = $this->db->query("
				SELECT pl.*, ip.*
FROM pemakaian_listrik pl
INNER JOIN id_pelanggan ip ON ip.id_meteran = pl.id_pelanggan
where pl.delete_status = 0
GROUP BY pl.created_at DESC
				")->result();
		$this->load->view('content/Pemakaian_listrik/index', $data);
	}
	public function create()
	{
		$data['id_pelanggan'] =$this->db->query("SELECT * FROM id_pelanggan ORDER BY created_at DESC")->result();
		$data['bulan'] = $this->db->query("SELECT * FROM bulan")->result();

		$this->load->view('content/Pemakaian_listrik/add', $data);
	}

	public function store()
	{
		
		$tanggalHariIni = new DateTime('now');
		$this->form_validation->set_rules('id_pelanggan', 'ID Pelanggan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tagihan', 'Tagihan', 'required');
		// $this->form_validation->set_rules('januari', 'Januari', 'required');
		// $this->form_validation->set_rules('februari', 'Februari', 'required');
		// $this->form_validation->set_rules('maret', 'Maret', 'required');
		// $this->form_validation->set_rules('april', 'April', 'required');
		// $this->form_validation->set_rules('mei', 'Mei', 'required');
		// $this->form_validation->set_rules('juni', 'Juni', 'required');
		// $this->form_validation->set_rules('juli', 'Juli', 'required');
		// $this->form_validation->set_rules('agustus', 'Agustus', 'required');
		// $this->form_validation->set_rules('september', 'September', 'required');
		// $this->form_validation->set_rules('oktober', 'Oktober', 'required');
		// $this->form_validation->set_rules('november', 'November', 'required');
		// $this->form_validation->set_rules('desember', 'Desember', 'required');

		$data['status']="sukses";
		$data['error']="";
		
		if ($this->form_validation->run()== false){
			$data["status"]="error";
			$data["error"]= validation_errors();
			$this->session->set_flashdata('error', 'Gagal menyimpan');
			redirect('Pemakaian_listrik/create');			

		}else{
			$data["status"]=="sukses";
			$id_pelanggan = $this->input->post('id_pelanggan');
			$tahun = $this->input->post('tahun');
			$bulan = $this->input->post('bulan');
			$tagihan = $this->input->post('tagihan');
			// $januari = $this->input->post('januari');
			// $februari = $this->input->post('februari');
			// $maret = $this->input->post('maret');
			// $april = $this->input->post('april');
			// $mei = $this->input->post('mei');
			// $juni = $this->input->post('juni');
			// $juli = $this->input->post('juli');
			// $agustus = $this->input->post('agustus');
			// $september = $this->input->post('september');
			// $oktober = $this->input->post('oktober');
			// $november = $this->input->post('november');
			// $desember = $this->input->post('desember');

			$data = array(
				'id_pelanggan' => $id_pelanggan,
				'tahun' => $tahun,
				'bulan' => $bulan,
				'tagihan' => $tagihan,
				'delete_status' => 0,
				'created_at' => date('Y-m-d H:i:s')

			);
			$this->Resource->store($data,'pemakaian_listrik');
			$this->session->set_flashdata('sukses', 'Sukses menyimpan');
			redirect('Pemakaian_listrik/index');	

			
		}


		
	}
	public function edit($id)
			{	
				$data['user'] = $this->ion_auth->user()->row();
				$where = array('id_listrik' => $id);

				$data['pemakaian_listrik'] = $this->Resource->edit($where,'Pemakaian_listrik')->result();
				$data['bulan'] = $this->db->query("SELECT * FROM bulan")->result();
				$this->load->view('content/Pemakaian_listrik/edit', $data);
			}

	public function detail($id)
	{	
				$data['user'] = $this->ion_auth->user()->row();
				$where = array('id_listrik' => $id);

				$data['pemakaian_listrik'] = $this->Resource->edit($where,'Pemakaian_listrik')->result();
				$data['bulan'] = $this->db->query("SELECT * FROM bulan")->result();
				
				
				$this->load->view('content/Pemakaian_listrik/detail', $data);
	
	}


	public function update(){
		
			$id = $this->input->post('id');
			
			$id_pelanggan = $this->input->post('id_pelanggan');
			$tahun = $this->input->post('tahun');
			$bulan = $this->input->post('bulan');
			$tagihan = $this->input->post('tagihan');

		$data = array(
				'id_pelanggan' => $id_pelanggan,
				'tahun' => $tahun,
				'bulan' => $bulan,
				'tagihan' => $tagihan,

			);

		$where = array(
			'id_listrik' => $id
		);
		$this->Resource->update($where,$data,'pemakaian_listrik');
		redirect('Pemakaian_listrik/index');
	}

	function hapus ($id){ 
		$where = array('id_listrik' => $id);
		$data  = array('delete_status' => '1' );
		$this->Resource->update($where,$data,'pemakaian_listrik');
		redirect('Pemakaian_listrik/index'); 
	}
}
