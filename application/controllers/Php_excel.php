<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Php_excel extends CI_Controller {

	public $nama_tabel = 'menu';//Nama Tabel
 
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form','download');
        $this->load->library("PHPExcel","upload");
        $this->load->model("Phpexcel_model");
    }
 
    public function index(){
        $this->load->view('super/laporan');
 
    }
 
    public function do_upload(){
        $config['upload_path'] = './asset/donlot/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size']  = '10000';
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('file')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('super/laporan', $error);
        }
        else{
           $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name'];//Nama File
            $this->Phpexcel_model->upload_data($filename);
            unlink('./asset/donlot/'.$filename);
            redirect('Php_excel/index');
        }
    }

    public function download()
    {
         //membuat objek
            $objPHPExcel = new PHPExcel();
            $data = $this->db->get('tabel_pesan');

            // Nama Field Baris Pertama
            $fields = $data->list_fields();
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
                $col++;
            }
     
            // Mengambil Data
            $row = 2;
            foreach($data->result() as $data)
            {
                $col = 0;
                foreach ($fields as $field)
                {
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                    $col++;
                }
     
                $row++;
            }
            $objPHPExcel->setActiveSheetIndex(0);

            //Set Title
            $objPHPExcel->getActiveSheet()->setTitle('Data Menu');
 
            //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
 
            //Header
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            //Nama File
            header('Content-Disposition: attachment;filename="menu.xlsx"');

            //Download
            $objWriter->save("php://output");
    }


}

/* End of file Php_excel.php */
/* Location: ./application/controllers/Php_excel.php */