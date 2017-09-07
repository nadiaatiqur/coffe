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
		$this->load->view('profil/utama');

	}
	public function login()
	{
		$this->load->view('login');
	}

	public function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_cafe->cek_login("login",$where)->num_rows();
		if($cek>0) {
			$data_session = array(
				'nama' => $username,
				'status' => 'login'
				);
			$this->session->set_userdata($data_session);
			redirect (base_url('Welcome/profil'));
		} else{
			echo "Username dan Password Salah!!!";
		}
	}

	public function login2()
	{
		$this->load->view('login2');
	}
	public function aksi_login2()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_cafe->cek_login("login2",$where)->num_rows();
		if($cek>0) {
			$data_session = array(
				'nama' => $username,
				'status' => 'login'
				);
			$this->session->set_userdata($data_session);
			redirect (base_url('Welcome/profil'));
		} else{
			echo "Username dan Password Salah!!!";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	public function produk()
	{
		$this->load->view('profil/produk');
	}

	
	public function detail()
	{
		$this->load->view('profil/detail');

	}

		public function profil()
	{
		$this->load->view('super/profil');
	}

	public function pesan()
	{
		$this->m_cafe->tampil_pesan('tabel_pesan',$data);
		$this->load->view('profil/detail',$data);
	}

	public function tambah_pesan()
	{
		$this->load->view('profil/produk');
	}

	public function pesan_aksi()
	{
		$makan = $this->input->post('makan');
		$minum = $this->input->post('minum');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');

		$data = array 
		(
			'makan'  => $makan,
			'minum' => $minum,
			'harga_menu' => $harga,
			'jumlah_pesanan' => $jumlah
			);
		$this->m_cafe->input_pesan('tabel_pesan',$data);
		redirect('Welcome/detail');
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

	public function hapus_menu($id)
	{
			$where = array ('id' => $id);
			$this->m_cafe->hapus_menu('menu',$where);
			redirect('Welcome/menu');
	}

	public function edit_menu($id)
	{
		$where = array('id' => $id );
		$data['menu'] = $this->m_cafe->edit_menu('menu',$where)->result();
		$this->load->view('edit_menu', $data);
	}

	public function update_menu($id)
	{
		$Makanan = $this->input->post('Makanan');
		$Minuman = $this->input->post('Minuman');
		$Harga = $this->input->post('Harga');
		$Gambar = $this->input->post('Gambar');

		$data = array ('makanan' => $Makanan,
					   'minuman' => $Minuman,
			           'harga' => $Harga,
			           'gambar' => $Gambar);
		
		$where = array ('id' => $id);

		$this->m_cafe->update_menucafe('menu',$where,$data);
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
