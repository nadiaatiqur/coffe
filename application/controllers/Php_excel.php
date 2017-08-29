<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Php_excel extends CI_Controller {

	public $nama_tabel = 'menu';//Nama Tabel
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library("PHPExcel");
        $this->load->model("Phpexcel_model");
    }
 
    public function index(){
        $this->load->view('tampilan');
 
    }
 
    public function do_upload(){
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name'];//Nama File
            $this->phpexcel_model->upload_data($filename);
            unlink('./assets/uploads/'.$filename);
            redirect('super/laporan','refresh');
        }
    }

}

/* End of file Php_excel.php */
/* Location: ./application/controllers/Php_excel.php */