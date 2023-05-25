<?php 

class Resource extends CI_Model{

	function show($table){
		$this->load->database(); 
		return $this->db->get($table);
	}
	function store($data,$table){  
		$this->load->database();
		$this->db->insert($table,$data);
	}
	function komite($data){  
		$this->load->database();
		$this->db->insert('transaksi',$data);
	}
	
	function edit($where,$table){	
		$this->load->database();	
		return $this->db->get_where($table,$where);
	}	
	function update($where,$data,$table){
		$this->load->database();	
		$this->db->where($where); 
		$this->db->update($table,$data);
	}
	function destroy($where,$table){
		$this->load->database(); 
		$this->db->where($where);
		$this->db->delete($table);
	}
	function cek($username, $password) {
    $this->db->where("username", $username);
    $this->db->where("pass_login", $password);
    return $this->db->get("tb_users");
    }

    function fetch_chart_data($year)
    {	
    	$this->db->select('bulan', );
    	$this->db->where('tahun', $year);
    	$this->db->where('delete_status', '0');
    	$this->db->group_by('bulan', 'ASC');
    	$this->db->order_by('bulan', 'ASC');
    	return $this->db->get('pemakaian_listrik');
    }

    function fetch_chart_data_2($year)
    {
    	$this->db->select('bulan');
    	$this->db->select('SUM(tagihan) AS tagihan');
    	$this->db->where('tahun', $year);
    	$this->db->where('delete_status','0');
    	$this->db->group_by('bulan');
    	$this->db->order_by('bulan');

    	return $this->db->get('pemakaian_listrik');
    }

    function fetch_chart_data_meteran_1($year)
    {
    	$this->db->select('bulan');
    	$this->db->select('SUM(tagihan) AS tagihan');
    	$this->db->where('tahun', $year);
    	$this->db->where('delete_status','0');
    	$this->db->where('id_pelanggan', '1');
    	$this->db->group_by('bulan');
    	$this->db->order_by('bulan');

    	return $this->db->get('pemakaian_listrik');
    }
	function fetch_chart_data_meteran_2($year)
    {
    	$this->db->select('bulan');
    	$this->db->select('SUM(tagihan) AS tagihan');
    	$this->db->where('tahun', $year);
    	$this->db->where('delete_status','0');
    	$this->db->where('id_pelanggan', '2');
    	$this->db->group_by('bulan');
    	$this->db->order_by('bulan');

    	return $this->db->get('pemakaian_listrik');
    }
	function fetch_chart_data_meteran_3($year)
    {
    	$this->db->select('bulan');
    	$this->db->select('SUM(tagihan) AS tagihan');
    	$this->db->where('tahun', $year);
    	$this->db->where('delete_status','0');
    	$this->db->where('id_pelanggan', '3');
    	$this->db->group_by('bulan');
    	$this->db->order_by('bulan');

    	return $this->db->get('pemakaian_listrik');
    }

	function fetch_chart_data_meteran_4($year)
    {
    	$this->db->select('bulan');
    	$this->db->select('SUM(tagihan) AS tagihan');
    	$this->db->where('tahun', $year);
    	$this->db->where('delete_status','0');
    	$this->db->where('id_pelanggan', '4');
    	$this->db->group_by('bulan');
    	$this->db->order_by('bulan');

    	return $this->db->get('pemakaian_listrik');
    }
	

}


