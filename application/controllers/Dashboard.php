<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		// tambahkan kondisi untuk ambil session
		// masukkan kondisi untuk memeriksa user dari level ermm
		// print_r($password = $this->session);
		$this->template->load('template', 'dashboard');
	}
}
