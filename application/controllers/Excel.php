<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_cafe');
		$this->load->helper('url');
	}

	public function index() 
	{
	 $data = array(
	 'makanan' => $Makanan,
	 'minuman' => $Minuman,
	 'harga' => $Harga );

	 $this->m_cafe->listing('menu',$data);
	redirect('Welcome/laporan');
	 }

	public function export_excel(){
	 $data = array( 'title' => 'Laporan Excel',
	 'menu' => $this->m_cafe->listing('menu',$data));
	 $this->load->view('laporan');
	 }

}

/* End of file Excel.php */
/* Location: ./application/controllers/Excel.php */