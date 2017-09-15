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
		$this->load->helper('url','html');
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
			redirect ('Welcome/menu');
		} else{
			$data['salah'] = '<div class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Warning!</strong> Ada Nadia Attiqurohmah.
  </div>';
  		$this->load->view('login', $data);
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
			$data['salah'] = '<div class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Warning!</strong> Ada Nadia Attiqurohmah.
  </div>';

			$this->load->view('login2', $data);
		}
	}

	public function logout(){
		redirect('Welcome/login2');
		redirect('Welcome/login');
	}

	public function produk()
	{
		$data['menu'] = $this->m_cafe->tampil_data('menu')->result();

		$this->load->view('profil/produk',$data);
	}

	public function minum()
	{
		$data['menu'] = $this->m_cafe->tampil_data('menu')->result();

		$this->load->view('profil/minum', $data);
	}

	
	public function detail()
	{
		$data['data']=$this->m_cafe->tampil_data('tabel_pesan')->result();
		$this->load->view('profil/detail',$data);

	}

		public function profil()
	{
		$this->load->view('super/profil');
	}

	public function pesan()
	{
		$data['data'] = $this->m_cafe->tampil_data('tabel_pesan')->result();
		$this->load->view('profil/detail',$data);
	}

	public function tambah_pesan()
	{
		$this->load->view('profil/produk');
	}

	public function pesan_aksi()
	{
		$makanan = $this->input->post('makanan');
		$minuman = $this->input->post('minuman');
		$jumlah_makanan = $this->input->post('jumlah_makanan');
		$harga_makanan = $this->input->post('harga_makanan');
		$jumlah_minuman = $this->input->post('jumlah_minuman');
		$harga_minuman = $this->input->post('harga_minuman');
		

		$data = array 
		(
			'makanan'  => $makanan,
			'minuman' => $minuman,
			'jumlah_makanan' => $jumlah_makanan,
			'harga_makanan' => $harga_makanan,
			'jumlah_minuman' => $jumlah_minuman,
			'harga_minuman' => $harga_minuman
			);

		$this->m_cafe->input_pesan('tabel_pesan',$data);
		redirect('Welcome/detail');
	}

		public function menu()
	{
		$data['menu'] = $this->m_cafe->menu('menu_tambah')->result();
		$this->load->view('admin/menu',$data);
	}

	public function menu_tambah()
	{
		$this->load->view('admin/menu_tambah');
	}

	public function tambah_minuman()
	{
		$this->load->view('admin/tambah_minuman');
	}

	public function aksi_tambah()
	{
		$makanan = $this->input->post('makanan');
		$marga_makanan = $this->input->post('harga_makanan');
		$gambar_makanan = $this->input->post('gambar_makanan');
	
		$data = array (	'makanan' => $makanan,
						'harga_makanan' => $harga_makanan,
						'gambar_makanan' => $gambar_makanan );
		

		$this->m_cafe->input_menu('menu',$data);
		redirect('Welcome/menu');
	}

	public function aksi_menu()
	{
		$minuman = $this->input->post('minuman');
		$harga_minuman = $this->input->post('harga_minuman');
		$Gambar_minuman = $this->input->post('gambar_minuman');
	
		$data = array ('minuman' => $minuman,
						'harga_minuman' => $harga_minuman,
						'gambar_minuman' => $gambar_minuman );
		

		$this->m_cafe->menu_input('menu',$data);
		redirect('Welcome/menu');
	}

	public function aksi_foto(){
		$config['upload_path']          = './asset/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('Gambar')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('menu_tambah', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			redirect('Welcome/menu');
		}
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
		$this->load->view('admin/edit_menu', $data);
	}

	public function update_menu($id)
	{
		$Makanan = $this->input->post('Makanan');
		$Minuman = $this->input->post('Minuman');
		$Harga = $this->input->post('Harga');
		$Gambar = $this->input->post('Gambar');

		$data = array ('makanan' => $Makanan,
						'harga_makanan' => $harga_makanan,
					   'minuman' => $Minuman,
			           'harga_minuman' => $Harga_minuman,
			           'gambar' => $Gambar);
		
		$where = array ('id' => $id);

		$this->m_cafe->update_menucafe('menu',$data,$where);
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
	$data['laporan'] = $this->m_cafe->listing('tabel_pesan');
	 $this->load->view('super/laporan', $data);
	//redirect('Welcome/laporan');
	 }

	public function export_excel(){
	 $data = array( 'title' => 'Laporan Excel',
	 'tabel_pesan' => $this->m_cafe->listing('tabel_pesan',$data));
	 $this->load->view('Welcome/super/laporan');	
	}

	public function grafik()
	{
		$this->load->view('super/grafik');
	}

	public function pdf()
	{
		$data['pesan'] = $this->m_cafe->tampilpdf('tabel_pesan')->result();
		$data['header'] = array(
			array("label"=>"id","length"=>"30","align"=>"L"),
			array("label"=>"makanan","length"=>50, "align"=>"L"),
			array("label"=>"minuman","length"=>50, "align"=>"L"),
			array("label"=>"jumlah makanan","length"=>50, "align"=>"L"),
			array("label"=>"jumlah minuman","length"=>50, "align"=>"L"),
			array("label"=>"harga makanan","length"=>50, "align"=>"L"),
			array("label"=>"harga minuman","length"=>50, "align"=>"L"),
			);
		$this->load->view('super/menu_pdf', $data);
	}

	public function perkalian() 
    {
    	$harga_makan = $this->input->post('harga_makan');
    	$jumlah_makan = $this->input->post('jumlah_makan');
    	$hitung = $this->input->post('hitung');
    	$hasil = 0;
    	if ($hitung == '*') {
    		$hasil = $harga_makan * $jumlah_makan;
    	}
    	$nilai['hasil'] = $hasil;
    	echo json_encode($nilai);
    }

}
