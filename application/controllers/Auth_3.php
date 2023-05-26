<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_3 extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		// $this->load->library('ion_auth');
	}

	public function index()
	{
		$this->load->view('auth_3/login');
	}
}
