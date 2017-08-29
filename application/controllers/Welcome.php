<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_cafe');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('super/tampilan');

	}



		public function profil()
	{
		$this->load->view('super/profil');
	}

		public function menu()
	{
		$data['menu'] = $this->m_cafe->menu('menu_tambah')->result();
		$this->load->view('menu',$data);
	}

	public function menu_tambah()
	{
		$this->load->view('menu_tambah');
	}

	public function aksi_tambah()
	{
		$Makanan = $this->input->post('Makanan');
		$Minuman = $this->input->post('Minuman');
		$Harga = $this->input->post('Harga');
		$Gambar = $this->input->post('Gambar');

		$data = array
		(	'makanan' => $Makanan,
			'minuman' => $Minuman,
			'harga' => $Harga,
			'gambar' => $Gambar );

		$this->m_cafe->input_menu('menu',$data);
		redirect('Welcome/menu');
	}

	public function daftar_pegawai()
	{
		$data['pegawai'] = $this->m_cafe->pegawai('daftar_pegawai')->result();
		$this->load->view('super/daftar_pegawai', $data);
	}

	public function tambah_pegawai()
	{
		$this->load->view('super/tambah_pegawai');
	}

	public function tambah_aksi()
	{
		$Name = $this->input->post('Name');
		$Date = $this->input->post('Date');
		$Address = $this->input->post('Address');

		$data = array
		(	'name' => $Name,
			'TTL' => $Date,
			'address' => $Address );

		$this->m_cafe->input('pegawai',$data);
		redirect('Welcome/daftar_pegawai');
	}

	public function hapus($id)
	{
			$where = array ('id' => $id);
			$this->m_cafe->hapus_daftar('pegawai',$where);
			redirect('Welcome/daftar_pegawai');
	}

	public function edit_pegawai($id)
	{
		$where = array('id' => $id );
		$data['user'] = $this->m_cafe->edit_pegawai('pegawai',$where)->result();
		$this->load->view('super/edit_pegawai', $data);
	}

	public function update_pegawai($id)
	{
		$Name = $this->input->post('Name');
		$Date = $this->input->post('Date');
		$Address = $this->input->post('Address');

		$data = array ('name' => $Name,
					   'TTL' => $Date,
			           'address' => $Address);
		
		$where = array ('id' => $id);

		$this->m_cafe->update('pegawai',$where,$data);
		redirect('Welcome/daftar_pegawai');
	}

	public function laporan()
	{
	$data['laporan'] = $this->m_cafe->listing('menu');
	 $this->load->view('super/laporan', $data);
	//redirect('Welcome/laporan');
	 }

	public function export_excel(){
	 $data = array( 'title' => 'Laporan Excel',
	 'menu' => $this->m_cafe->listing('menu',$data));
	 $this->load->view('Welcome/super/laporan');	}


	public function grafik()
	{
		$this->load->view('super/grafik');
	}

}
