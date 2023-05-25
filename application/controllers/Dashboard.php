<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Resource');
	}

	public function index()
	{
		
		$data['tahun'] = $this->db->query('SELECT tahun FROM pemakaian_listrik
			GROUP BY tahun	
			order by tahun DESC')->result();

		$this->load->view('content/dashboard/index', $data);


	}

	public function fetch_data(){
		if($this->input->post('year'))
		{
			$chart_data = $this->Resource->fetch_chart_data($this->input->post('year'));
			// $chart_data = $this->Resource->fetch_chart_data('2022');

			foreach($chart_data->result_array() as $row)
			{
				$output[] = array(
					'bulan'  => $row["bulan"],
					'tagihan' => floatval($row["tagihan"])
				);
			}
			$json =  json_encode($output);
			 $this->output
            ->set_content_type('application/json')
            ->set_output($json);
		}
	}
	public function fetch_data_test(){
		// if($this->input->post('year'))
		// {
			// $chart_data = $this->Resource->fetch_chart_data($this->input->post('year'));
			$chart_data = $this->Resource->fetch_chart_data_2('2022');

			foreach($chart_data->result_array() as $row)
			{
				$output[] = array(
					'bulan'  => $row["bulan"],
					'tagihan' =>  floatval($row["tagihan"])
				);
			}
			$json =  json_encode($output);
			 $this->output
            ->set_content_type('application/json')
            ->set_output($json);
		// }
	}

	public function fetch_data_meteran_1(){
		// if($this->input->post('year'))
		// {
			// $chart_data = $this->Resource->fetch_chart_data($this->input->post('year'));
			$chart_data = $this->Resource->fetch_chart_data_meteran_1('2022');

			foreach($chart_data->result_array() as $row)
			{
				$output[] = array(
					'bulan'  => $row["bulan"],
					'tagihan' =>  floatval($row["tagihan"])
				);
			}
			$json =  json_encode($output);
			 $this->output
            ->set_content_type('application/json')
            ->set_output($json);
		// }
	}

	public function fetch_data_meteran_2(){
		// if($this->input->post('year'))
		// {
			// $chart_data = $this->Resource->fetch_chart_data($this->input->post('year'));
			$chart_data = $this->Resource->fetch_chart_data_meteran_2('2022');

			foreach($chart_data->result_array() as $row)
			{
				$output[] = array(
					'bulan'  => $row["bulan"],
					'tagihan' =>  floatval($row["tagihan"])
				);
			}
			$json =  json_encode($output);
			 $this->output
            ->set_content_type('application/json')
            ->set_output($json);
		// }
	}

	public function fetch_data_meteran_3(){
		// if($this->input->post('year'))
		// {
			// $chart_data = $this->Resource->fetch_chart_data($this->input->post('year'));
			$chart_data = $this->Resource->fetch_chart_data_meteran_3('2022');

			foreach($chart_data->result_array() as $row)
			{
				$output[] = array(
					'bulan'  => $row["bulan"],
					'tagihan' =>  floatval($row["tagihan"])
				);
			}
			$json =  json_encode($output);
			 $this->output
            ->set_content_type('application/json')
            ->set_output($json);
		// }
	}

	





}
